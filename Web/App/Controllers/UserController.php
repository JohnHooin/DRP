<?php 
namespace App\Controllers;
require_once($_SERVER['DOCUMENT_ROOT'] . '/App/Core/init.php');
use App\Controllers\BaseController;
use App\Controllers\HomeController;
use App\Models\UserModel;

class UserController extends BaseController
{
    // Get Path Class User Model;
    public function loginUI()
    {
        return $this->loadView('auth.login');
    }

    public function login(){
        $data = $_POST;
        $errors = [];

        if ($data['username'] == ''){
            $errors['username'] = "Please enter your name login!";
        }
        if ($data['password'] == ''){
            $errors['password'] = "Please enter your password!";
        }
        if ($errors){
            return $this->loadView('auth.login', $errors);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])){
            $userModel = UserModel::authenticate($data);
            if($userModel){   
                $_SESSION['logged_in'] = true;
                if ($_SESSION['level'] == 4){
                    echo '<script>
                    alert("You are banning!, please try again or contact admin!");
                    window.location.href = "/login";
                    </script>';
                }
                header("Location: /index");
                exit();
            } else {
                echo '<script>
                alert("Incorrect username or password!, Please try again!");
                window.location.href = "/login";
                </script>';
                exit();
            }
        }
    }

    public function registeryUI()
    {
        return $this->loadView('auth.login');
    }

    public function registery(){
        $userModel = new UserModel;
        $data = $_POST;

        if ($userModel->checkEmail($data['email'])) {
            echo '<script>
            alert("email already exist!");
            window.location.href = "/registery";
            </script>';
        }else if ($userModel->checkUserName($data['username'])){
            echo '<script>
            alert("Username Already Existed");
            window.location.href = "/registery";
            </script>';
        }else if(UserModel::addUser($data)){
            echo '<script>
                alert("Register Success!");
                window.location.href = "/login";
            </script>';
            exit();
        } else {
            echo '<script>
                alert("Register Fail!, Please try again!");
                window.location.href = "/registery";
            </script>';
            exit();
        }

    }

    public function logout(){
        // Kiểm tra xem session có tồn tại không
        if(session_status() === PHP_SESSION_ACTIVE) {
            // Hủy toàn bộ session
            session_unset();
            session_destroy();

            // Xóa cookie session nếu được sử dụng
            if(ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(
                    session_name(), 
                    '', 
                    time() - 42000, 
                    $params["path"],
                    $params["domain"],
                    $params["secure"],
                    $params["httponly"]
                );
            }
        }
        header("Location: /index");
    }

    public static function isLoggedIn(){
        return isset($_SESSION) && isset($_SESSION['logged_in']);
    }

    public static function isContributer(){
        return isset($_SESSION['level']) && $_SESSION['level'] == 2;
    }
}
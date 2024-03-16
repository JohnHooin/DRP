<?php namespace App\Controllers;

use App\Core\Router;
use App\Models\UserModel;

class AdminController extends BaseController{
    public function index(){
        return $this->loadView('admin.index');
    }

    // User
    public function userManager(){
        if(!$this->isAdmin()){
            return parent::loadError('404');
        }
        $users = UserModel::getAllUser();
        return $this->loadView('admin.user', ['users' => $users]);
    }    
    
    public function userManagerUpdateUI(){
        if(!$this->isAdmin()){
            return parent::loadError('404');
        }
        $users = UserModel::getUserById($_GET['id']);
        return $this->loadView('admin.userUpdate', ['user' => $users]);
    }

    public function userManagerUpdate(){
        $data = $_POST;
        UserModel::update($data);
        header("Location: /manager/user");
    }

    public function userManagerAdd(){
        $data = $_POST;
        UserModel::addUser($data);
        header("Location: /manager/user");
    }

    public function setLevel(){
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])){
            $data = $_POST;
            UserModel::setLevel($data);
            header("Location: /manager/user");
        }
    }

    private function isAdmin(){
        return isset($_SESSION['level']) && $_SESSION['level'] == 1;
    }
}
?>
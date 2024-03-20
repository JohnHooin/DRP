<?
use App\Controllers\UserController;
?>

<!-- Navbar -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a2af703eed.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="vendors/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="icon" type="image/x-icon" href="/Public/images/logo.png">
  <link rel="stylesheet" href="/Public/css/costum.css">
  <title>PaPals-Enjoy your meals</title>
  <style>
    body {
      background-color: #CCD8FF;
      background: linear-gradient(to right, #E2E2E2, #CCD8FF);
    }

    input[type="number"] {
      -moz-appearance: textfield;
      -webkit-appearance: textfield;
    } 
    p {
      margin: 0.25rem;
    }

    .page {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .page .header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .page .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1000;
    }

    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }

    .navbar {
      height: 80px;
    }

    .navbar-brand img {
      height: 35px
    }

    .navbar-brand h3 {
      font-size: 20px
    }

    .navbar-nav .nav-link {
      font-size: 15px
    }

    a.card, div.card{
      transition: all linear 0.24s;
    }
    a.card:hover, div.card:hover{
      transform: translate(-3px, -3px);
      box-shadow: 3px 3px 4px 2px #b9b9b9; 
    }
    .minspace{
      min-height: 560px;
    }
  </style>

</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e1ebfa;">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="d-flex justify-content-center align-items-center">
            <a class= "navbar-brand mt-2 mt-lg-0" href="/homepage">
              <img src="/Public/images/logo.png" height="50" alt="PaPals" loading="lazy" />
              <h3>PaPals</h3>
            </a>
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:16px">
            <li class="nav-item">
              <a class="m-2" href="/homepage">Home</a>
            </li>
            <li class="nav-item">
              <a class="m-2" href="/recipe">Recipe</a>
            </li>
            <li class="nav-item">
              <a class="m-2" href="/ingredient">Ingredients</a>
            </li>
          </ul>
          <div class=" d-flex justify-content-center align-items-center input-group me-3" style="width:300px">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="button">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>

        <?php
        // Kiểm tra xem đã đăng nhập chưa            
        if (UserController::isLoggedIn()) :
          // Nếu đã đăng nhập, hiển thị nút logout và account
        ?>
          <div class="d-flex align-items-center">
            <div class="btn-group dropstart">
              <div class="btn-group dropstart">
                <img src="/Public/images/account.png" id="user" class="rounded-circle me-3 account hide"  data-bs-toggle="dropdown" aria-expanded="false" height="30" alt="account" style="cursor: pointer;" />
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/recipe/add">Add recipe <i class="fa-regular fa-plus"></i></a></li>
                  <li><a class="dropdown-item" href="/manager/recipe">Manage recipe<i class="fa-regular fa-plus"></i></a></li>
                  <li><a class="dropdown-item" href="/ingredient/add">Add ingredient<i class="fa-regular fa-plus"></i></a></li>
                  <li><a class="dropdown-item" href="/manager/ingredient">Manage ingredient<i class="fa-regular fa-plus"></i></a></li>
                  <li><a href="/logout" class="ms-3 mt-3 btn btn-primary btn-xs" tabindex="-1" role="button" aria-disabled="true">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php else : // Nếu chưa đăng nhập, hiển thị nút login
        ?>
          <div class="d-flex align-items-center">
            <a href="/login" class="btn btn-primary btn-xs " tabindex="-1" role="button" aria-disabled="true">Login</a>
          </div>
        <?php endif; ?>
        </a>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </div>

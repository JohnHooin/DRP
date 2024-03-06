
<!-- Navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a2af703eed.js" crossorigin="anonymous"></script>
    <!-- <script src="../../Public/js/custom.js"></script> -->
    <!-- <link rel="stylesheet" href="$_SERVER['DOCUMENT_ROOT'] . Public/css/preloader_styles.css"> -->
    <title>PaPals-Enjoy your meals</title>
    <style>
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
        .show {
        display: none;  
        }
        .dropdown-toggle:hover .show {
            display: block !important;
            position: absolute;
            top: 36px;
            right: 0px;
        }
        </style>
</head>
<body>
  <!-- <div class="loader_container">
    <span class="loader">Loading....</span>
  </div> -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e1ebfa;">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://cdn-icons-png.flaticon.com/128/3274/3274099.png"
            height="50"
            alt="PaPals"
            loading="lazy"
          />
          <h3>PaPals</h3>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:16px">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Post</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <img id="user"
          src="https://cdn-icons-png.flaticon.com/128/3033/3033143.png"
          class="rounded-circle me-3 account hide"
          height="30"
          alt="Black and White Portrait of a Man"
        />
        <!-- <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div> -->
            <button id="login" class="login btn btn-primary">Log In</button>
          </a>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</body>

<style>
  .hide {
    display: none;
  }
  .show{
    display: block;
  }
</style>
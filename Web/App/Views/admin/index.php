<? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/header.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div class="container py-3">
      <div class="row">
        <div class="col-md-4">
          <div class="advert">
            <img src="/Public/images/account.png" class="img-thumbnail" alt="Ảnh user">
            <div class="link">    
                <a href="/manager/user" class="btn btn-secondary" tabindex="-1" role="button">Quản lý người dùng!</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="advert">
            <img src="/Public/images/recipe.png" class="img-thumbnail" style="height:415px" alt="ảnh recipe">
            <div class="link">
                <a href="/manager/recipe" class="btn btn-secondary" tabindex="-1" role="button">Quản lý công thức!</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="advert">
            <img src="/Public/images/ingredient.jpg" class="img-thumbnail" style="height:415px" alt="ảnh ingredient">
            <div class="link">
                <a href="/manager/ingredient" class="btn btn-secondary" tabindex="-1" role="button">Quản lý nguyên liệu!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="fixed-bottom">
      <? require($_SERVER['DOCUMENT_ROOT'] . "/Public/inc/footer.php")?>  
    </footer>    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

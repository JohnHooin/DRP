<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng Ký</title>
</head>

<body>
    <h1>Đăng Ký Tài Khoản</h1>
    <form name="frmPost" action="post-form.php" method="post">
        <legend>Đăng Ký</legend>
        <fieldset>
            <p>
                <label for="hoten"> Họ Tên </label>
                <input name="hoten" id="hotens" type="text" placeholder="NhậpHọ Tên" />
            </p>
            <p>
                <label for="password"> Mật Khẩu </label>
                <input name="password" id="passwords" type="password" placeholder="Nhập Mật Khẩu" />
            </p>
            <p>
                <input type="submit" value="Login" />
                <input type="reset" value="Cancel" />
            </p>
        </fieldset>
    </form>
</body>

</html>

<?php

    
?>
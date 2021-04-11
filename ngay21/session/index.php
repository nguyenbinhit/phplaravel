<?php
    session_start();

    if (!isset($_SESSION["user_login"]["login"]) && $_SESSION["user_login"]["login"] != 1) {
        header("Location: login.php");
        exit();
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        dùng session cho giỏ hàng, đăng nhập, đăng xuất
        xác thực người dùng
        - phân quyền
        - username/password
        - root/abc@123
        - session có thể chia sẻ dữ liệu trên tất cả các file php của server
        vd : server có 200 file php khác nhau
    </pre>

    <div>
        Đăng nhập thành công
        <br> chào <?php isset($_SESSION["user_login"]["username"]) ? $_SESSION["user_login"]["username"] : "" ?> bạn đã vào trang quản trị

        <a href="logout.php">Dang xuat</a>
    </div>
</body>
</html>
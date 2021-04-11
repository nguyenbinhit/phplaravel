<?php
    session_start();
    $errors = [];

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (strlen($username) == 0 || strlen(password) == 0) {
            $errors[] = "Chua nhap username va password";
        }
        else{
            if ($username == "root" && $password == "abc@123") {
                $_SESSION["user_login"] = ["username" => $username, "password" => $password, "login" => 1];

                header("Location: index.php");
                die();
            }
            else{
                $errors[] = "username va password khong dung";
            }
        }
    }
    else
    {
        $errors[] = "Chua nhap username va password";
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
    <form action="" name="login" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="">
        </div>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
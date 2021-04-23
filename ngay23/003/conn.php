<?php
// XAMPP
$userName = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "abc";


try {

    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password,$options);

    // set the PDO error mode to exception
    // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    // nhận lỗi thông điệp ngoại lệ
    echo "Connection failed: " . $e->getMessage();
    exit();
}
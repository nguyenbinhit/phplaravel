<?php
// XAMPP
$userName = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "abc";


try {
    $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);
    // set the PDO error mode to exception
    // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";

}catch(PDOException $e) {

    // kết nối thất bại
    echo "<pre>";
    print_r($e);
    echo "</pre>";

//    echo "Connection failed: " . $e->getMessage();
}
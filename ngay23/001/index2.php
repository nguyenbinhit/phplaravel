<?php
// CREATE DATABASE dbname;

// XAMPP
$userName = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
//$databaseName = "abc";


try {
    $conn = new PDO("mysql:host=$serverName", $userName, $password);
    // set the PDO error mode to exception
    // đặt chế độ lỗi cho ngoại lệ khi kết nối PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE abc";

    // để thực hiện 1 câu sql bằng PDO
    // dùng biến chứa kết nối đến csdl -> phương thức exec()
    // truyền câu lệnh sql vào trong method exec($sql)
    $sqlReturn = $conn->exec($sql);

    if ($sqlReturn == 1) {
        // câu lệnh query sql thành công
    }
    else {
        // câu lệnh query sql k thành công
    }

    echo "Connected successfully";



}catch(PDOException $e) {

    // kết nối thất bại
    echo "<pre>";
    print_r($e);
    echo "</pre>";

    // nhận lỗi thông điệp ngoại lệ
    echo "Connection failed: " . $e->getMessage();

}
<?php

// câu lệnh sql để xoá csdl

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

    $sql = "CREATE TABLE students (
     student_id BIGINT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     student_name VARCHAR(255) NOT NULL DEFAULT '',
     student_score FLOAT(7,2) DEFAULT 0.00,
     student_gender BIT(1) DEFAULT 1,
     student_location TEXT,
     student_birthday DATETIME,
     created DATETIME,
     updated DATETIME,
     )";

    // để thực hiện 1 câu sql bằng PDO
    // dùng biến chứa kết nối đến csdl -> phương thức exec()
    // truyền câu lệnh sql vào trong method exec($sql)
    $sqlReturn = $conn->exec($sql);

    if ($sqlReturn == 0) {
        // câu lệnh query sql thành công
    }
    else {
        // câu lệnh query sql k thành công
    }

    echo "Xoá thành công";

}catch(PDOException $e) {

    // kết nối thất bại
    echo "<pre>";
    print_r($e);
    echo "</pre>";

    // nhận lỗi thông điệp ngoại lệ
    echo "Tạo thất bại: " . $e->getMessage();
}

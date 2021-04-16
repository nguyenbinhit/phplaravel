<?php
// XAMPP
$serverName = "root";
$password = "";
// máy chủ CSDL ( IP ) sử dụng 127.0.0.1 hay localhost => production : 192.118.1.11
$serverName = "127.0.0.1";
// tên CSDL ( tùy chọn )
$databaseName = "t3h.12.2020";

// kết nối đến CSDL theo hướng hàm function
// dùng hàm có sẵn của php để kết nối

$conn = mysqli_connect($serverName, $serverName, $password, $databaseName);

// kiểm tra lỗi hay k
//var_dump($conn);

echo "<pre>";
print_r($conn);
echo "</pre>";

if (!$conn) {
    // kết nối thất bại
}
else {
    // kết nối thành công
}
<?php
    // json để trao đổi hoặc lưu trữ dữ liệu
    // gần giống như object trong javascript
    // ứng dụng: dùng trao đổi dữ liệ giữa máy chủ khách và máy chủ hoặc giữa máy chủ với máy chủ khác
    // trao đổi gọi API

$cities = ["hn", "đà nẵng"];
// chuyển 1 array hay một object php => json
$json1 = json_encode($cities);

echo "<br>" .$json1;
var_dump($json1);

// json_decode để giải mã
$citiesRevert = json_decode($json1);
print_r($citiesRevert);
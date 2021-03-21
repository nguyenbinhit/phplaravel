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
        ví dụ thay đổi giá trị của các phần tử trong mảng
        thông qua việc gán lại theo key
        yêu cầu : thêm chữ "thành phố" trước thành phố.
        thêm chữ "người" sau dân số
        thêm chữ "km2" sau diện tích
        thêm 1 key vào bên trong phần tử là mds
    </pre>
    <?php
    $cities = [
        ["name" => "hà nội", "ds" => 5000000, "s" => 1000]  ,
        ["name" => "hồ chí minh", "ds" => 8000000, "s" => 2000]  ,
        ["name" => "thanh hóa", "ds" => 2000000, "s" => 100]  ,
        ["name" => "nghệ an", "ds" => 1000000, "s" => 200]  ,
        ["name" => "hà tĩnh", "ds" => 3000000, "s" => 800]  ,
    ];

    echo "<br> Mảng ban đầu";
    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    echo "<br>Mảng sau khi xử lý";
    $cities = [
        ["name" => "thành phố Đà Nẵng", "ds" => "5000000 người", "s" => "1000 km2", "mds" => "5000"],
        ["name" => "thành phố Hà Nội", "ds" => "8000000 người", "s" => "2000 km2", "mds" => "4000"],
        ["name" => "thành phố Nghệ An", "ds" => "2000000 người", "s" => "100 km2", "mds" => "20000"],
        ["name" => "thành phố Hà Tĩnh", "ds" => "1000000 người", "s" => "200 km2", "mds" => "500"],
        ["name" => "thành phố Việt Trì", "ds" => "3000000 người", "s" => "800 km2", "mds" => "3750"]
    ];
    echo "<pre>";
    print_r($cities);
    echo "</pre>";
    ?>
</body>
</html>
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
        mảng kết hợp
            - key của mảng kết hợp có ít nhất 1 key là chuỗi
            - key vừa là số vừa là chuỗi
            - key toàn chuỗi
    </pre>
    <?php
        //cách 1
        $sinhVien = [];
        $sinhVien[0] = "nguyen van an";
        $sinhVien["nvt"] = "nguyen an tuan";
        //cách 2
        $sinhVien2 = [];
        $sinhVien2["nva"] = "nguyen van an";
        $sinhVien2["nvt"] = "nguyen an tuan";

        echo "<pre>";
            print_r($sinhVien2);
        echo "</pre>";
    ?>
    <pre>
        mảng sinvien và sinhvien2 toàn là mảng kết hợp
        
    </pre>
</body>
</html>
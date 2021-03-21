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
        Mảng trong php:
            - mảng chỉ số là mảng có các key là chỉ số
    </pre>
    <?php
        //cách 1
        $sinhVien = [0 => "nguyen van an", 1 => "ng van tuan"];
        //cách 2
        $sinhVien1 = array(0 => "nguyen van an", 1 => "ng van tuan");
        //cách 3
        $sinhVien2 = ["nguyen van an", "ng van tuan"];
        //cách 4
        $sinhVien3 = [];
        $sinhVien3[0] = "nguyen van an";
        $sinhVien3[1] = "ng van tuan";
        //cách 5
        $sinhVien4 = [];
        $sinhVien4[] = "nguyen van an";
        $sinhVien4[] = "ng van tuan";

        var_dump($sinhVien);

        echo "<pre>";
            print_r($sinhVien);
        echo "</pre>"
    ?>
</body>
</html>
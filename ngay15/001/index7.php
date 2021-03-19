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

<?php
    $tuoi = 14;
    if ($tuoi < 6) {
        echo "Mầm non";
    }
    elseif ($tuoi < 11)
    {
        echo "Cấp 1";
    }
    elseif ($tuoi < 16) {
        echo "Cấp 2";
    }
    elseif ($tuoi < 19) {
        echo "Cấp 3";
    }
    elseif ($tuoi < 23) {
        echo "Đại học";
    }
    else {
        echo "Tốt nghiệp";
    }
?>

</body>
</html>
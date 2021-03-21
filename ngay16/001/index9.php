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
        mảng đa chiều
            - mỗi phần tủ bên trong có thể là mảng

        tỉnh chứa quận huyện
        quận huyện chứa phường
    </pre>

    <?php
        $cites = [];
        $cites["hn"] = ["name" => "hà nội", "district" => ["quận tây hồ", "quận hai bà chưng"]];
        $cites["hcm"] = ["name" => "hồ chí minh", "district" => ["quận thủ đức","quận 1", "quận 8"]];

        echo "<pre>";
            print_r($cites);
        echo "</pre>";

        echo "<br>".$cites["hn"]["district"][0];
        echo "<br>".$cites["hcm"]["district"][2];
        echo "<br>".$cites["hn"]["name"];
        echo "<br>".$cites["hcm"]["name"];


    ?>
</body>
</html>
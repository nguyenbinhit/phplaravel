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
    $cites["hn"] = ["name" => "hà nội", "district" => [["name"=> "quận tây hồ", "unit" => ["phường 1", "phường 2"]]]];
    $cites["hcm"] = ["name" => "hồ chí minh", "district" => [["name" => "quận thủ đức", "unit" => ["phường 3", "phường 4"]]]];

    echo "<pre>";
    print_r($cites);
    echo "</pre>";

    echo "<br>".$cites["hn"]["district"][0]["unit"][0];
    echo "<br>".$cites["hcm"]["district"][0]["unit"][0];
    echo "<br>".$cites["hn"]["district"][0]["name"];
    echo "<br>".$cites["hcm"]["district"][0 ]["name"];
    echo "<br>".$cites["hn"]["name"];
    echo "<br>".$cites["hcm"]["name"];


    ?>
</body>
</html>
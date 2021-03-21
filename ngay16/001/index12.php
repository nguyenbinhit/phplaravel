<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

    <?php
    $cities = [
        ["name" => "hà nội", "ds" => 5000000, "s" => 1000]  ,
        ["name" => "hồ chí minh", "ds" => 8000000, "s" => 2000]  ,
        ["name" => "thanh hóa", "ds" => 2000000, "s" => 100]  ,
        ["name" => "nghệ an", "ds" => 1000000, "s" => 200]  ,
        ["name" => "hà tĩnh", "ds" => 3000000, "s" => 800]  ,
    ];
    ?>

    <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>STT</td>
                <td>tên TP</td>
                <td>dân số</td>
                <td>diện tích</td>
                <td>mật độ người / km2</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>hà nội </td>
                <td>5000000</td>
                <td>100</td>
                <td>?</td>
            </tr>
            <?php foreach ($cities as $key => $city) : ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $city["name"] ?></td>
                    <td><?php echo $city["ds"]?></td>
                    <td><?php echo $city["s"] ?></td>
                    <td>?</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
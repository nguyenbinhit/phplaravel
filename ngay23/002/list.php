<?php
    require_once "connect.php";

    $sqlSelect = "SELECT * FROM `students` ";

    $sqlsv = $conn->query($sqlSelect);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Danh sách sinh viên</h1>

            <div style="margin: 20px">
                <a href="create.php" class="btn btn-info">Thêm mới sinh viên</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã SV</th>
                        <th>Tên SV</th>
                        <th>Địa điểm</th>
                        <th>Sinh Nhật</th>
                        <th>Điểm</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>hà nội</td>
                        <td>12/12/1995</td>
                        <td>9.5</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <?php foreach ($sqlsv as $item) : ?>
                        <tr>
                            <td><?php echo $item["student_id"] ?></td>
                            <td><?php echo $item["student_name"] ?></td>
                            <td><?php echo $item["student_location"] ?></td>
                            <td><?php echo $item["student_birthday"] ?></td>
                            <td><?php echo $item["student_score"] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $item["student_id"] ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $item["student_id"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

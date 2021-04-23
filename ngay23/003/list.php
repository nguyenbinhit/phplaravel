<?php
require_once "conn.php";

$sqlSelect = "SELECT * FROM producs";
$stmt = $conn->prepare($sqlSelect);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);
$list = $stmt->fetchAll();
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
            <h1>Danh sách sản phẩm</h1>

            <div style="margin: 20px">
                <a href="create.php" class="btn btn-info">Thêm mới sản phẩm</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Giá bán</th>
                    <th>Giá niêm yết</th>
                    <th>Tồn kho</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($list) && !empty($list)) {
                        foreach($list as $keyProducts => $product) {
                            // $student
                            ?>

                            <tr>
                                <td><?php echo $product->product_id ?></td>
                                <td><?php echo $product->product_name ?></td>
                                <td><?php echo $product->product_price_sell ?></td>
                                <td><?php echo $product->product_price_core ?></td>
                                <td><?php echo $product->product_quatity ?></td>
                                <td><?php echo $product->product_desc ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $product->product_id ?>" class="btn btn-warning">Edit</a>
                                    <a href="delete.php?id=<?php echo $product->product_id ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                        } // end foreach
                    } // end if
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

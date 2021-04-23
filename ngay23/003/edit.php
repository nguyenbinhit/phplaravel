<?php
require_once "conn.php";

if (is_array($_POST) && !empty($_POST)) {

    $product_id = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
    $product_name = isset($_POST["product_name"]) ? $_POST["product_name"] : '' ;
    $product_price_sell = isset($_POST["product_price_sell"]) ? $_POST["product_price_sell"] : 0 ;
    $product_price_core = isset($_POST["product_price_core"]) ? $_POST["product_price_core"] : 0 ;
    $product_quatity = isset($_POST["product_quatity"]) ? $_POST["product_quatity"] : 0 ;
    $product_desc = isset($_POST["product_desc"]) ? $_POST["product_desc"] : '' ;

    $sqlUpdate = "UPDATE `producs` 
    SET `product_name`='$product_name', `product_price_sell`= $product_price_sell, `product_price_core`= $product_price_core, `product_quatity`= $product_quatity, `product_desc`='$product_desc' WHERE `product_id` = $product_id";

//    echo "$sqlUpdate";

    $resultUpdate = $conn->exec($sqlUpdate);

    if ($resultUpdate == 1) {
        header("Location: list.php");
    }
    else {

    }


}

// lấy ra dữ liệu cũ
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
if ($id > 0) {
    $sqlSelect = "SELECT * FROM producs WHERE product_id=$id";
    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);
    $student = $stmt->fetchObject();
}


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
            <h1>Thêm mới sản phẩm</h1>
            <form name="themsv" action="" method="post">
                <input type="hidden" name="product_id" value="<?php echo isset($student->product_id) ? $student->product_id : 0 ?>">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="product_name" value="<?php echo isset($student->product_name) ? $student->product_name : '' ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="number" name="product_price_sell" value="<?php echo isset($student->product_price_sell) ? $student->product_price_sell : 0 ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Giá niêm yết</label>
                    <input type="number" name="product_price_core" value="<?php echo isset($student->product_price_core) ? $student->product_price_core : 0 ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tồn kho (số lượng)</label>
                    <input type="number" name="product_quatity" value="<?php echo isset($student->product_quatity) ? $student->product_quatity : 0 ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label class="">Mô tả</label>
                    <textarea rows="9" cols="70" name="product_desc">
                        <?php echo isset($student->product_desc) ? $student->product_desc : '' ?>
                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>


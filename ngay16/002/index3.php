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
        function BMI($w, $h) {
            $bmi = $w / ($h*$h);
            if ($bmi < 18.5) {
                $calc = "Dưới chuẩn";
            }elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                $calc = "bình thường";
            }elseif ($bmi >= 25 && $bmi <= 29.9) {
                $calc = "thừa cân";
            }elseif ($bmi >= 30 && $bmi <= 34.9) {
                $calc = "béo cấp 1";
            }elseif ($bmi >= 35 && $bmi <= 39.9) {
                $calc = "béo cấp 2";
            }else {
                $calc = "béo cấp độ 3";
            }

            return ["bmi" => $bmi, "calc" => $calc];
        }

        //gán mặc định
        $a = $b = "";

        if (isset($_POST["chieucao"]) && isset($_POST["cannang"]))
        {
            $a = $_POST["cannang"];
            $b = $_POST["chieucao"];

            $kq = BMI($a, $b);
        }
    ?>
    <pre>
        $_POST để lấy dữ liệu của form post đi có method = post
    </pre>
    <form name="bmi" action="" method="post">
        <div>
            <label for="">Chiều cao</label>
            <input name="chieucao" value="<?php echo $a ?>" type="text">
        </div>
        <div>
            <label for="">Cân nặng</label>
            <input name="cannang" value="<?php echo $b ?>" type="text">
        </div>
        <div>
            <button type="submit">Tính BMI</button>
        </div>
    </form>

    <?php if (isset($kq["bmi"]) && isset($kq["calc"])) : ?>
        <div>
            <h1>Kết quả</h1>
            <h3>Cân nặng: <?php echo $a ?> kg</h3>
            <h3>Chiều cao: <?php echo $b?> m</h3>
            <h3>BMI: <?php echo $kq["bmi"] ?> kg/m2</h3>
            <h3>Phân loại: <?php echo $kq["calc"] ?></h3>
        </div>
    <?php endif; ?>
</body>
</html>
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
        function chaoPHP () {
            echo "Helo PHP";
        }
        function tinhTong (int $a, int $b) {
            return $a + $b;
        }
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
                $calc = "bình thường";
            }

            return ["bmi" => $bmi, "calc" => $calc];
        }

        $c = 10; $d = 20;

        echo chaoPHP();
        echo "<br>";
        echo tinhTong(5,5);
        echo "<br>";
        $kq = tinhTong($c, $d);
        echo $kq;
        echo "<br>";
        $kqq = BMI(53, 1.72);
        echo $kqq["bmi"];
        echo " -----> ".$kqq["calc"];
    ?>
</body>
</html>
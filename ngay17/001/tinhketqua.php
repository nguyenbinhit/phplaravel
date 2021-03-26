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
        $sodien = $_POST['sodien'];
        $thue = 10/100;

        if ($sodien >= 401) {
            $sodien1 = 50;
            $tien6 = $sodien * 1.678;
            $sodien2 = 50;
            $tien5 = $sodien2 * 1.734;
            $sodien3 = 100;
            $tien4 = $sodien3 * 2.014;
            $sodien4 = 100;
            $tien3 = $sodien4 * 2.536;
            $sodien5 = 100;
            $tien2 = $sodien5 * 2.834;
            $sodien6 = $sodien - 400;
            $tien1 = $sodien6 * 2.927;

            $sotiendien = $tien1 + $tien6 + $tien2 + $tien5 + $tien3 + $tien4;
            $tongtien = $sotiendien * $thue;
        }elseif ($sodien >= 301 && $sodien <= 400) {
            $sodien1 = 50;
            $tien6 = $sodien * 1.678;
            $sodien2 = 50;
            $tien5 = $sodien2 * 1.734;
            $sodien3 = 100;
            $tien4 = $sodien3 * 2.014;
            $sodien4 = 100;
            $tien3 = $sodien4 * 2.536;
            $sodien5 = $sodien - 300;
            $tien2 = $sodien5 * 2.834;
        }elseif ($sodien >= 201 && $sodien <= 300) {
            $sodien1 = 50;
            $tien6 = $sodien * 1.678;
            $sodien2 = 50;
            $tien5 = $sodien2 * 1.734;
            $sodien3 = 100;
            $tien4 = $sodien3 * 2.014;
            $sodien4 = $sodien - 200;
            $tien3 = $sodien4 * 2.536;
        }elseif ($sodien >= 101 && $sodien <= 200) {
            $sodien1 = 50;
            $tien6 = $sodien * 1.678;
            $sodien2 = 50;
            $tien5 = $sodien2 * 1.734;
            $sodien3 = $sodien - 100;
            $tien4 = $sodien3 * 2.014;
        }elseif ($sodien >= 51 && $sodien <= 100) {
            $sodien1 = 50;
            $tien6 = $sodien * 1.678;
            $sodien2 = $sodien - 50;
            $tien5 = $sodien2 * 1.734;
        }else {
            $tien6 = $sodien * 1.678;
        }


    ?>


<h1>Hãy in ra số tiền phải trả :</h1>
<table align="center" border="1" cellpadding="0" cellspacing="1" style="width:600px">
    <thead>
    <tr>
        <th>
            <p><strong>TT</strong></p>
        </th>
        <th>
            <p><strong>Nhóm đối tượng khách hàng</strong></p>
        </th>
        <th>
            <p><strong>Giá bán điện</strong></p>
            <p><strong>(đồng/kWh)</strong></p>
        </th>
        <th>
            Tổng số kwh tiêu thụ
        </th>
        <th>
            Số tiền phải trả cho bậc thang này
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 1: Cho kWh từ 0 - 50</p>
        </td>
        <td>
            <p>1.678</p>
        </td>
        <td><?php echo $sodien1 ?></td>
        <td><?php echo $tien6 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 2: Cho kWh từ 51 - 100</p>
        </td>
        <td>
            <p>1.734</p>
        </td>
        <td><?php echo $sodien2 ?></td>
        <td><?php echo $tien5 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 3: Cho kWh từ 101 - 200</p>
        </td>
        <td>
            <p>2.014</p>
        </td>
        <td><?php echo $sodien3 ?></td>
        <td><?php echo $tien4 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 4: Cho kWh từ 201 - 300</p>
        </td>
        <td>
            <p>2.536</p>
        </td>
        <td><?php echo $sodien4 ?></td>
        <td><?php echo $tien3 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 5: Cho kWh từ 301 - 400</p>
        </td>
        <td>
            <p>2.834</p>
        </td>
        <td><?php echo $sodien5 ?></td>
        <td><?php echo $tien2 ?></td>
    </tr>
    <tr>
        <td>
            <p>&nbsp;</p>
        </td>
        <td>
            <p>Bậc 6: Cho kWh từ 401 trở lên</p>
        </td>
        <td>
            <p>2.927</p>
        </td>
        <td><?php echo $sodien6 ?></td>
        <td><?php echo $tien1 ?></td>
    </tr>
    </tbody>
</table>
<p><strong>Tổng số tiền điện : <?php echo $sotiendien ?></strong></p>
<p><strong>Thuế GTGT 10% : <?php echo $thue ?></strong></p>
<p><strong>Tổng tiền phải thanh toán : <?php echo $tongtien ?></strong></p>
</body>
</html>
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
<table class="table table-striped">
    <thead>
    <tr>
        <td>id</td>
        <td>ten</td>
        <td>tuoi</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
    </tr>
    <?php for ($i = 2; $i <= 20; $i++) : ?>
        <?php $tuoi = rand(1,70)  ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $i ?></td>
            <td><?php echo $tuoi ?></td>
        </tr>
    <?php endfor; ?>
    </tbody>
</table>
</body>
</html>
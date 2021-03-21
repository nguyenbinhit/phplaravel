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
        $tuoi = 21;
        if ($tuoi > 18) :
    ?>
        <section>Tuoi lao dong</section>
        <div class="width-full mx-auto shelf-content">
            <h2 class="shelf-title">Learn Git and GitHub without any code!</h2>
            <p class="shelf-lead">
                Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.
            </p>
            <a class="btn btn-primary shelf-cta" target="_blank" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;READ_GUIDE&quot;,&quot;repository_id&quot;:329283822,&quot;originating_url&quot;:&quot;https://github.com/nguyenbinhit/PHPLaravel&quot;,&quot;user_id&quot;:69001423}}" data-hydro-click-hmac="a84c73e8afc972738c1d935996aca52cae2cb8d4d94a2a58f9e60927ce9b5509" href="https://guides.github.com/activities/hello-world/">Read the guide</a>
        </div>
    <?php
        else:
    ?>
        <section>Tuoi tre em</section>
        <div class="width-full mx-auto shelf-content">
            <h2 class="shelf-title">Learn Git and GitHub without any code!</h2>
            <p class="shelf-lead">
                Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.
            </p>
            <a class="btn btn-primary shelf-cta" target="_blank" data-hydro-click="{&quot;event_type&quot;:&quot;repository.click&quot;,&quot;payload&quot;:{&quot;target&quot;:&quot;READ_GUIDE&quot;,&quot;repository_id&quot;:329283822,&quot;originating_url&quot;:&quot;https://github.com/nguyenbinhit/PHPLaravel&quot;,&quot;user_id&quot;:69001423}}" data-hydro-click-hmac="a84c73e8afc972738c1d935996aca52cae2cb8d4d94a2a58f9e60927ce9b5509" href="https://guides.github.com/activities/hello-world/">Read the guide</a>
        </div>
    <?php
        endif;
    ?>

</body>
</html>
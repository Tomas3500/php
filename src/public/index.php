<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">
<!-- Add your site or application content here -->
<main style="display: flex; justify-content:center; margin-top: 25px;">
    <!--    <img src="palmo.jpg" alt="">-->
    <br>
    <?php
    echo 'Hello Palmo', "<br/>";
    $name = 'Aleksandr';
    echo "Меня зовут ", $name, "<br/>";
    define('pi', 3.14);
    echo "число: pi ", pi, "<br/>";
    $cost = '300';
    $newCost = (integer)$cost;
    echo $newCost * 2;
    ?>
</main>
<?php
phpinfo()



?>
</body>

</html>
<?php
//phpinfo();

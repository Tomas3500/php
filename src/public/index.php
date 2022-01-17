<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php
    include 'Calc.php';
    include 'Worker.php';
    $calc = new Calc(5, 3);
    $object1 = new  Worker('Ivan', 25, 1000);
    $object2 = new  Worker('Vasya', 30, 2000);
    ?>

    <div class="form">
        <h1>
            <?php
            $calc->showDivision();
            $calc->multiplication();
            $calc->addition();
            $calc->subtraction();
            ?>
        </h1>
        <div class="out">
            <p>
                <?php
                echo $object1->getAge() + $object2->getAge() . "<br/>";
                echo $object1->getSalary() + $object2->getSalary();
                ?>
            </p>
            <p>
                <?php
                $pow = new Pow(5, 3);
                echo $pow->pow();
                ?>
            </p>
        </div>
        <h1>Регистрация</h1>
        <a href="registUser.php" class="btn">Регистрации</a>
        <a href="login.php" class="btn">Авторизации</a>

    </div>
</main>
<div style="display: flex; justify-content:center; margin-top: 25px class=" hom1
">
</div>
</body>
</html>
<?php

//phpinfo();

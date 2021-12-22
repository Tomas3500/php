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
<div style="display: flex; justify-content:center; margin-top: 25px class=" hom1
">
<?php
//home-1
//task1
$name = 'Aleksanrd';
echo $name, "<br/>";
//task2
$a = 8;
$b = 1;
echo " " . $a + $b;
echo " " . $a - $b;
echo " " . $a * $b;
echo " " . $a / $b;
echo " " . $a % $b, "<br/>";
//task3
$number = 5;
$result = $number ** 3;
echo $result, "<br/>";
//task4
$age = 28;
if ($age > 18 && $age < 60) {
    echo "Вам ещё работать и работать", "<br/>";
} elseif ($age < 18) {
    echo "Вам ещё рано работать", "<br/>";

} else {
    echo 'Пора на отдых', "<br/>";
}
//task6
$dayNumber = 6;
if ($dayNumber >= 1 && $dayNumber <= 5) {
    echo "Это рабочий день";

} elseif ($dayNumber >= 6 && $dayNumber <= 7) {
    echo "Это выходной";
} else {
    echo 'Ошибка';
}
//task7
const DAYS_COUNT = 7;
const MONTH_COUNT = 12;
//define('DAYS_COUNT', 7);
//define('MONTH_COUNT', 12);
echo "<br/>";
echo DAYS_COUNT, " " . MONTH_COUNT;
//task8
echo "<br/>";
$numberOne = 1;
$numberTwo = 10;

if ($numberOne == $numberTwo) {
    $resSum = $numberOne + $numberTwo;
    echo "Сумма: " . $resSum;
} else {
    $resSum = $numberOne - $numberTwo;
    echo "Разница: " . $resSum;
}
//task9
echo "<br/>";
$randomNumber = rand(1, 100);
if ($randomNumber % 3 == 0) {
    $a = $randomNumber;
    echo $a;
} else {
    echo 'число не кратно';
}
?>
</div>
<?php
phpinfo()

?>
</body>
</html>
<?php
//phpinfo();

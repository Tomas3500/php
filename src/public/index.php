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


<main style="display: flex; justify-content:center; margin-top: 25px;">
    <!--    <img src="palmo.jpg" alt="">-->
    <!--    <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">-->
    <!--        <label>Ваше имя: <input type="text" name="name"></label>-->
    <!--        <label>Ваше email: <input type="text" name="email"></label>-->
    <!--        <label>Ваше Текст <input type="text" name="message"></label>-->
    <!--        <input type="file" name="avatar">-->
    <!--        <input type="submit" name="send" value="Отправить">-->
    <!--    </form>-->
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
$newStr = 'abc';
$pos = strpos($newStr, 'abc');
if ($pos === 0) {
    echo str_replace('abc', 'www', $newStr);

} else {
    echo $newStr . 'zzz';
}

//2
echo "<br/>";
$newStrL = 'hello';
if (strlen($newStrL) > 10) {
    echo substr($newStrL, 0, 6);
} else {
    while (strlen($newStrL) < 12) {
        $newStrL = $newStrL . 'o';
    }
    echo $newStrL;
}
//3
echo "<br/>";
$strNumber = 'fdfd 12 fdf d12'; // 4
$countN = 0;
for ($x = 0; $x < strlen($strNumber); $x++) {
    if (is_numeric($strNumber[$x])) {
        $countN++;
    }
}
echo $countN;
//4
echo "<br/>";
$strNewWord = 'word hi word hello palmo';
echo str_replace('word', 'letter', $strNewWord);
//5
echo "<br/>";
$strDelete = 'abc ___xxxxxxxxx__ he__x';
echo str_replace('x', ' ', $strDelete);
//6
echo "<br/>";
$strAbc = 'aba heee aba';
echo substr_count($strAbc, 'aba');
//7
echo "<br/>";
$newStrLastName = 'SMIRNOV';

echo strtoupper(substr($newStrLastName, 0, 1)) . strtolower(substr($newStrLastName, 1));
//8
echo "<br/>";

$fullName = "Смирнов Александр Сергеевич";
$newArr = explode(' ', $fullName);
$symbolOne = mb_substr($newArr[1], 0, 1);
$symbolTwo = mb_substr($newArr[2], 0, 1);
echo $newArr[0] . ' ' . $symbolOne . '.', $symbolTwo . '.';

//lesson-task Arr and cycles
//1
for ($i = 0; $i < 10; $i++) {
//    echo ' ' . "You are welcome!" . "<br/>";
}
//2
$sum = 0;
for ($i = 1; $i <= 112; $i = $i + 3) {
    $sum = $sum + $i;
}
//echo $sum;
//3
for ($i = 0; $i <= 10000; $i++) {
    if ($i % 5 !== 0 && strpos($i, '3') === 0) {
//        echo $i . "<br/>";
    }
}

echo "<br/>";
//4
$randArr = [];
$i = 0;
while ($i <= 2) {
    $randNum = rand(0, 100);
    if (!in_array($randNum, $randArr)) {
        $randArr[] = $randNum;
        $i++;
    }
}
echo 'Рандомные числа' . "<br/>";
echo $randArr[0] . "<br/>";
echo $randArr[1] . "<br/>";
echo $randArr[2] . "<br/>";
//5
echo "<br/>";

$countOf = 0;
$countAllTiker = 0;
for ($i = 111111; $i <= 222222; $i++) {
    $strNumber = (string)$i;
    $oneSum = $strNumber[0] + $strNumber[1] + $strNumber[2];
    $twoSum = $strNumber[3] + $strNumber[4] + $strNumber[5];
    $countAllTiker++;
    if ($oneSum === $twoSum) {
        $countOf++;
    }

}
echo "Кол-во счастливых - $countOf их процент: " . round($countOf * 100 / $countAllTiker);

//6
echo "<br/>";
$os = ['hello', 'hi', 'yes', 'hi'];
$os1 = array_unique($os);
if (count($os) > count($os1)) {
    echo 'есть повторения';
} else {
    echo 'нет повторений';
}
//7
echo "<br/>";
$arrNumber = [1, 2, 4, 4, 2, 5];
var_dump(array_unique($arrNumber));

//8
echo "<br/>";
$arr = [1, 3, 5, 7];
echo "<br/>";
var_dump([$arr[0], $arr[3]] = [$arr[3], $arr[0]]);
echo "<br/>";

//9
echo "<br/>";

$a = [1, 2, 8, 20, 40];
$d = [4, 6, 7, 18, 40];
$newArr = array_merge($a, $d);
sort($newArr);
print_r($newArr);

//10
function translateArrDay($lang, $day)

{
    $arrDay = [
        'ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
        'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
    ];

    echo $arrDay[$lang][$day];

}

echo "<br/>";
echo translateArrDay('ru', 0);
echo "<br/>";
echo translateArrDay('en', 2);
//11
$v = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "<br/>";
for ($i = 0; $i < count($v); $i++) {
    if ($v[$i] % 3 == 0) {
        echo $v[$i] . "<br/>";
    } else {
        echo $v[$i] . ",";
    }
}
echo "<br/>";
//12
$b = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$index = 2;
$a = $b[0];
$b[0] = $b[$index];
$b[$index] = $a;

echo $a . " ";
var_dump($b);


//lasson-3 function
//echo "<br/>";
//function getNumber($numbers, $a)
//{
//    return (int)$numbers ** (int)$a;
//}
//
//echo getNumber(2, 3);
//echo "<br/>";
////2
//
//function getDay($day)
//{
//    $arrDay = ['понидельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
//    if ($day > 7) {
//        echo 'ошибка';
//    }
//    echo $arrDay[$day - 1];
//}
//
//echo getDay(7);
////3
//function slug($strUrl)
//{
//    echo strtolower(str_replace(' ', '-', $strUrl));
//}
//
//echo slug('Hello world');
//echo "<br/>";
////4
//$product = [
//    ['name' => 'телевизор', 'price' => '400', 'quantily' => 1],
//    ['name' => 'телефон', 'price' => '400', 'quantily' => 3],
//    ['name' => 'Кроссовки', 'price' => '400', 'quantily' => 2]
//];
//$sum = 0;
//function getSumBasket($product)
//{
//    $sum = 0;
//    foreach ($product as $item) {
//        $sum += ($item['quantily']);
//
//    }
//    echo $sum;
//}
//
//echo getSumBasket($product);
//
//
?>
</div>
<?php
phpinfo()

?>
</body>
</html>
<?php
//phpinfo();

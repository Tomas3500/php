<?php
//Home work
function creatFile()
{
    $fileText = fopen('fructs.txt', 'w+');
    $arrFructs = ['apple', 'banana', 'cherry', 'lime', 'kiwi', 'mango', 'melon', 'avocado', 'grapefruit', 'lemon'];
    $out = '';
    foreach ($arrFructs as $item) {
        $out .= $item . " ";
    }
    fwrite($fileText, $out);
    fclose($fileText);
}

function sortArrFructs()
{
    $file = fopen('fructs.txt', 'r+');
    $readFile = file_get_contents('fructs.txt');
    $arrNew = explode(' ', $readFile);
    sort($arrNew);
    $str = '';
    foreach ($arrNew as $item) {
        $str .= $item . ' ';
    }
    fwrite($file,$str);
    fclose($file);


}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat File</title>
</head>
<body>
<div class="out">
    <?php
    //    creatFile();
    sortArrFructs();
    ?>
</div>
</body>
</html>
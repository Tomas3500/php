<?php
function creatFile()
{
    $fileText = fopen('text.txt', 'w+');
    fwrite($fileText, 'Hello Palmo');
    $readFile = file_get_contents('text.txt');
    fclose($fileText);
    $size = stat('text.txt');
    $fileTwo = fopen('text2.txt', 'w+');
    unlink('text2.txt');

    echo $readFile;
    echo "<br/>";
    echo ' размер файла в байтах ' . $size['size'];
    echo "<br/>";
    echo ' размер файла в мегабайтах ' . $size['size'] / 1000;
    echo "<br/>";
    echo ' размер файла в гигабайтах ' . $size['size'] / 10000;

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
    creatFile();
    ?>
</div>
</body>
</html>
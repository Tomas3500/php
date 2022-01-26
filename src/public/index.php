<?php
function creatFile()
{
    $fileText = fopen('fructs.txt', 'w+');
    $arrFructs = ['apple', 'banana', 'cherry', 'lime', 'kiwi', 'mango', 'melon', 'avocado', 'grapefruit', 'lemon'];
    $out = '';
    foreach ($arrFructs as $item) {
        $out .= $item . " ";
    }
    fwrite($fileText, $out . PHP_EOL);
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
    fwrite($file, $str . PHP_EOL);
    fclose($file);


}

function createDirectorys($path)
{
    if (is_dir('test')) {
        $scan = scandir('test');
        foreach ($scan as $file) {
            if ($file != '.' || $file != '..') {
                if (stat($path . '/' . $file)['size'] > 10000) {
                    unlink($path . '/' . $file);
                }

            }
        }
        print_r($scan);
    }
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
    sortArrFructs();
    createDirectorys('test');
    ?>
    <form action="file.php" name="fileLong" method="post" enctype="multipart/form-data">
        <p>
            <lable>Загрузить файл<input type="file" name="file"></lable>
        </p>
        <p>
            <lable><input type="submit" name="btn" value="Отправит"></lable>
        </p>
    </form>
    <br>
    <h3>Данные пользователя</h3>
    <form action="users.php" name="users" method="post" enctype="multipart/form-data">
        <p>
            <lable>Name<input type="text" name="nameUsers"></lable>
        </p>
        <p>
            <lable>Last Name<input type="text" name="lastUsers"></lable>
        </p>
        <p>
            <lable>Age<input type="text" name="ageUsers"></lable>
        </p
        <p>
            <lable><input type="submit" name="btn" value="Отправит"></lable>
        </p>
    </form>
</div>
</body>
</html>
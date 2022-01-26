<?php
function writeUserInfo()
{
    if (isset($_POST)) {
        $nameUsers = trim(htmlspecialchars($_POST['nameUsers']));
        $lastUsers = trim(htmlspecialchars($_POST['lastUsers']));
        $ageUsers = trim(htmlspecialchars($_POST['ageUsers']));
        if ($nameUsers != '' && $ageUsers != '' && $lastUsers != '') {
            $fileUsers = fopen('users.txt', 'w+');
            fwrite($fileUsers, $nameUsers . PHP_EOL);
            fwrite($fileUsers, $lastUsers . PHP_EOL);
            fwrite($fileUsers, $ageUsers . PHP_EOL);
            fclose($fileUsers);
            echo 'файл записан';
        }
        echo 'заполните данные';
    }

}

writeUserInfo();
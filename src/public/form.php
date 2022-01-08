<?php
function showCity()
{
    $input = htmlspecialchars($_POST['city']);
    if (isset($input) && $input !== '') {
        print("Ваш город: " . trim($input));
    } else {
        echo 'Введите город';
    }
}

;

showCity();

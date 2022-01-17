<?php
function showCity()
{
    $input = trim(htmlspecialchars($_POST['city']));
    if (isset($input) && $input !== '') {
        print("Ваш город: " . trim($input));
    } else {
        echo 'Введите город';
    }
}

function showAge()
{
    if (isset($_POST['age']) == true) {
        $radio = $_POST['age'];
        echo $radio;
    }
}

;


function showCardProduct()
{
    if (isset($_POST) || $_POST['product'] || $_POST['manufacturer'] || $_POST['description']) {
        print("Продукт: " . trim(htmlspecialchars($_POST['product'])) . "<br/>");
        print("Производитель: " . trim(htmlspecialchars($_POST['manufacturer'])) . "<br/>");
        print("Краткое описание товара: " . trim(htmlspecialchars($_POST['description'])) . "<br/>");
    }
    if ($_FILES['photo']['name'] == '') {
        echo "<br>" . 'Файл не выбран';
    } elseif ($_FILES['photo']['size'] > 30000) {
        echo 'файл слишком большой';
    } else {
        $filePhoto = $_FILES['photo'];
        $current_path = $_FILES['photo']['tmp_name'];
        $file_name = $_FILES['photo']['name'];
        $new_path = dirname(__FILE__) . '/uploads/' . $file_name;
        $file_path = 'uploads/' . $file_name;
        move_uploaded_file($current_path, $new_path);
        echo "<img src = '{$file_path}' alt = 'img'>";
        print("Файл загружен " . $filePhoto['name'] . 'размер ' . $filePhoto['size'] . 'байт ');
    }
}

function showTestResult()
{
    $count = 0;
    $input = trim(htmlspecialchars($_POST['test']));
    $radio = isset($_POST['st']);
    $check = $_POST['checkbox'];
    if ($input == 'word') {
        $count++;
        echo 'Верно!';
    } elseif (isset($input) == '') {
        echo 'Ничего не ввели' . "<br/>";
    } else {
        echo 'Не верно!';
    }

    if (isset($radio) == 'Kiev') {
        $count++;
        echo 'Верно!' . "<br/>";
    } else {
        echo 'Не верно';
    }
    if (isset($check) && isset($check) == 'on') {
        foreach ($check as $value) {
            if ($value == 'vsl') {
                $count--;
            } else {
                $count++;
            }
        }
    }
    echo $count;
}




<?php
if (isset($_POST)) {
    print("Имя: " . $_POST['name']);
    print("<br>Email: " . $_POST['email']);
    print("<br>Сообщение: " . $_POST['message']);
}

if (isset($_FILES['avatar'])) {
    $file = $_FILES['avatar'];
    print("Файл загружен " . $file['name'] . 'размер' . $file['size'] . 'байт');

}
$current_path = $_FILES['avatar']['tmp_name'];
$file_name = $_FILES['avatar']['name'];
$new_path = dirname(__FILE__) . '/uploads' . $file_name;


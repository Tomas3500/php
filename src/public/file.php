<?php
function longFile()
{
    if ($_FILES['file']['name'] == '') {

        echo "<br>" . 'Файл не выбран';
    } else {
        $filePhoto = $_FILES['file'];
        $current_path = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $new_path = dirname(__FILE__) . '/uploads/' . $file_name;
        $file_path = 'uploads/' . $file_name;
        move_uploaded_file($current_path, $new_path);
        $fileReads = fopen($file_path, 'r+');
        $textFile = file_get_contents($file_path);
        fclose($fileReads);
        echo $textFile;
    }
}

$fileExtention = '';
function validFile()
{
    $name = $_FILES['file']['name'];
    $str = explode('.', $name);
    return '.' . end($str);
}

validFile();
longFile();
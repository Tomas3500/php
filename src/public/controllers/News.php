<?php

class News
{
    public $nameNews;
    public $descNews;
    public $dataNews;
    public $radio;
    public $textDescripton;
    public $authorNews;
    public $file;
    public $today;
    public $a;

    public function create()
    {
        $this->validForm();

        $news = [
            'name' => $this->nameNews,
            'description' => $this->descNews,
            'date' => $this->dataNews,
            'author' => $this->authorNews,
            'image' => $this->file,
        ];
        $arrayFile = json_decode(file_get_contents('../models/news.json'));

        $arrayFile[] = $news;

        $json = json_encode($arrayFile);

        file_put_contents("../models/news.json", $json);
        echo 'Новость добавлена';
    }

    public function index()
    {
        $array = json_decode(file_get_contents('../models/news.json'));
        return $array;
    }

    public function validForm()
    {
        $errorCount = 0;
        if (isset($_POST['nameNews'])) {
            $this->nameNews = trim(htmlspecialchars($_POST['nameNews']));
            setcookie('nameNews', $this->nameNews);
            if ($this->nameNews === '') {
                $errorCount++;
                setcookie('error_name', 'заполните поле', 0, '/');
            } else {
                setcookie('error_name', '', time() - 3600);
            }
        }

        if (isset($_POST['descNews'])) {
            $this->descNews = trim(htmlspecialchars($_POST['descNews']));
            setcookie('descNews', $this->descNews);
            if (strlen($this->descNews) < 20 || $this->descNews === '') {
                $errorCount++;
                setcookie('error_desc', 'заполните поле', 0, '/');
            } else {
                setcookie('error_desc', $this->descNews, time() - 3600);
            }
        }

        if (isset($_POST['dataNews'])) {
            if ($_POST['dataNews'] == false) {
                $this->dataNews = date("d.m.Y");
                setcookie('today', $this->dataNews);
            }
        }


        if (isset($_POST['authorNews'])) {
            $this->authorNews = trim(htmlspecialchars($_POST['authorNews']));
            setcookie('authorNews', $this->authorNews);
            if ($this->authorNews == '') {

                $errorCount++;
                setcookie('error_author', 'заполните поле', 0, '/');
            } else {
                setcookie('error_author', '', time() - 3600);
            }
        }

        if (isset($_POST['textDescripton'])) {
            $this->textDescripton = trim(htmlspecialchars($_POST['textDescripton']));
            setcookie('textDescripton', $this->textDescripton);
            if (strlen($this->textDescripton) < 100) {

                $errorCount++;
                setcookie('error_descripton', 'заполните поле', 0, '/');
            } else {
                setcookie('error_descripton', '', time() - 3600);
            }
        }
        if ($errorCount) {
            header('Location: http://example.palmo/view/addNews.php');
        }

        if (($_FILES['uploadFile'])) {
            $this->file = $_FILES['uploadFile'];
            if ($_FILES['uploadFile']['name'] === '') {
                setcookie('error_file', 'выберите файл', 0, '/');
            } else {
                setcookie('error_file', '', time() - 3600);
            }

            if ($_FILES['uploadFile']['size'] > 30000) {
                setcookie('error_bigFile', 'файл слишком большой', 0, '/');
            } else {
                setcookie('error_bigFile', '', time() - 3600);
            }

        } else {
            $filePhoto = $_FILES['uploadFile'];
            $current_path = $_FILES['uploadFile']['tmp_name'];
            $file_name = $_FILES['uploadFile']['name'];
            $new_path = dirname(__FILE__) . '/uploads/' . $file_name;
            $file_path = 'uploads/' . $file_name;
            move_uploaded_file($current_path, $new_path);
            echo "<img src = '{$file_path}' alt = 'img'>";
            print("Файл загружен " . $filePhoto['name'] . 'размер ' . $filePhoto['size'] . 'байт ');
        }

    }
}
<?php

class News
{
    public $addNews;
    public $nameNews;
    public $descNews;
    public $dataNews;
    public $radio;
    public $textDescripton;
    public $authorNews;
    public $uploadFile;
    public $today;
    public $a;


    public function validForm()
    {
        $errorCount = 0;
        if (isset($_POST['nameNews'])) {
            $nameNews = trim(htmlspecialchars($_POST['nameNews']));
            setcookie('nameNews', $nameNews);
            $errorCount++;
            if ($nameNews === '') {
                setcookie('error_name', 'заполните поле');
            } else {
                setcookie('error_name', '', time() - 3600);
            }
        }

        if (isset($_POST['descNews'])) {
            $descNews = trim(htmlspecialchars($_POST['descNews']));
            setcookie('descNews', $descNews);
            if (strlen($descNews) < 20 || $descNews === '') {
                setcookie('error_desc', 'заполните поле');
            } else {
                setcookie('error_desc', '', time() - 3600);
            }
        }

        if (isset($_POST['dataNews'])) {
            $dataNews = trim(htmlspecialchars($_POST['dataNews']));
            if ($dataNews === "") {
                $today = date("d.m.Y");
                setcookie('today', $today);
            } else {
                setcookie('today', '', time() - 3600);
            }
        }


        if (isset($_POST['radio']) == 'one') {
            header('Location: http://example.palmo/addNews.php');
        } elseif (isset($_POST['radio']) == 'two') {
            header('Location: http://example.palmo/addNews.php');
        }

        if (isset($_POST['authorNews'])) {
            $authorNews = trim(htmlspecialchars($_POST['authorNews']));
            setcookie('authorNews', $authorNews);
            if ($authorNews == '') {
                setcookie('error_author', 'заполните поле');
            } else {
                setcookie('error_author', '', time() - 3600);
            }
        }

        if (isset($_POST['textDescripton'])) {
            $textDescripton = trim(htmlspecialchars($_POST['textDescripton']));
            setcookie('textDescripton', $textDescripton);
            if (strlen($textDescripton) < 100) {
                setcookie('error_descripton', 'заполните поле');
            } else {
                setcookie('error_descripton', '', time() - 3600);
            }
        }


    }
}
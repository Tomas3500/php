<?php
session_start();
$_SESSION['user'] = 'user';
$_SESSION['password'] = 'f42fff7bf91c9292a6a6dd4ee86eee6c';
function savePassword()
{
    if (isset($_POST['user']) && isset($_POST['password'])) {
        $userName = htmlspecialchars($_POST['user']);
        $password = htmlspecialchars($_POST['password']);
        if ($_SESSION['user'] == $userName && $_SESSION['password'] == md5($password)) {
            header('Location: http://example.palmo/home.php');
        } else {
            header('Location: http://example.palmo/index.php');

        }
    } else {
      return  header('Location: http://example.palmo/index.php');
    }
}

savePassword(); 
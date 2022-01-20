<?php
//session_start();
//require './function.php';

if (isset($_POST['action'])) {
    $action = trim($_POST['action']);
    switch ($action) {
        case 1:
        {
            showCity();
            break;
        }
        case 2:
        {
            showAge();
            break;
        }
        case 3:
        {
            showCardProduct();
            break;

        }
        case 4:
        {
            showTestResult();
            break;

        }
        default:
            echo 'NO';
    }
};


$user = '';
$login = '';
$password = '';
$phone = '';
$count = 0;

if (isset($_POST['user'])) {
    $user = trim(htmlspecialchars($_POST['user']));
    setcookie('userName', $user);
    if ($user == '' || strlen($user) < 2) {
        setcookie('errorUser', 'error');
        $count++;

    } else {
        setcookie('errorUser', '', time() - 3600);
    }


}
if (isset($_POST['login'])) {
    $login = trim(htmlspecialchars($_POST['login']));
    setcookie('login', $login);
    if ($login == '' || strlen($login) < 2) {
        setcookie('loginError', 'error');
        $count++;
    } else {
        setcookie('loginError', '', time() - 3600);
    }

}
if (isset($_POST['password'])) {
    $password = trim(htmlspecialchars($_POST['password']));
    if ($password == '' && strlen($password) < 2) {
        setcookie('passwordError', 'error');
        $count++;
    } else {
        setcookie('passwordError', '', time() - 3600);
    }

}

if (isset($_POST['phone'])) {
    $phone = trim(htmlspecialchars($_POST['phone']));
    setcookie('phone', $phone);
    if ($phone == '' && strlen($phone) !== 10) {
        setcookie('phoneError', 'error');
        $count++;
    } else {
        setcookie('phoneError', '', time() - 3600);
    }

}
if ($count) {
    header('Location: http://example.palmo/registUser.php');
} else {
    $_SESSION['user'] = $user;
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['phone'] = $phone;
    header('Location: http://example.palmo/home.php');
}


//authorization

if (isset($login)) {
    echo $login;
    if ($_POST['loginUser'] === $_SESSION['login'] && $_POST['passwordUser'] === $_SESSION['password']) {
        header('Location: http://example.palmo/home.php');
    } else {
        header('Location: http://example.palmo/login.php');
    }

}


//validFormRegistUser();
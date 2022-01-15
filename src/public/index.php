<?php
session_start();
$error = "";
if (isset($_POST['btn'])) {
    $user = trim(htmlspecialchars($_POST['user']));
    $login = trim(htmlspecialchars($_POST['login']));
    $password = trim(htmlspecialchars($_POST['password']));
    $phone = trim(htmlspecialchars($_POST['phone']));
    setcookie('user', $user);
    setcookie('login', $login);
    setcookie('phone', $phone);
    if ($user == "") {
        $error = 'заполните поле';
    } elseif ($login == "") {
        $error = 'заполните поле';

    } elseif (strlen($phone) < 10 || $phone == "") {
        $error = 'заполните поле';
    }
}


?>
    <!doctype html>
    <html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Palmo Helloe world</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <meta name="theme-color" content="#fafafa">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <main>
        <div class="form">
            <form name="feedback" method="POST" action="index.php" enctype="multipart/form-data">
                <h1>Task 1</h1>
                <hr>
                <?php
                if (isset($_POST['reg'])) {
                    $reg = $_POST['reg'];
                    $_SESSION['reg'] = $reg;
                    if (isset($_SESSION['reg'])) {
                        echo "<a href='home.php'> http://example.palmo/</a>";
                    }

                } else {
                    echo "<input type='submit' name='reg' value='Регистрация'> ";
                    echo "<input type='submit' name='author' value='Авторизация'>";
                }
                ?>
            </form>
        </div>
        <hr>
        <div class="author">
            <form name="feedback" method="POST" action="/" enctype="multipart/form-data">
                <h1>Регистрация</h1>
                <hr>
                <div class="input_form">
                    <div class="item">
                        <label>Имя пользователя:<input type="text" name="user"
                                                       value="<?php echo isset($_COOKIE['user']) ? $_COOKIE['user'] : '' ?>">
                        </label>
                        <span class="error">
                            <?php
                            echo $error;
                            ?>
                        </span>
                    </div>
                    <div class="item">
                        <label>Логин:<input type="text" name="login"
                                            value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"></label>
                        <span class="error">
                              <?php
                              echo $error;
                              ?>
                        </span>
                    </div>
                    <div class="item">
                        <label>Пароль:<input type="password" name="password"></label>
                        <span class="error">
                              <?php
                              echo $error;
                              ?>
                        </span>
                    </div>
                    <div class="item">
                        <label>Номер телефона:<input type="text" name="phone"
                                                     value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : '' ?>"></label>
                        <span class="error">
                              <?php
                              echo $error;
                              ?>
                        </span>
                    </div>
                    <div class="item">
                        <input class="btn" type="submit" name="btn" value="Войти">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <div style="display: flex; justify-content:center; margin-top: 25px class=" hom1
    ">

    </div>

    <!--<script src="./main.js"></script>-->
    </body>
    </html>
<?php

//phpinfo();

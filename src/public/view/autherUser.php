<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo 'Вы зарегистрировались'
?>
<main>
    <div class="author">
        <h1>Авторизация</h1>
        <form name="author" action="/action/authorization.php" method="post" enctype="multipart/form-data">
            <label>Логин:<input type="text" name="loginIn">
                <span class="error">
                               <?php
                               if (isset($_COOKIE['error_loginIn'])) {
                                   echo $_COOKIE['error_loginIn'];
                               }
                               ?>
                    </span>
            </label>
            </p>
            <p>
                <label>Пароль:<input type="password" name="passwordIn">
                    <span class="error">
                               <?php
                               if (isset($_COOKIE['error_passwordIn'])) {
                                   echo $_COOKIE['error_passwordIn'];
                               }
                               ?>
                    </span>
                </label>
            </p>
            <p>
                <lable>Запомнить<input type="checkbox" name="check" value="true"></lable>
                <!--                if($_POST['check']['value'] === true)-->
            </p>
            <p>
                <input type="submit" name="btn" value="Войти">
            </p>
            <input type="hidden" name="type" value="registration">
        </form>
    </div>
</main>
</body>
</html>
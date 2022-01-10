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
        <form name="feedback" method="POST" action="login.php" enctype="multipart/form-data">
            <h1>Регистрация</h1>
            <hr>
            <label>Имя пользователя<input type="text" name="user" value="<?php echo isset($_COOKIE['user']) ? $_COOKIE['user'] : ''?>"></label>
            <label>Пароль<input type="password" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''?>"></label>
            <input type="hidden" name="action" value="1">
            <input type="submit" name="send" value="Отправить">
        </form>
    </div>
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

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
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <label>Ваш город <input type="text" name="city"></label>
            <input type="hidden" name="action" value="1">
            <input type="submit" name="send" value="Отправить">
        </form>
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <p>Ваш возраст: </p>
            <label>менее 20 лет<input type="radio" name="age"></label>
            <label>20-25<input type="radio" name="age"></label>
            <label>26-30<input type="radio" name="age"></label>
            <label>26-30<input type="radio" name="age"></label>
            <label>более 30<input type="radio" name="age"></label>
            <input type="hidden" name="action" value="2">
            <input type="submit" name="send" value="Отправить">
        </form>
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <label>Название товара<input type="text" name="product"></label>
            <label>Производитель<input type="text" name="manufacturer"></label>
            <label>Краткое описание товара<input type="text" name="description"></label>
            <label>Фото<input type="text" name="photo"></label>
            <input type="hidden" name="action" value="3">
            <input type="submit" name="send" value="Отправить">
        </form>
    </div>
</main>
<div style="display: flex; justify-content:center; margin-top: 25px class=" hom1
">

</div>

</body>
</html>
<?php
//phpinfo();

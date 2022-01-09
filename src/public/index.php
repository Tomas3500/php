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
            <h1>Задание 1</h1>
            <hr>
            <label>Ваш город <input type="text" name="city"></label>
            <input type="hidden" name="action" value="1">
            <input type="submit" name="send" value="Отправить">
        </form>
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <h1>Задание 2</h1>
            <hr>
            <p>Ваш возраст: </p>
            <p><label>менее 20 лет<input type="radio" name="age" value="менее 20 лет"></label></p>
            <p><label>20-25<input type="radio" name="age" value="20-25"></label></p>
            <p><label>26-30<input type="radio" name="age" value="26-30"></label></p>
            <p><label>более 30<input type="radio" name="age" value="более 30"></label></p>
            <input type="hidden" name="action" value="2">
            <input type="submit" name="send" value="Отправить">
        </form>
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <h1>Задание 3</h1>
            <hr>
            <p><label>Название товара<input type="text" name="product"></label></p>
            <p><label>Производитель<input type="text" name="manufacturer"></label></p>
            <p><label>Краткое описание товара<textarea name="description"></textarea></label></p>
            <label>Фото<input type="file" name="photo"></label>
            <input type="hidden" name="action" value="3">
            <input type="submit" name="send" value="Отправить">
        </form>
        <div class="test">
            <form name="test" method="POST" action="form.php" enctype="multipart/form-data">
                <h1>Задание 4 тестирование</h1>
                <hr>
                <label>Допишите "Hello - <input type="text" name="test"></label>
                <p><label>Столица Украины:
                <p>Киев<input type="radio" name="st" value="Kiev"></p>
                <p>Львов<input type="radio" name="st" value="Lviv"></p>
                <p>Донецк<input type="radio" name="st" value="Donetsk"></p>
                </label></p>
                <p><label>Какие методы запросов:
                <p>GET<input type="checkbox" name="checkbox[]" value="get"></p>
                <p>POST<input type="checkbox" name="checkbox[]" value="post"></p>
                <p>PUT<input type="checkbox" name="checkbox[]" value="put"></p>
                <p>VSL<input type="checkbox" name="checkbox[]" value="vsl"></p>
                </label></p>
                <input type="hidden" name="action" value="4">
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

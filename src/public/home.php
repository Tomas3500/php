<?php
if (isset($_COOKIE['userName'])) {
    echo 'Добро пожаловать! ' . $_COOKIE['userName'];
}
?>;

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
<form name="logOut" action="form.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="exit" value="Выйти из сеанса">
</form>
</body>
</html>



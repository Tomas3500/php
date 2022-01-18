<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<main>
    <div class="regist">
        <h1>Войти на сайт</h1>
        <form name="logIn" action="form.php" method="post">
            <p>
                <label>Логин:<input type="text" name="loginUser">
                    <span class="error"></span>
                </label>
            </p>
            <p>
                <label>Пароль:<input type="password" name="passwordUser">
                    <span class="error"></span>
                </label>
            </p>
            <p>
                <label><input type="submit" value="Войти" name="btn_login">
                    <span class="error"></span>
                </label>
            </p>
        </form>
    </div>
</main>
</body>
</html>
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
        <h1>Регистрация пользователя:</h1>
        <form name="regist" action="form.php" method="post">
            <p>
                <label>Имя пользователя:<input type="text" name="user"
                                               value="<?php echo isset($_COOKIE['userName']) ? $_COOKIE['userName'] : '' ?>">
                    <span class="error">
                        <?php
                        if (isset($_COOKIE['errorUser'])) {
                            echo $_COOKIE['errorUser'];
                        }

                        ?>
                    </span>
                </label>
            </p>
            <p>
                <label>Логин:<input type="text" name="login">
                    <span class="error">
                               <?php
                               if (isset($_COOKIE['loginError'])) {
                                   echo $_COOKIE['loginError'];
                               }

                               ?>
                    </span>
                </label>
            </p>
            <p>
                <label>Пароль:<input type="password" name="password">
                    <span class="error">
                               <?php
                               if (isset($_COOKIE['passwordError'])) {
                                   echo $_COOKIE['passwordError'];
                               }
                               ?>
                    </span>
                </label>
            </p>
            <p>
                <label>Номер телефона:<input type="text" name="phone">
                    <span class="error">
                        <?php
                        if (isset($_COOKIE['phoneError'])) {
                            echo $_COOKIE['phoneError'];
                        }

                        ?>

                    </span>
                </label>
            </p>
            <p>
                <input type="submit" name="btn" value="Зарегистрироваться">
            </p>
        </form>
    </div>
</main>
</body>
</html>
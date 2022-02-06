<?php
//require 'Figure.php';
//require 'Circle.php';
//require 'Square.php';
//require 'Triangle.php';
//

?>
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

//$odjCircle = new Circle(3.14, 5);
//$odjSquare = new Square(4);
//$odjectTriangle = new Triangle(10, 20, 5);
////Circle
//echo "</br>";
//$odjCircle->getTypeFigure();
//echo $odjCircle->getSqura();
//echo $odjCircle->getPerimeter();
////Square
//echo "</br>";
//$odjSquare->getTypeFigure();
//echo $odjSquare->getSqura();
//echo $odjSquare->getPerimeter();
////Triangle
//echo "</br>";
//$odjectTriangle->getTypeFigure();
//echo $odjectTriangle->getSqura();
//echo $odjectTriangle->getPerimeter();
?>
<main>
    <div class="regist">
        <h1>Регистрация пользователя:</h1>
        <form name="regist" action="./action/creatRegistUser.php" method="post" enctype="multipart/form-data">
            <label>Логин:<input type="text" name="login"
                                value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
                <span class="error">
                               <?php
                               if (isset($_COOKIE['error_login'])) {
                                   echo $_COOKIE['error_login'];
                               }

                               ?>
                    </span>
            </label>
            </p>
            <p>
                <label>Пароль:<input type="password" name="password">
                    <span class="error">
                               <?php
                               if (isset($_COOKIE['error_password'])) {
                                   echo $_COOKIE['error_password'];
                               }
                               ?>
                    </span>
                </label>
            </p>
            <p>
                <label>Email<input type="text" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>">
                    <span class="error">
                        <?php
                        if (isset($_COOKIE['error_email'])) {
                            echo $_COOKIE['error_email'];
                        }
                        ?>
                    </span>
                </label>
            </p>
            <P>
                <lable>Загрузите аватар<input type="file" name="avatar">
                    <span class="error"></span>
                </lable>
            </P>
            <p>
                <input type="submit" name="btn" value="Зарегистрироваться">
            </p>
            <input type="hidden" name="type" value="registration">
        </form>
    </div>
</main>
</body>
</html>
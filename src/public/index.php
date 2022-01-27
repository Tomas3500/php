<?php
require 'Figure.php';
require 'Circle.php';
require 'Square.php';
require 'Triangle.php';
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

$odjCircle = new Circle(3.14, 5);
$odjSquare = new Square(4);
$odjectTriangle = new Triangle(10, 20, 5);
//Circle
echo "</br>";
$odjCircle->getTypeFigure();
echo $odjCircle->getSqura();
echo $odjCircle->getPerimeter();
//Square
echo "</br>";
$odjSquare->getTypeFigure();
echo $odjSquare->getSqura();
echo $odjSquare->getPerimeter();
//Triangle
echo "</br>";
$odjectTriangle->getTypeFigure();
echo $odjectTriangle->getSqura();
echo $odjectTriangle->getPerimeter();

?>


</body>
</html>
<?php

class Square extends Figure
{
    public function __construct($a)
    {
        $this->a = $a;
        $this->type = 'Квадрат';
    }

    public function getTypeFigure()
    {
        echo 'Фигура: ' . $this->type;
    }

    public function getSqura()

    {
        return ' Площадь: ' . $this->a ** 2;
        // TODO: Implement getSqura() method.
    }

    public function getPerimeter()

    {
        return ' Периметр: ' . 4 * $this->a;
        // TODO: Implement getPerimeter() method.
    }
}
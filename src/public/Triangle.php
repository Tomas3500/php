<?php

class Triangle extends Figure
{
    public $p;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->type = 'Треугольник';
    }

    public function getTypeFigure()
    {
        echo 'Фигура: ' . $this->type;
        // TODO: Implement getTypeFigure() method.
    }

    public function getSqura()
    {
//        $this->getPerimeter();
        $result = $this->p * (($this->p - $this->a) * ($this->p - $this->b) * ($this->p - $this->c));
        return ' Площадь: ' . sqrt($result);
        // TODO: Implement getSqura() method.
    }

    public function getPerimeter()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        return ' Периметр: ' . $p;
        // TODO: Implement getPerimeter() method.
    }
}
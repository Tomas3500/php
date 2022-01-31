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
        $this->getPerimeter();
        $result = $this->p * (($this->p - $this->a) * ($this->p - $this->b) * ($this->p - $this->c));
        return ' Площадь: ' . round(sqrt($result),2);
        // TODO: Implement getSqura() method.
    }

    public function getPerimeter()
    {
        $this->p = ($this->a + $this->b + $this->c) / 2;
        return ' Периметр: ' . $this->p;
        // TODO: Implement getPerimeter() method.
    }
}
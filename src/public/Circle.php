<?php

class Circle extends Figure
{

    public function __construct($pi, $r)
    {
        $this->pi = $pi;
        $this->r = $r;
        $this->type = 'круг';
    }


    public function getTypeFigure()
    {
        echo 'Фигура: ' . $this->type . ' ';
        // TODO: Implement getTypeFigure() method.
    }

    public function getSqura()
    {
        return 'Площадь:' . $this->pi * ($this->r) ** 2 . ' ';
    }

    public function getPerimeter()
    {
        return ' Периметр: ' . 2 * $this->pi * $this->r;
    }
}
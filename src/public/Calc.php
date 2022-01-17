<?php

class Calc
{
    protected $numb1;
    protected $numb2;

    public function __construct($numb1, $numb2)
    {
        $this->numb1 = $numb1;
        $this->numb2 = $numb2;
    }

    function showDivision()

    {
        echo $this->numb1 / $this->numb2 . "<br/>";

    }

    function multiplication()
    {
        return $this->numb1 * $this->numb2;
    }

    function addition()
    {
        echo $this->numb1 + $this->numb2 . "<br/>";
    }

    function subtraction()
    {
        echo $this->numb1 - $this->numb2 . "<br/>";
    }
}

class Pow extends Calc
{
    public function pow()
    {
        echo $this->multiplication() ** 2;
    }
}

$calc = new Calc(5, 3);
$pow = new Pow(5, 3);
$pow->pow();
$calc->showDivision();
$calc->multiplication();
$calc->addition();
$calc->subtraction();


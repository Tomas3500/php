<?php

class Worker
{
    protected $name;
    protected $age;
    protected $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSalary(){
        return $this->salary;
    }
}


//$object1 = new  Worker('Ivan',25,1000);
//$object2 = new  Worker('Vasya',30,2000);

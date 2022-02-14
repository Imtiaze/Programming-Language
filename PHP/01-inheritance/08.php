<?php

class Shape
{
    protected $shapeName;
    protected $area;

    public function __construct($shapeName) {
        // var_dump($shapeName);exit;
        $this->shapeName = $shapeName;
        $this->calculateArea();
    }

    public function getArea()
    {
        
        return "Area of this $this->shapeName (Shape) is: " . $this->area;
    }

    public function calculateArea(){}
}

class Triangle extends Shape
{
    private $a, $b;

    public function __construct($name, $a, $b) 
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct($name);
    }

    public function calculateArea()
    {
        die(var_dump('$this->area'));
        $this->area = 0.5 * ($this->a) * ($this->b);
    }
}

class Cirle extends Shape 
{

}

$circle = new Cirle('Circle', 5, 6);
$circle->getArea();
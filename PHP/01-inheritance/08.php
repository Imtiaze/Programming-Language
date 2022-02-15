<?php

class Shape
{
    const PI = M_PI;
    protected $shapeName;
    protected $area;

    public function __construct($shapeName) {
        $this->shapeName = $shapeName;
        $this->calculateArea();
    }

    public function getArea()
    {
        echo "Area of this $this->shapeName (Shape) is: " . $this->area;
    }
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
        $this->area = 0.5 * ($this->a) * ($this->b);
        var_dump($this->area);
    }
}

class Circle extends Shape 
{
    private $radius;

    public function __construct(String $name, float $radius) {
        $this->radius = $radius;
        parent::__construct($name);
    }

    public function calculateArea()
    {
        $this->area = Shape::PI * pow($this->radius, 2);
    }
}

$trianlge = new Triangle('Triangle', 5, 6);
$trianlge->getArea();

$circle = new Circle('Circle', 5, 6);
$circle->getArea();
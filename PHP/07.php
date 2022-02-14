<?php


Class Shape {

}

class Shapes {
    protected $shapes;

    public function __construct() {
        $this->shapes = array();
    }

    public function addShapes(Shape $shape)
    {
        array_push($this->shapes, $shape);
    }

    public function getTotalShapes()
    {
        return count($this->shapes);
    }
}

class Triangle extends Shape {

}

class Rectengle extends Shape {

}

class Student {

}

$shapeCollection = new Shapes();
$shapeCollection->addShapes(new Triangle);
$shapeCollection->addShapes(new Rectengle);
// $shapeCollection->addShapes(new Student);

echo $shapeCollection->getTotalShapes();
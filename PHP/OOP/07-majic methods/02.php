<?php

class Student
{
    private $name;
    private $age;
    private $class;


    function __construct($name = '', $age = '', $class = '') {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

}

$student = new Student('Imtiaze', 27, 16);

echo $student->name;
echo $student->age;
echo $student->class;


$student2 = new Student();
$student2->name = 'Friend';
$student2->age = 17;
$student2->class = 11;
echo $student2->name;
echo $student2->age;
echo $student2->class;


/* 

output: 

Imtiaze
27
16

Friend
17
11


*/

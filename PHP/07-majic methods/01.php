<?php

class Student
{
    private $name;
    private $age;
    private $class;

    public function setName($name) 
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($age) 
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setClass($class) 
    {
        $this->class = $class;
    }
    public function getClass()
    {
        return $this->class;
    }
}

$student = new Student();

$student->setName('Imtiaze');
echo $student->getName();
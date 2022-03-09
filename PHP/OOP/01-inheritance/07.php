<?php

class ParentClass
{
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi()
    {
        echo 'Hi from parent class sayHi: ' . $this->name;
    }
}

class ChildClass extends ParentClass
{
    public function sayHi()
    {
        echo 'Hi from child class sayHi: ' . $this->name . PHP_EOL;
        parent::sayHi();
    }

}

(new ChildClass('Imtiaze'));
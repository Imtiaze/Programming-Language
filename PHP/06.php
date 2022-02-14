<?php

class ParentClass
{
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        $this->sayHi();
        // self::sayHi(); it will print own SayHi
    }

    public function sayHi()
    {
        echo "Say hi to {$this->name}";
    }
}

class ChildClass extends ParentClass
{
    public function sayHi()
    {
        parent::sayHi();
        echo "\nHello";
    }
}

$cc = new ChildClass('Imti');
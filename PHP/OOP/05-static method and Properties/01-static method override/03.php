<?php

class P
{
    public function __construct(Type $var = null) {
        echo "constructor call" . PHP_EOL;
    }
    static  function sayHi()
    {
        echo "Say hi from P \n";
    }
}

class A extends P
{
    static  function sayHi()
    {
        echo "Say hi from A \n";
    }
}

class B extends A
{
    static function sayHi() 
    {
        echo "Say hi from B\n";
        echo parent::sayHi(); // calling parent class method
    }
}

A::sayHi();

(new A)->sayHi();

B::sayHi();



<?php

abstract class Cheese
{
    public function eat()
    {
        echo 'eating cheese';
    }
}

class Cheeder extends Cheese
{
    public function eat()
    {
        parent::eat();
    }   
}

// $breakfast = new Cheeder();  // fatal error

$breakfast = new Cheeder();
$breakfast->eat();

/* 

OUTPUT: 

eating cheese
*/

// You can force a class to be strictly an inheritable class by using the "abstract" keyword. When you define a class with abstract, any attempt to instantiate a separate instance of it will result in a fatal error. This is useful for situations like a base class where it would be inherited by multiple child classes yet you want to restrict the ability to instantiate it by itself.




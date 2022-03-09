<?php

interface BaseAnimal
{
    public function isAlive();
    public function canEat($param1, $param2);
    public function breed();
}

class Animal implements BaseAnimal // class can implement the interface
{ 
    public function isAlive(){}
    public function canEat($param1, $param2){}
    public function breed(){}
}

// interface can extends andother interface
interface BaseHuman extends BaseAnimal    
{
    public function canTalk();
}

class Human implements BaseHuman
{
    public function isAlive(){}
    public function canEat($param1, $param2){}
    public function breed(){}
    public function canTalk(){}
}


$human = new Human();
echo $human instanceof BaseAnimal;
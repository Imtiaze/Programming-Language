<?php


class Animal
{
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} is eating\n";
    }

    public function run()
    {
        echo "{$this->name} is running\n";
    }

    public function sleep()
    {
        echo "{$this->name} is sleeping\n";
    }

    public function greet()
    {
    }

    protected function addRank($rank)
    {
        $this->name = $rank . ' ' . $this->name;
    }
}

class Human extends Animal
{
    public function greet()
    {
        $this->addRank('Mr.');
        echo "{$this->name} says HI\n";
    }
}

class Cat extends Animal 
{
    public function greet()
    {
        echo "{$this->name} says Meow\n";
    }
    
}


$man = new Human('Ahammed');
$man->greet();
$man->sleep();

$cat = new Cat('kitten');
$cat->greet();
$cat->run();

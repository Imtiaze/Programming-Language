<?php

class Foo                             // grandParent
{
    public function something()
    {
        echo __CLASS__ . PHP_EOL;
        var_dump($this);
    }
}

class FooBar extends Foo               // parent
{
    public function something()
    {
        echo __CLASS__ . PHP_EOL;
        var_dump($this);
    }
}

class FooBarBaz extends FooBar          // child
{
    public function something()
    {
        echo __CLASS__ . PHP_EOL;
        var_dump($this);
    }

    public function call()
    {
        echo self::something(); // self
        echo parent::something(); // parent
        echo Foo::something(); // grandparent
    }
}


$obj = new FooBarBaz();
$obj->call();


/* 

FooBarBaz
object(FooBarBaz)#1 (0) {
}

FooBar
object(FooBarBaz)#1 (0) {
}

Foo
object(FooBarBaz)#1 (0) {
}

 */

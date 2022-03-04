<?php


class A
{
    protected static $message;

    static  function sayHi()
    {
        self::$message = 'new text' . PHP_EOL;
        echo "Say hi from A \n";
    }
}

class B extends A
{
    static function sayHi() 
    {
        parent::sayHi();
        echo parent::$message;
        echo "Say hi from B\n";
    }
}

B::sayHi();



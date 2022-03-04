<?php

class A
{
    static  function sayHi()
    {
        echo 'Say hi from A';
    }
}

class B extends A
{
    static function sayHi() 
    {
        echo 'Say hi from B';
    }
}

B::sayHi();


/* 

output: Say hi from B

*/

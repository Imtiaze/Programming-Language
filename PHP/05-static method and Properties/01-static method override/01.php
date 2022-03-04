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
    function sayHi() // not possible as parent class is static not override as non static
    {
        echo 'Say hi from B';
    }
}

B::sayHi();

/* 

output: Fatal error: Cannot make static method A::sayHi() non static in class B in 


*/




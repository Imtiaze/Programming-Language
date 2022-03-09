<?php

//NOTE:: an anonymous function can be called from a function


function multiplier($y)
{
    return function ($x) use ($y)
    {
        return  $x * $y;
    };
}

$double = multiplier(2);
echo $double(100);

$triple = multiplier(3);
echo $triple(100);
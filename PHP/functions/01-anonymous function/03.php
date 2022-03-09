<?php

//NOTE::vThe array_map() function accepts a callback function and an array. It applies the callback function to each element and includes the results in a new array.

function doubleIt($x)
{
    return $x * 2;
}

$array = [2, 5, 10, 13];

print_r(array_map('doubleIt', $array));

/**
 * outeput::

Array
(
    [0] => 4
    [1] => 10
    [2] => 20
    [3] => 26
)
 */


// ## - We can make it much short by calling the anonymous function at once

$array = [2, 5, 10, 13];

$doubleIt = array_map(function($x) {
    return $x * 2;
}, $array);

print_r($doubleIt);
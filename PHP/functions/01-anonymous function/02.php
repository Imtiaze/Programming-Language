<?php

$multiply = function ($x, $y) {
    return $x * $y;
};

echo $multiply(10, 20);
// output: 200

var_dump($multiply);

// output:: It's a closure object
/**  
object(Closure)#1 (1) {
  ["parameter"]=>
  array(2) {
    ["$x"]=>
    string(10) "<required>"
    ["$y"]=>
    string(10) "<required>"
  }
}
*/

// NOTE:: Since an anonymous function is an object, you can assign it to a variable, pass it to a function, and return it from a function.



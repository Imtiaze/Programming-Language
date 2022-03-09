<?php

$message = 'Hi';

$say = function () {
    echo $message;
};

echo $say();


// output: Fatal error: Uncaught Error: Object of class Closure could not be converted to string
// NOTE:: Notice: Undefined variable: message 



// ## - To use the variables from the parent scope inside an anonymous function, you place the variables in the use

$message = 'Hi';

$say = function () use ($message) {
    echo $message;
};

echo $say();


// Output : Hi

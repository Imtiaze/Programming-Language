<?php

// NOTE:: $message is passed to the anonymous function by value, not by reference
// NOTE:: change it inside the anonymous function, the change will not reflect outside of the function



$message = 'Hi';
$say = function () use ($message) 
{
	$message = 'Hello';
	echo $message;
};

$say();

echo $message;

/* Output:

HelooHi
*/


// ## - If we want pass by referrance, and parent variable will be raplace 
$message = 'Hi';
$say = function () use (& $message) {
	$message = "\nHello";
	echo $message;
};

$say();
echo $message;
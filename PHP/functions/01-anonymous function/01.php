<?php

function multiply($x, $y)
{
	return $x * $y;
}

echo multiply(10, 20); // NOTE::    Its a named function


// NOTE::anonymous function that doesn't have a name
// NOTE::As doesn't have a name need to end with a ;

function ($x, $y)
{
	return $x * $y;
};


<?php 

function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

// As it is an expression we must need to put semicolon at the end of the function

$sum = function (int|float ...$numbers): int|float {
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);

// If we want to pass external variable to anonymous function, we can pass with help of 'use' keyword
$x = 2;

$sum = function(int|float ...$numbers) use($x): int|float  {
    $x = 4;
    return array_sum($numbers) * $x;
};

echo $sum(1, 2, 3, 4);
echo $x;

// Pass by reference
$x = 2;

$sum = function(int|float ...$numbers) use(&$x): int|float  {
    $x = 4;
    return array_sum($numbers) * $x;
};

echo $sum(1, 2, 3, 4);
echo $x;

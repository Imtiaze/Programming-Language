<?php 

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';

echo $x(1, 3, 4, 5);

// If we write a function that is not exist that will give a fatal error, 

$x = 'sub';
echo $x(1,2,3,4);


// to handle we can use is_callable() method
if (is_callable($x)) {
    echo $x(1,2,3,4);
} else {
    echo 'No callable found';
}
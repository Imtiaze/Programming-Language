<?php

class FavColor
{
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setData($color)
    {
        $this->color = $color;

    }
}


$fc = new FavColor('red');
print_r($fc);

$fc1 = $fc;
$fc1->setData('blue');

print_r($fc);
print_r($fc1);

/* 
OutPut:

FavColor Object 
(
    [color] => red
)
FavColor Object
(
    [color] => blue
)
FavColor Object
(
    [color] => blue
)



*/

// Here it's just referrencing the object to another variable, that's one variable change another one also change
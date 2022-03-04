<?php

class MathCalculator
{
    private $number;
    static $name;

    static function fibonacchi($n)
    {
        echo "Fibonacchi series up to {$n}" . PHP_EOL;

        // $this->doSomething(); // not possible // from static method not possible to call as instance
        self::doSomething();
        // self::fibonacchi(4); // matha nosto
        // $this->factorial(5);  // not possible // not static method couldn't be call as instance

        self::$name = 'in static method';
        echo self::$name . PHP_EOL;

        // $this->number; not possible
        // self::$number;// not possible
    }


    static function doSomething()
    {
        echo "Doing something". PHP_EOL;
    }

    function factorial($n)
    {
        echo "Find factorial up to {$n}" . PHP_EOL; 

        $this->doSomething();
        self::doSomething();

        $this->number = 5;
        echo $this->number . PHP_EOL;

        self::$name = 'static properties' . PHP_EOL;
        echo self::$name;

        // self::$number = 10;
        // echo self::$number; //not possible 

        // $this->name; // not possible

    }
}



$mathc = new MathCalculator;
$mathc->factorial(7);

MathCalculator::fibonacchi(7);

echo MathCalculator::$name;
<?php

class Foo
{
    public function printItem(String $string)
    {
        echo 'Foo: ' . $string . PHP_EOL;  // EOL -> end of line (work like \n (new line))
    }

    public function printPHP()
    {
        echo 'PHP is greate' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem(String $string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar;    // class can be instantiate in both ways - with brackets or with out brackets

$foo->printItem('Bar');
$foo->printPHP();

$bar->printItem('baz');
$bar->printPHP();

// output

// Foo: Bar
// PHP is greate
// Bar: baz
// PHP is greate

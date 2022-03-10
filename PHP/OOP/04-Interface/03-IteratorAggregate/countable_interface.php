<?php

class District implements IteratorAggregate, Countable
{
    private $districts;

    public function __construct() 
    {
        $this->districts = [];
    }

    public function add($dirstrict)
    {
        array_push($this->districts, $dirstrict);
    }

    public function districts()
    {
        return $this->districts;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

    public function count()
    {
        return count($this->districts);
    }
}


$district = new District();
$district->add('Dhaka');
$district->add('Rajshahi');
$district->add('KHulna');
$district->add('Chitagong');
$district->add('Bhairab');

// print_r($dirstrict->districts());

// $l_districts = $district->districts();

foreach ($district as $key => $value) {
    echo $value . "\n";
}

echo "\nCount: " . count($district);
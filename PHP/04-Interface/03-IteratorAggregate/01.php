<?php

class District
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
}


$district = new District();
$district->add('Dhaka');
$district->add('Rajshahi');
$district->add('KHulna');
$district->add('Chitagong');

// print_r($dirstrict->districts());

$l_districts = $district->districts();

foreach ($l_districts as $key => $value) {
    echo $value . "\n";
}
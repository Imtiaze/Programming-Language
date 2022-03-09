<?php 

class MyClass
{
    const CITY = 'Dhaka';  

    public function sayHi()
    {
        echo 'Say hi from ' . $this::CITY;
        echo 'Say hi from ' . self::CITY;
    }
}

$city = new MyClass;
echo $city::CITY;

// directoy
echo MyClass::CITY;


$city->sayHi();
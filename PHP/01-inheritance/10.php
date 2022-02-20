<?php


class CoffeMaker
{
    public function brew()
    {
        var_dump('brewing coffe....');
    }
}

// "Is a" relationship (Special coffe make is always a coffe maker)

class SpecialtyCoffeMaker extends CoffeMaker    
{
    public function brewLatte()
    {
        var_dump('brewing a Latte....');
    }
}

(new SpecialtyCoffeMaker)->brew();

// So, specialtycoffemaker can always brew a coffe [code duplicateion less]
// However it can also brew a Latte
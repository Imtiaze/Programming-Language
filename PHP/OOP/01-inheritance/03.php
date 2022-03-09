
<?php

class Foo
{
  public function something()
  {
    echo __CLASS__ . PHP_EOL;   // return class name - Predefined constants __CLASS__
    var_dump($this);            // var_dump — Dumps information about a variable
    var_dump(gettype($this));
  }

  public function className() 
  {
      return __CLASS__;
  }
}

(new Foo())->something();
echo (new foo())->className(); // class name case insensitive

/*

Output: 

Foo

object(Foo)#1 (0) {
}

string(6) "object"

Foo

*/


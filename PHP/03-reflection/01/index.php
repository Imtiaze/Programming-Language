<?php 


include 'User.php';


// $rc = new Acme\User();
// echo $rc->isLoggedIn();


$rc = new ReflectionClass('Acme\User');
// echo print_r(get_class_methods($rc));

echo $rc->getName() . PHP_EOL;
// Acme\User

echo $rc->getShortName();

// User
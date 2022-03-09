<?php
var_dump( class_exists( 'A' ), class_exists( 'B' ) );
// Outputs: bool(true) bool(true)

die;
class A {}
class B extends A {}
?>


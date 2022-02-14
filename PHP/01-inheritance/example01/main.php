<?php

include("person.php");       
include("student.php");   
include("teacher.php");       
//-----Creating a object of the class "teacher"--------
$t1 = new Teacher();
$t1->name = "Mustermann";
$t1->forename = "Max";
$t1->email="max@mustermann.com";

echo $t1->name.", ".$t1->forename.": ".$t1->email;
$t1->ID();
<?php


require_once 'functions.php';

// load_model('Contact');

$person = new Person();
var_dump($person);

$contact = new Contact('john.doe@example.com');
var_dump($contact->getEmail());

$sendEmail = Email::send($contact);
var_dump($sendEmail);
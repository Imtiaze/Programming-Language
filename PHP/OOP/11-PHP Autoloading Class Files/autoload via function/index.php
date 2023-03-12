<?php


require_once 'functions.php';

load_model('Contact');

$contact = new Contact('john.doe@example.com');

var_dump($contact->getEmail());
exit;
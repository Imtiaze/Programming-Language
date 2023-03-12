<?php

function load_model($className) 
{
    $path_to_file = 'models/' . $className . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}
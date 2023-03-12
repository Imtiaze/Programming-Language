<?php

function load_model($className) 
{
    $path_to_file = 'models/' . $className . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

function load_service($serviceName)
{
    $path_to_file = 'services/' . $serviceName . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

spl_autoload_register('load_model');
spl_autoload_register('load_service');
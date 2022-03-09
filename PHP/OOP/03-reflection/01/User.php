<?php

namespace Acme;

class User 
{
    protected $loggedIn = true;
    protected $data = [];


    public function getData()
    {
        $this->loggedIn;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function isLoggedIn() 
    {
        return $this->loggedIn;
    }
}

<?php

class CampaignMonitor
{
    protected $apiKye;

    public function __construct($apiKye) {
        $this->apiKye = $apiKye;
    }

    public function subscribe($email)
    {

    }
}


class NewsLetterSubscriptionController
{
    
    public function store(CampaignMonitor $newsLetter)
    {
        $newsLetter->subscribe(auth()->user()->email);
    }
}
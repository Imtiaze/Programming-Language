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
    
    public function store()
    {
        $newsLetter = new CampaignMonitor(config('services.cm.key'));
        $newsLetter->subscribe(auth()->user()->email);
    }
}
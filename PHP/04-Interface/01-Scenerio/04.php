<?php

class CampaignMonitor
{
    
    public function subscribe($email)
    {
        die('Subscribing with campaign monitor.');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('subscribing with drip.');
    }
}


class NewsLetterSubscriptionController
{
    public $email = 'email@e.com';
    
    public function store($newsLetter) // PHP is smart enough to get type of class
    {
        $newsLetter->subscribe($this->email);
    }
}

(new NewsLetterSubscriptionController)->store(new CampaignMonitor);
(new NewsLetterSubscriptionController)->store(new  Drip());

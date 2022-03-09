<?php
# if we go more formal and fair enough

interface NewsLetter
{
    public function subscribe($email);
}

class CampaignMonitor implements NewsLetter
{
    
    public function subscribe($email)
    {
        die('Subscribing with campaign monitor.');
    }
}

class Drip implements NewsLetter
{
    public function subscribe($email)
    {
        die('subscribing with drip.');
    }
}


class NewsLetterSubscriptionController
{
    public $email = 'email@e.com';
    
    public function store(NewsLetter $newsLetter) // formal way
    {
        $newsLetter->subscribe($this->email);
    }
}

(new NewsLetterSubscriptionController)->store(new Drip);
(new NewsLetterSubscriptionController)->store(new  CampaignMonitor());

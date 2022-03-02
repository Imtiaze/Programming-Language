<?php

class CampaignMonitor
{
    
    public function subscribe($email)
    {

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
    
    public function store(Drip $newsLetter) // Have to pass here a CampaignMonitor
    {
        $newsLetter->subscribe($this->email);
    }
}

(new NewsLetterSubscriptionController)->store(new Drip);
// OUTPUT: subscribing with drip.

//FOR subscribing with CampaignMonitor i have to switch in Controller
(new NewsLetterSubscriptionController)->store(new  CampaignMonitor());

// Fatal error: Uncaught TypeError: Argument 1 passed to NewsLetterSubscriptionController::store() must be an instance of Drip, instance of CampaignMonitor given, called in D:\server\www\LWHH\PHP\oop\PHP\04-Interface\Scenerio\03.php on line 35 and defined in

<?php

class LogToFile
{
    public function execute($message)
    {
        var_dump($message . ' Dump to file system.');
    }
}


class UserController extends LogToFile
{
    protected $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function show()
    {
        $this->execute($this->message);
    }
}


$controller = new UserController('This message');
$controller->show();


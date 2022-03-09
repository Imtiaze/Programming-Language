
<?php

interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump($message . ' Dump to file system.');
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump($message . ' Dump to Database system.');
    }
}


class UserController
{
    protected $logger;

    public function __construct(Logger $logger)  //Formal way
    { 
        $this->logger = $logger;
    }

    public function show()
    {
        $message = 'This Message';
        $this->logger->execute($message);
    }
}


$controller = new UserController(new LogToFile);
$controller->show();
$controller = new UserController(new LogToDatabase);
$controller->show();


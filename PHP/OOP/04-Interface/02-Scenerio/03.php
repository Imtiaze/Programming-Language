
<?php

class LogToFile
{
    public function execute($message)
    {
        var_dump($message . ' Dump to file system.');
    }
}

class LogToDatabase
{
    public function execute($message)
    {
        var_dump($message . ' Dump to Database system.');
    }
}


class UserController
{
    protected $logger;

    public function __construct(LogToFile $logger)  // specific - only LogToFile type is accepted
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


// We can pass LogToDatabase, on that case construct will be __construct(LogToDatabase $logger)
// however php can handle it dynamically displayed next


<?php

class LogToFile
{
    public function execute($message)
    {
        var_dump($message . ' Dump to file system.');
    }
}


class UserController
{
    protected $logger;

    public function __construct(LogToFile $logger) {
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


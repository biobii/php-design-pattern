<?php

namespace App\Strategy;

use App\Strategy\LogToFile;
use App\Strategy\Contracts\Logger;

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}
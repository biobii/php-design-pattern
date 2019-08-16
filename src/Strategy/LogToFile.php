<?php

namespace App\Strategy;

use App\Strategy\Contracts\Logger;

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log the data to file');
    }
}
<?php
use App\Strategy\LogToFile;
use App\Strategy\LogToDatabase;

require __DIR__ . '/../../vendor/autoload.php';

(new App\Strategy\App)->log('An error occured!'); // Log to file
(new App\Strategy\App)->log('An error occured!', new LogToDatabase); // Log to database
<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Singleton\Database;

$db = Database::connect();
$db->getConnection();
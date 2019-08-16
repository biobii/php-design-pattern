<?php

namespace App\Singleton;

class Database
{
    private static $instance = null;

    private $connection;
    private $dbhost = 'localhost';
    private $dbname = 'db-name';
    private $dbusername = 'root';
    private $dbpassword = 'root';

    public function __construct()
    {
        try {
            $this->connection = new \PDO(
                "mysql:host=".$this->dbhost.";dbname=".$this->dbname, $this->dbusername, $this->dbpassword
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function connect()
    {
        if (! self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
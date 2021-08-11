<?php

namespace App\Database;

use mysqli;
use PDO;
use PDOException;

class DB
{

    private static $instance;
    private $connection;


    function __construct()
    {
        $this->connection = new mysqli(config('db_hostname'), config('db_username'), config('db_password'), config('db_database'));

        try {
            $this->connection = new PDO("mysql:host=" . config('db_hostname') . ";dbname=" . config('db_database'), config('db_username'), config('db_password'));
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
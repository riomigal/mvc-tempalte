<?php

namespace App\Database;

use Embryo\PDO\Database;

class DB
{
    protected $db;
    protected static $instance;

    function __construct()
    {
        $config = require root_path('/app/config/database.php');

        $this->db = new Database($config);
    }

    static function getInstance()
    {
        if (self::$instance == null) {

            self::$instance = new self();
        }

        return self::$instance;
    }

    function getConnection()
    {
        return $this->db->connection('local');
    }
}
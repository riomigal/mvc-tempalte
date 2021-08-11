<?php

use App\Database\DB;
use Dotenv\Dotenv;
use Pecee\SimpleRouter\SimpleRouter;


require '../vendor/autoload.php';

// Loads ENV variables
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

// Get DB connection
$db = DB::getInstance()->getConnection();

require_once '../router/web.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

SimpleRouter::start();
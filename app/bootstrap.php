<?php

use Pecee\SimpleRouter\SimpleRouter;

require '../vendor/autoload.php';

require_once '../router/web.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

SimpleRouter::start();
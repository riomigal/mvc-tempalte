<?php

use App\Util\View;

require __DIR__ . '/simple_router/index.php';


function view(string $file, array $params = [])
{
    $view = new View();

    $view->render($file, $params);
}
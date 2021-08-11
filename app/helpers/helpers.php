<?php

use App\Util\View;

require __DIR__ . '/simple_router/index.php';


/**
 * Helper function to render views
 *
 * @param  mixed $file
 * @param  mixed $params
 * @return void
 */
function view(string $file, array $params = [])
{
    $view = new View();

    $view->render($file, $params);
}

/**
 * Returns root path
 *
 * @param  string $path
 * @return string
 */
function root_path(string $path = ''): string
{
    return dirname($_SERVER['DOCUMENT_ROOT'], 1) . $path;
}

/**
 * Returns public path
 *
 * @param  string $path
 * @return string
 */
function public_path(string $path = ''): string
{
    return $_SERVER['DOCUMENT_ROOT'];
}



/**
 * Access config variable
 *
 * @param  mixed $value
 * @return void
 */
function config(string $value)
{
    $array = require root_path() . '/app/config/app.php';
    return $array[$value] ?? null;
}
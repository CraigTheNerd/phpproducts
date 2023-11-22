<?php

use JetBrains\PhpStorm\NoReturn;

/**
 * @param $value
 * @return void
 */
#[NoReturn] function dd($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

/**
 * @param $value
 * @return void
 */
function dump($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * @param $value
 * @return bool
 */
function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

/**
 * @param $statusCode
 * @return void
 */
#[NoReturn] function abort($statusCode = 404): void
{
    http_response_code($statusCode);
    require APP_ROOT . "/controllers/errors/{$statusCode}.php";
    die();
}

/**
 * @param $path
 * @return string
 */
function base_path($path): string
{
    return BASE_PATH . $path;
}

/**
 * @param string $path
 * @return string
 */
function app_path(string $path): string
{
    return base_path('app/' . $path);
}

/**
 * @param string $path
 * @return string
 */
function views_path(string $path): string
{
    return app_path('views/' . $path);
}


function view(string $view, array $data = [])
{
    extract($data);
    require views_path("{$view}.view.php", $data);
}

function image_path(string $path) : string
{
    return app_path('resources' . $path);
}
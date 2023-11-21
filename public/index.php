<?php

declare(strict_types=1);
error_reporting(E_ALL);

use core\Router;

define("BASE_PATH", dirname(__DIR__, 1) . '/');

const APP_ROOT = BASE_PATH . 'app';

require APP_ROOT . '/core/functions.php';

//  Load Config

//  Load classes as and when necessary
spl_autoload_register(function ($class) {

    //  This no longer works because of namespacing
    //  require base_path("core/{$class}.php");

    //  This works with namespacing
    //  Core\Database - use str_replace to rewrite the backslash as a forward slash
    //  First param needs to be two backslashes. We need to escape the backslash first before defining
    //  the backslash as the character we want to replace, otherwise it would escape the quote,
    //  which is the next character
    //  DIRECTORY_SEPARATOR IS dynamic to operating system and will work on any OS instead of hard coding it for macOS.
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require app_path("{$class}.php");
});

$router = new Router();

$routes = require app_path('routes/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//  Because HTML forms only support GET and POST requests,
//  we need a way to tell our application when we actually want to send a PUT, PATCH or DELETE request
//  In our HTML form we add a hidden field to the form where we attach a _method key to the $_POST array
//  that is sent from the form
//  So if $_POST['_method'] is PUT, PATCH or DELETE, then we match the request type we actually want with
//  the correct route
//  Otherwise, we use GET or POST as it is set in the $_SERVER['REQUEST_METHOD'], which is what we would
//  have defined in the form
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
<?php

use CoffeeCode\Router\Router;

require_once(__DIR__ . '/../vendor/autoload.php');

$router = new Router(app('site.base'));

/**
 * Web
 */

$webRoutes = require(path('routes') . '/web.php');
$webRoutes($router);

/**
 * Error
 */

$router->get('/erro/{error_code}', function ($data) {

    echo "Oops ! Erro {$data['error_code']} econtrado";

}, 'error');

$router->dispatch();

if ($error = $router->error()) {
    
    $router->redirect('error', ['error_code' => $error]);
}

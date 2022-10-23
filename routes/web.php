<?php

use CoffeeCode\Router\Router;
use Source\Infra\Http\Controllers\GetJobsControllerFactory;

return function (Router $router) {

    $router->namespace('Source\Infra\Http\Controllers');

    $router->get('/trabalhos', function(array $data) {

        GetJobsControllerFactory::create()->handle($data);

    }, 'GetJobs');

};


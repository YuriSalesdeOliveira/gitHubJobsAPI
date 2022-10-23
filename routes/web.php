<?php

use CoffeeCode\Router\Router;
use Source\Infra\Http\Controllers\GetJobsControllerFactory;

return function (Router $router) {

    $router->namespace('Source\Infra\Http\Controllers');

    $router->get('/trabalhos/{token}', function(array $data) {

        GetJobsControllerFactory::create()->handle($data);

    }, 'GetJobs');

    $router->get('/trabalhos/{column}/{value}/{token}', function ($data) {

        GetJobsControllerFactory::create()->handle($data);

    }, 'GetJobsFilters');

};


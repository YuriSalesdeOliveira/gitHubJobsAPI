<?php

use CoffeeCode\Router\Router;

return function (Router $router) {

    $router->namespace('Source\Infra\Http\Controllers');

    $router->get('/', 'Web:index', 'site.index');
    $router->get('/trabalhos', 'Web:jobs', 'site.jobs');
    $router->get('/trabalhos/{job}', 'Web:job', 'site.job');

};


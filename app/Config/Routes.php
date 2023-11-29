<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Helloworld;

$routes->get('helloworld', [Helloworld::class, 'getIndex']);

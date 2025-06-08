<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/transactions', 'Home::index');

$routes->post('/transactions/register', 'Transactions::register');

<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/transactions', 'Home::index'); 

$routes->post('/transactions/register', 'Transactions::register'); 
$routes->post('/transactions/edit', 'Transactions::edit'); 
$routes->get('/transactions/delete/', 'Transactions::delete'); 
$routes->get('/transactions/delete/(:num)', 'Transactions::delete/$1'); 
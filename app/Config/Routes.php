<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::index');
$routes->get('/registration', 'Auth::registrationScreen');
$routes->get('/registerUser', 'Auth::registerUser');

$routes->get('/transactions', 'Home::index'); 

$routes->post('/transactions/register', 'Transactions::register'); 
$routes->post('/transactions/editTransaction', 'Transactions::editTransaction'); 
$routes->get('/transactions/delete/', 'Transactions::delete'); 
$routes->get('/transactions/delete/(:num)', 'Transactions::delete/$1'); 
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'Auth::LoginScreen'); 
$routes->get('/registration', 'Auth::registrationScreen');
$routes->get('/first-login', 'Auth::firstLoginScreen'); 

$routes->post('/loginSubmit', 'Auth::loginSubmit');
$routes->post('/register-user', 'Auth::registerUser');
$routes->get('/logout', 'Auth::logout');


$routes->get('/transactions', 'Home::index'); 

$routes->post('/transactions/register', 'Transactions::register'); 
$routes->post('/transactions/editTransaction', 'Transactions::editTransaction'); 
$routes->get('/transactions/delete/', 'Transactions::delete'); 
$routes->get('/transactions/delete/(:num)', 'Transactions::delete/$1'); 
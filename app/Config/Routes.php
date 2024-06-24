<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
// $routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
// $routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    return view('errors/404_not_found.php');
});
$routes->setAutoRoute(true);


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// Authentication Routes
$routes->get('/login', 'Authentication::loginPage', ['filter' => 'LoggedinFilter']);
$routes->get('/authentication/loginpage', 'Authentication::loginPage', ['filter' => 'LoggedinFilter']);
$routes->post('/login', 'Authentication::login');

$routes->get('/auth/google', 'Authentication::google', ['filter' => 'LoggedinFilter']);
$routes->get('/authentication/google', 'Authentication::google', ['filter' => 'LoggedinFilter']);
$routes->get('/auth/google/callback', 'Authentication::googleCallBack');

$routes->get('/logout', 'Authentication::logout', ['filter' => 'LoginFilter']);

// Pages Routes
$routes->get('/', 'Dashboard::index', ['filter' => 'LoginFilter']);
$routes->get('/products', 'Products::index', ['filter' => 'LoginFilter']);
$routes->get('/product/add', 'Product::add', ['filter' => 'LoginFilter']);
$routes->post('/product/add', 'Product::addProduct', ['filter' => 'LoginFilter']);
$routes->get('/product/edit/(:num)', 'Product::edit/$1', ['filter' => 'LoginFilter']);
$routes->post('/product/update', 'Product::updateProduct', ['filter' => 'LoginFilter']);
$routes->get('/product/delete/(:num)', 'Product::delete/$1', ['filter' => 'LoginFilter']);

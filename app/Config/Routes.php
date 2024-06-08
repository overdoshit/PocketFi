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
// $routes->set404Override();
$routes->setAutoRoute(true);


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// Authentication Routes
$routes->post('/register', 'Authentication::register');
$routes->post('/login', 'Authentication::login');
$routes->get('/logout', 'Authentication::logout');
$routes->get('/authentication/register', 'Authentication::register', ['filter' => 'LoggedinFilter']);
$routes->get('/authentication/login', 'Authentication::login', ['filter' => 'LoggedinFilter']);
$routes->get('/auth/google', 'Authentication::google', ['filter' => 'LoggedinFilter']);
$routes->get('/authentication/google', 'Authentication::google', ['filter' => 'LoggedinFilter']);
$routes->add('/auth/google/callback', 'Authentication::googleCallBack');

// User Profile Routes
$routes->get('/profile', 'Profile::index', ['filter' => 'LoginFilter']);
$routes->get('/profile/index', 'Profile::index', ['filter' => 'LoginFilter']);

// Pages Routes
$routes->get('/mobile-wifi/indonesia', 'MobileWifi::indonesia');
$routes->get('/mobile-wifi/international', 'MobileWifi::international');

$routes->get('/how-it-works', 'HowItWorks::index');

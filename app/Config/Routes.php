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
$routes->get('/auth', 'Authentication::index');
$routes->get('/auth/google', 'Authentication::google');
$routes->add('/auth/google/callback', 'Authentication::googleCallBack');
$routes->get('/logout', 'Authentication::Logout');
$routes->post('/register', 'Authentication::register');
$routes->post('/login', 'Authentication::login');
$routes->get('/mobile-wifi/indonesia', 'MobileWifi::Indonesia');
$routes->get('/mobile-wifi/international', 'MobileWifi::International');

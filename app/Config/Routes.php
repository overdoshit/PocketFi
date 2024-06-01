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

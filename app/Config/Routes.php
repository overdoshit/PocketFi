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
    $data = [
        'title' => '404 Not Found',
    ];
    return view('errors/404_not_found.php', $data);
});
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
$routes->post('/profile/update', 'Profile::update', ['filter' => 'LoginFilter']);
$routes->post('/profile/delete-photo', 'Profile::deletePhoto', ['filter' => 'LoginFilter']);
$routes->get('/orders', 'Profile::orders', ['filter' => 'LoginFilter']);

// Product Pages Routes
$routes->get('/mobile-wifi/indonesia', 'MobileWifi::indonesia');
$routes->get('/mobile-wifi/international', 'MobileWifi::international');
$routes->get('/sim-card', 'SimCard::index');

//Pages Routes
$routes->get('/how-it-works', 'HowItWorks::index');

// Booking Pages Routes
$routes->post('/booking', 'Booking::index', ['filter' => 'LoginFilter']);
$routes->post('/booking/index', 'Booking::index', ['filter' => 'LoginFilter']);
$routes->post('/redeem', 'Booking::redeemPromo', ['filter' => 'LoginFilter']);
$routes->post('/booking/payment', 'Booking::payment', ['filter' => 'LoginFilter']);
$routes->get('/booking/success', 'Booking::success', ['filter' => 'LoginFilter']);

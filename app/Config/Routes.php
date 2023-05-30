<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'LandingController::index', ['as' => 'landing']);
$routes->get('/home', 'Home::index');
$routes->get('/DatabaseTest', 'DatabaseTest::index');

$routes->group('user', function ($routes) {
    $routes->get('/', 'UserController::index', ['as' => 'user.index']);
    $routes->get('create', 'UserController::create', ['as' => 'user.create']);
    $routes->post('store', 'UserController::store', ['as' => 'user.store']);
    $routes->get('login', 'UserController::login', ['as' => 'user.login']);
    $routes->post('login', 'UserController::login', ['as' => 'user.login']);
    $routes->get('logout', 'UserController::logout', ['as' => 'user.logout']);
    $routes->get('edit/(:num)', 'UserController::edit/$1', ['as' => 'user.edit']);
    $routes->post('update/(:num)', 'UserController::update/$1', ['as' => 'user.update']);
    $routes->get('delete/(:num)', 'UserController::delete/$1', ['as' => 'user.delete']);
});

$routes->group('bus', function ($routes) {
    $routes->get('/', 'BusController::index', ['as' => 'bus.index']);
    $routes->get('create', 'BusController::create', ['as' => 'bus.create']);
    $routes->post('store', 'BusController::store', ['as' => 'bus.store']);
    $routes->get('edit/(:num)', 'BusController::edit/$1', ['as' => 'bus.edit']);
    $routes->post('update/(:num)', 'BusController::update/$1', ['as' => 'bus.update']);
    $routes->get('delete/(:num)', 'BusController::delete/$1', ['as' => 'bus.delete']);
    $routes->get('book/(:num)', 'BusController::book/$1', ['as' => 'bus.book']);
    $routes->post('process-booking/(:num)', 'BusController::processBooking/$1', ['as' => 'bus.processBooking']);
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

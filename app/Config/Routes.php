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

$routes->get('/', 'Home::index');
$routes->get('/DatabaseTest', 'DatabaseTest::index');

$routes->group('user', function ($routes) {
    $routes->get('/', 'UserController::index', ['as' => 'user.index']);
    $routes->get('create', 'UserController::create', ['as' => 'user.create']);
    $routes->post('store', 'UserController::store', ['as' => 'user.store']);
    $routes->get('edit/(:num)', 'UserController::edit/$1', ['as' => 'user.edit']);
    $routes->post('update/(:num)', 'UserController::update/$1', ['as' => 'user.update']);
    $routes->get('delete/(:num)', 'UserController::delete/$1', ['as' => 'user.delete']);
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

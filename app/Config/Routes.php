<?php

namespace Config;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

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
    $routes->get('dashboard', 'UserController::dashboard', ['as' => 'user.dashboard']);
    $routes->get('profile', 'UserController::profile', ['as' => 'user.profile']);
});

$routes->group('bus', function ($routes) {
    $routes->get('/', 'BusController::index', ['as' => 'bus.index']);
    $routes->get('list', 'BusController::list', ['as' => 'bus.list']);
    $routes->get('create', 'BusController::create', ['as' => 'bus.create']);
    $routes->post('store', 'BusController::store', ['as' => 'bus.store']);
    $routes->get('edit/(:num)', 'BusController::edit/$1', ['as' => 'bus.edit']);
    $routes->post('update/(:num)', 'BusController::update/$1', ['as' => 'bus.update']);
    $routes->get('delete/(:num)', 'BusController::delete/$1', ['as' => 'bus.delete']);
    $routes->get('book/(:num)', 'BusController::book/$1', ['as' => 'bus.book']);
    $routes->post('process-booking/(:num)', 'BusController::processBooking/$1', ['as' => 'bus.processBooking']);
});

$routes->group('booking', function ($routes) {
    $routes->get('/', 'BookingController::index', ['as' => 'booking.index']);
    $routes->get('list', 'BookingController::list', ['as' => 'booking.list']);
    $routes->get('booking/create/(:num)', 'BookingController::create/$1', ['as' => 'booking.create']);
    $routes->post('store', 'BookingController::store', ['as' => 'booking.store']);
    $routes->get('cancel/(:num)', 'BookingController::cancel/$1', ['as' => 'booking.cancel']);
    $routes->get('edit/(:num)', 'BookingController::edit/$1', ['as' => 'booking.edit']);
    $routes->post('update/(:num)', 'BookingController::update/$1', ['as' => 'booking.update']);
    $routes->get('delete/(:num)', 'BookingController::delete/$1', ['as' => 'booking.delete']);
});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

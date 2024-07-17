<?php

namespace Config;
$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('/home', 'TravelController::index');
$routes->get('/about', 'TravelController::about');
$routes->get('/book', 'TravelController::book');
$routes->get('/package', 'TravelController::package');
$routes->get('/help', 'TravelController::help');
//$routes->get('/login', 'TravelController::login');
$routes->get('/services', 'TravelController::services');
$routes->get('register', 'UserController::register');
$routes->post('register', 'UserController::create');
$routes->get('login', 'UserController::login');
$routes->post('login', 'UserController::loginValidate');
$routes->get('dashboard', 'UserController::dashboard', ['filter' => 'auth']);
$routes->get('logout', 'UserController::logout');




if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
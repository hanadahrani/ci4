<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/table', 'Home::table');

/*
 * --------------------------------------------------------------------
 * Route Peserta
 * --------------------------------------------------------------------
 */

$routes->get('/peserta', 'Peserta::index');
$routes->get('/peserta/create', 'Peserta::create');
$routes->post('/peserta/store', 'Peserta::store');
$routes->get('peserta/edit/(:num)', 'Peserta::edit/$1');
$routes->post('peserta/update/(:num)', 'Peserta::update/$1');
$routes->get('peserta/delete/(:num)', 'Peserta::delete/$1');

/*
 * --------------------------------------------------------------------
 * Route Todo
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Todo::index');
$routes->get('/todo/create', 'Todo::create');
$routes->post('/todo/store', 'Todo::store');
$routes->get('todo/edit/(:num)', 'Todo::edit/$1');
$routes->post('todo/update/(:num)', 'Todo::update/$1');
$routes->get('todo/delete/(:num)', 'Todo::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

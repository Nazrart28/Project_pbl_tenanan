<?php

namespace Config;

use App\Controllers\Mitra;

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
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//untuk menampilkan halaman
$routes->get('/', 'Pages::index');
$routes->get('/logbook/index', 'Logbook::index');
$routes->get('/logbook/index', 'Logbook::index');
$routes->get('/logbook/create', 'Logbook::create');
$routes->get('/logbook/detail', 'Logbook::detail');
//$routes->patch('/logbook/detail', 'Logbook::detail');
//$routes->get('/logbook/(:any)', 'Logbook::detail/$1');
$routes->get('/mitra/index', 'Mitra::index');
$routes->get('/mitra/create', 'Mitra::create');
$routes->get('/mitra/create', 'Mitra::save');
//$routes->post('/mitra/(:any)', 'Mitra::update/$1');
$routes->get('/mitra/edit/(:segment)', 'Mitra::edit/$1');
$routes->get('/mitra/update', 'Mitra::update/$1');
$routes->get('/mitra/(:any)', 'Mitra::detail/$1');
$routes->delete('/mitra/(:num)', 'Mitra::delete/$1');
//$routes->delete('/logbook/(:num)', 'Logbook::delete/$1');
$routes->post('/logbook/index', 'Logbook::index');
$routes->post('/logbook/create', 'Logbook::create');
$routes->post('/logbook/detail', 'Logbook::detail');
$routes->post('/mitra/save', 'Mitra::save');
$routes->post('/mitra/create', 'Mitra::create');
$routes->post('/mitra/edit/(:segment)', 'Mitra::edit/$1');
$routes->post('/mitra/update', 'Mitra::update/$1');
$routes->post('/mitra/(:any)', 'Mitra::update/$1');
$routes->post('/mitra/delete', 'Mitra::delete/$1');


$routes->get('/kelompok/index', 'kelompok::index');
$routes->get('/kelompok/create', 'kelompok::create');
$routes->post('/kelompok/save/(any)', 'kelompok::save');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->get('/kelompok/(:any)', 'kelompok::edit/$1');
$routes->post('/kelompok/update/(:segment)', 'kelompok::update/$1');
$routes->post('/kelompok/edit/(:segment)', 'kelompok::edit/$1');
$routes->post('/kelompok/(:any)', 'kelompok::save/$1');
$routes->get('/kelompok/update/(:segment)', 'kelompok::update/$1');
$routes->post('/kelompok/(:any)', 'kelompok::update/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->post('/kelompok/edit/(:segment)', 'kelompok::edit/$1');
$routes->delete('/kelompok/(:num)', 'kelompok::delete/$1');


$routes->get('/kelompok/index', 'kelompok::index');
$routes->get('/kelompok/create', 'kelompok::create');
$routes->get('/kelompok/edit/(:segment)', 'kelompok::edit/$1');
$routes->delete('/kelompok/(:num)', 'kelompok::delete/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->get('/kelompok/(:any)', 'kelompok::edit/$1');
$routes->get('/kelompok/index', 'kelompok::index');
$routes->get('/kelompok/create', 'kelompok::create');
$routes->post('/kelompok/edit/(:segment)', 'kelompok::edit/$1');
$routes->get('/kelompok/create', 'kelompok::save');
//$routes->get('/kelompok/save/(:segment)', 'kelompok::save/$1');
$routes->get('/kelompok/detail', 'kelompok::save');
$routes->post('/kelompok/(:any)', 'kelompok::update/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->get('/kelompok/(:any)', 'kelompok::detail/$1');
$routes->post('/kelompok/edit/(:segment)', 'kelompok::edit/$1');
$routes->delete('/kelompok/(:num)', 'kelompok::delete/$1');
//$routes->post('/kelompok/save', 'kelompok::save');
$routes->post('/kelompok/create', 'kelompok::create');
$routes->post('/kelompok/update', 'kelompok::update');
$routes->post('/kelompok/update', 'kelompok::update/$1');


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

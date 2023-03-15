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
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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
$routes->get('/', 'Auth::login');
$routes->get('admins', 'admins::index');
$routes->get('dashboard', 'Dashbord::index');
$routes->get('register', 'Auth::register');
$routes->post('auth/save_register', 'Auth::save_register');
$routes->post('auth/save_admin', 'Auth::save_admin');
$routes->post('auth/check_login', 'Auth::check_login');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('admins/create', 'Admins::create');
$routes->post('admins/create', 'Admins::create');
$routes->get('staff/create', 'Staff::create');
$routes->post('staff/create', 'Staff::create');
$routes->get('admins/edit/(:num)', 'Admins::edit/$1');
$routes->get('staff/edit/(:num)', 'Staff::edit/$1');
$routes->post('staff/update/(:num)', 'Staff::update/$1');
$routes->post('admins/update/(:num)', 'Admins::update/$1');
$routes->post('admins/delete', 'Admins::delete');
$routes->post('staff/delete', 'Staff::delete');
$routes->get('staff/confirm-delete/(:num)', 'Staff::delete/$1');
$routes->get('admin/confirm-delete/(:num)', 'Admins::delete/$1');
$routes->get('vehicles', 'Vehicles::index');
$routes->get('staff', 'Staff::index');
$routes->get('visitors', 'Visitors::index');
$routes->get('drivers', 'Drivers::index');
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

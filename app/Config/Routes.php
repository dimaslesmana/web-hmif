<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('auth', function ($routes) {
	$routes->get('login', 'Auth::login');
	$routes->post('login', 'Auth::doLogin');
	$routes->get('logout', 'Auth::logout');
	$routes->addRedirect('(:any)', '/');
});

$routes->group('dashboard', ['filter' => 'authentication'], function ($routes) {
	$routes->get('member/add', 'Dashboard::addMemberView');
	$routes->post('member/add', 'Dashboard::insertMember');
	$routes->post('member/edit/submit', 'Dashboard::updateMember');
	$routes->get('member/edit/(:num)', 'Dashboard::editMemberView/$1');
	$routes->delete('member/delete/(:num)', 'Dashboard::deleteMember/$1');
	$routes->get('member', 'Dashboard::memberView');
	$routes->get('events/add', 'Dashboard::addEventsView');
	$routes->post('events/add', 'Dashboard::insertEvent');
	$routes->post('events/edit/submit', 'Dashboard::updateEvent');
	$routes->get('events/edit/(:num)', 'Dashboard::editEventsView/$1');
	$routes->delete('events/delete/(:num)', 'Dashboard::deleteEvent/$1');
	$routes->get('events', 'Dashboard::eventsView');
	$routes->get('/', 'Dashboard::index');
	$routes->addRedirect('(:any)', 'dashboard');
});

$routes->get('/home', 'Home::index');
$routes->get('/events/(:num)', 'Events::details/$1');
$routes->get('/events', 'Events::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');

$routes->get('/', 'Main::index');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

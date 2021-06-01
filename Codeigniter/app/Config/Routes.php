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
$routes->get('/', 'Home::index', ['as' => 'home']);

$routes->get('/planes', 'Home::planes', ['as' => 'planes']);
$routes->get('/paypal/success', 'Home::success', ['as' => 'success']);
$routes->get('/paypal/onCancel', 'Home::onCancel', ['as' => 'onCancel']);

$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::receiveData');

$routes->get('/logout', 'Logout::index', ['as' => 'logout']);

$routes->get('/register', 'Register::index', ['as' => 'register']);
$routes->post('/register', 'Register::receiveData');

$routes->get('/profile', 'Profile::index', ['as' => 'profile']);

$routes->get('/listas_visualizacion', 'Profile::listas_visualizacion', ['as' => 'listas_visualizacion']);
$routes->get('/listas_visualizacion/(:num)', 'Profile::listas_other_user/$1');

$routes->post('/listas_visualizacion/addLista', 'Playlist::agregar_lista');
$routes->post('/addToLista/(:num)', 'Playlist::agregar_RecursoLista/$1');


$routes->get('/follow/(:num)', 'Followers::follow/$1');
$routes->get('/followers/(:num)', 'Followers::followers/$1');
$routes->get('/followed_authors/(:num)', 'Followers::followed_authors/$1');

$routes->get('/categories', 'Categories::index', ['as' => 'categories']);

// Resources routes
$routes->get('/createResource', 'Resource::createResource', ['as' => 'createResource']);
$routes->post('/createResource', 'Resource::receiveData');
$routes->post('/buscar_recurso', 'Resource::buscar_recurso');
$routes->get('/buscar_tipo/(:alpha)', 'Resource::buscar_tipo/$1');
$routes->get('/buscar_id/(:num)', 'Resource::buscar_id/$1', ['as' => 'buscar_id']);
$routes->get('/buscar_todo', 'Resource::buscar_todo');
$routes->get('/buscar_autor/(:num)', 'Resource::buscar_autor/$1');
$routes->get('/buscar_recursos_autor/(:num)', 'Resource::buscar_autor/$1');
$routes->get('/buscar_recursos_categoria/(:num)', 'Resource::buscar_recursos_categoria/$1');

$routes->get('/add_favourite/(:num)', 'Playlist::add_favourite/$1');

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

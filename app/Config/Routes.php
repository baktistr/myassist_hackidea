<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//auth route
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Authentication::login');
$routes->post('/logout', 'Logout::index');
$routes->post('/register', 'Authentication::create');
$routes->get('/api/gettoken', 'Authentication::index');

//view home
$routes->get('/dashboard', 'Home::index');
$routes->get('/aset-lahan', 'Home::asetLahan');
$routes->get('/user-control', 'Home::userControl');
$routes->get('/aset-bangunan', 'Home::asetBangunan');
$routes->get('/sertifikat-lahan', 'Home::sertifikatLahan');

//crud lahan
$routes->get('/aset-lahan-create', 'LahanController::create');
$routes->get('/aset-lahan-edit-(:segment)', 'LahanController::edit/$1');
$routes->post('/aset-lahan-create', 'LahanController::store');
$routes->post('/aset-lahan-edit-(:segment)', 'LahanController::update/$1');
$routes->get('/aset-lahan-delete-(:segment)', 'LahanController::delete/$1');

//crud bangunan
$routes->get('/aset-bangunan-create', 'BangunanController::create');
$routes->get('/aset-bangunan-edit-(:segment)', 'BangunanController::edit/$1');
$routes->post('/aset-bangunan-create', 'BangunanController::store');
$routes->post('/aset-bangunan-edit-(:segment)', 'BangunanController::update/$1');
$routes->get('/aset-bangunan-delete-(:segment)', 'BangunanController::delete/$1');

// crud sertifikat
$routes->get('/sertifikat-lahan-create', 'SertifikatController::create');
$routes->get('/sertifikat-lahan-edit-(:segment)', 'SertifikatController::edit/$1');
$routes->post('/sertifikat-lahan-create', 'SertifikatController::store');
$routes->post('/sertifikat-lahan-edit-(:segment)', 'SertifikatController::update/$1');
$routes->get('/sertifikat-lahan-delete-(:segment)', 'SertifikatController::delete/$1');

//crud user
$routes->get('/user-control-create', 'UserController::create');
$routes->get('/user-control-edit-(:segment)', 'UserController::edit/$1');
$routes->post('/user-control-create', 'UserController::store');
$routes->post('/user-control-edit-(:segment)', 'UserController::update/$1');
$routes->get('/user-control-delete-(:segment)', 'UserController::delete/$1');

//routes for API
$routes->group('api', ['filter' => 'AuthAPI'], function($routes){
	//api lahan
	$routes->resource('lahan', ['controller' => 'Api\Lahan', 'except' => 'show,new,edit']);
	$routes->get('lahan/(:segment)', 'Api\Lahan::show/$1');
	$routes->get('lahan/(:segment)/sertifikat', 'Api\Lahan::show_sertifikat/$1');
	$routes->get('lahan/(:segment)/bangunan', 'Api\Lahan::show_bangunan/$1');

	//api bangunan
	$routes->resource('bangunan', ['controller' => 'Api\Bangunan', 'except' => 'new,edit']);

	//api sertifikat 
	$routes->resource('sertifikat', ['controller' => 'Api\Sertifikat', 'except' => 'new,edit']);
});



/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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

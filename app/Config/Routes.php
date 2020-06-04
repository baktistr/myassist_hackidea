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
$routes->get('/dashboard', 'Home::index');
$routes->get('/aset-lahan', 'Home::asetLahan');
$routes->get('/aset-bangunan', 'Home::asetBangunan');
$routes->get('/aset-bangunan-create', 'Home::asetBangunanCreate');
$routes->get('/sertifikat-lahan', 'Home::sertifikatLahan');
$routes->get('/sertifikat-lahan-create', 'Home::sertifikatLahanCreate');
$routes->get('/login', 'Home::login');

//crud lahan
$routes->get('/aset-lahan-create', 'LahanController::create');
$routes->post('/aset-lahan/create-post', 'LahanController::store');
$routes->get('/aset-lahan/edit/(:any)', 'LahanController::edit/$1');
$routes->post('/aset-lahan/edit/(:any)', 'LahanController::update/$1');
$routes->get('/aset-lahan/delete/(:any)', 'LahanController::delete/$1');

//crud bangunan
$routes->get('/aset-bangunan/create', 'BangunanController::create');
$routes->get('/aset-bangunan/edit/(:any)', 'BangunanController::edit/$1');
$routes->post('/aset-bangunan/create', 'BangunanController::store');
$routes->post('/aset-bangunan/edit/(:any)', 'BangunanController::update/$1');
$routes->get('/aset-bangunan/delete/(:any)', 'BangunanController::delete/$1');

// crud sertifikat
$routes->get('/sertifikat-lahan/create', 'SertifikatController::create');
$routes->get('/sertifikat-lahan/edit/(:any)', 'SertifikatController::delete/$1');
$routes->post('/sertifikat-lahan/create', 'SertifikatController::create');
$routes->post('/sertifikat-lahan/edit/(:any)', 'SertifikatController::update/$1');
$routes->get('/sertifikat-lahan/delete(:any)', 'SertifikatController::delete/$1');

//api
$routes->get('/api/lahan', 'LahanController::index');
$routes->get('/api/lahan/(:any)', 'LahanController::index/$1');
$routes->get('/api/lahan/(:any)/(:any)', 'LahanController::index/$1/$2');
$routes->post('/api/lahan', 'LahanController::api_create');
$routes->put('/api/lahan/(:any)', 'LahanController::api_update/$1');
$routes->delete('/api/lahan/(:any)', 'LahanController::api_delete/$1');

$routes->get('/api/bangunan', 'BangunanController::index');
$routes->get('/api/bangunan/(:any)', 'BangunanController::index/$1');

$routes->get('/api/sertifikat/', 'SertifikatController::index');
$routes->get('/api/sertifikat/(:any)', 'SertifikatController::index/$1');
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

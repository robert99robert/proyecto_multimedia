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
$routes->get('/', 'Home::index');

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
//$routes->get('main', 'Rams::index');
$routes->get('listarRams', 'Rams::listarRams');
$routes->get('crearRam', 'Rams::crearRam');
$routes->post('guardarRam', 'Rams::guardarRam');
//$routes->post('indexx', 'Rams::indexx');
//$routes->match(['get', 'post'], 'Rams/guardarRam', 'Rams::guardarRam');
$routes->get('editarRam/(:num)','Rams::editarRam/$1');
$routes->get('borrarRam/(:num)', 'Rams::borrarRam/$1');
$routes->post('actualizarRam', 'Rams::actualizarRam');

//$routes->get('main', 'Rams::index');
$routes->get('listarProcesadores', 'Procesadores::listarProcesadores');
$routes->get('crearProcesador', 'Procesadores::crearProcesador');
$routes->post('guardarProcesador', 'Procesadores::guardarProcesador');
$routes->get('borrarProcesador/(:num)', 'Procesadores::borrarProcesador/$1');

$routes->get('listarEquipos', 'Equipos::listarEquipos');
$routes->get('borrarEquipo/(:num)', 'Equipos::borrarEquipo/$1');
$routes->get('crearEquipo', 'Equipos::crearEquipo');
$routes->post('guardarEquipo', 'Equipos::guardarEquipo');

$routes->get('crearUsuario', 'Usuarios::crearUsuario');
$routes->get('listarUsuarios', 'Usuarios::listarUsuarios');
$routes->post('guardarUsuario', 'Usuarios::guardarUsuario');
$routes->get('ingresarUsuario', 'Usuarios::ingresarUsuario');
$routes->get('borrarUsuario/(:num)', 'Usuarios::borrarUsuario/$1');

$routes->get('/', 'CreadorSesiones::index');
$routes->get('/creacionSesion', 'CreadorSesiones::index');
$routes->get('/formularioCierreSesion', 'CerradorSesiones::index');
$routes->match(['get', 'post'], 'CreadorSesiones/almacenarSesion', 'CreadorSesiones::almacenarSesion');
$routes->match(['get', 'post'], 'IniciadorSesiones/loginAuth', 'IniciadorSesiones::loginAuth');
$routes->get('/inicioSesion', 'IniciadorSesiones::index');
$routes->get('/perfil', 'Perfil::index',['filter' => 'authGuard']);
$routes->match(['get','post'],'CerradorSesiones/cierreSesion','CerradorSesiones::cierreSesion');//la función cierreSesion() utiliza una entrada de datos, además de desplegar una vista; por tanto debe utilizar el método get y post.

$routes->get('listarJuegos', 'Juegos::listarJuegos');
$routes->get('borrarJuego/(:num)', 'Juegos::borrarJuego/$1');
$routes->get('crearJuego', 'Juegos::crearJuego');
$routes->post('guardarJuego', 'Juegos::guardarJuego');
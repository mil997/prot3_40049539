<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Página de inicio
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');

// Secciones públicas
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');

// Rutas de LOGIN
$routes->get('login', 'Login_controller::index'); 
$routes->post('enviarlogin', 'Login_controller::auth');
$routes->get('logout', 'Login_controller::logout');

// Rutas de PANEL (solo logueados)
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']);

// Rutas de REGISTRO para nuevos usuarios (público)
$routes->get('registro', 'usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');

// Rutas de ADMIN para gestionar usuarios
$routes->get('usuarios/nuevo', 'UsuariosController::nuevo');
$routes->post('usuarios/crear', 'UsuariosController::crear');
$routes->get('test-form', 'usuario_controller::formValidation');

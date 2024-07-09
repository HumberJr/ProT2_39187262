<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('importancia_valor', 'Home::importancia_valor');
$routes->get('voluntariado', 'Home::voluntariado');

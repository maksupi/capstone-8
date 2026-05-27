<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('profile', 'AuthController::profile', ['filter' => 'auth']);

// === PRODUK ROUTES ===
$routes->group('produk', function ($routes) {   // ← hapus filter auth sementara
    $routes->get('/', 'ProdukController::index');
    $routes->post('/', 'ProdukController::create');
    $routes->post('edit/(:any)', 'ProdukController::edit/$1');
    $routes->get('delete/(:any)', 'ProdukController::delete/$1');
});

// === KERANJANG ROUTES ===
$routes->group('keranjang', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'TransaksiController::index');
    $routes->post('/', 'TransaksiController::create');
    $routes->get('delete/(:any)', 'TransaksiController::delete/$1');
});
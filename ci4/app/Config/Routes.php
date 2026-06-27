<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\User;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->group('admin', ['filter' => 'auth'], function($routes) {
            $routes->get('artikel', 'Artikel::admin_index');
            $routes->add('artikel/add', 'Artikel::add');
            $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
            $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});
$routes->get('/user', [User::class, 'index']);           // Menampilkan daftar user
$routes->get('/user/login', [User::class, 'login']);     // Menampilkan form login
$routes->post('/user/login', [User::class, 'login']);    // Memproses login
$routes->get('/user/logout', [User::class, 'logout']);   // Proses logout
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
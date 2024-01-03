<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Product::index');
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/addUser', 'Auth::addUser');
$routes->post('/auth', 'Auth::auth');
$routes->post('/logout', 'Auth::logout');
$routes->get('/add-product', 'Product::addProduct');
$routes->post('/store-product', 'Product::storeProduct');
$routes->get('/edit-product/(:num)', 'Product::editProduct/$1');
$routes->post('/update-product/(:num)', 'Product::updateProduct/$1');
$routes->delete('/delete-product/(:num)', 'Product::deleteProduct/$1');

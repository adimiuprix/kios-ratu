<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/success', 'Home::success');
$routes->post('/telegram/send-message', 'Telegram::sendMessage');
$routes->post('/telegram/send-document', 'Telegram::sendDocument');

$routes->group('admin', static function ($routes) {
    $routes->get('login', 'Admin::login');
    $routes->post('login', 'Admin::authenticate');
    $routes->get('dashboard', 'Admin::dashboard');

    $routes->post('update-settings', 'Admin::updateSettings');

    $routes->post('notifikasi/tambah', 'Admin::addNotification');
    $routes->get('hapus-notifikasi/(:num)', 'Admin::deleteNotification/$1');

    $routes->get('logout', 'Admin::logout');
});

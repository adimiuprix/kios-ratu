<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/success', 'Home::success');
$routes->post('telegram/send-message', 'Telegram::sendMessage');
$routes->post('telegram/send-document', 'Telegram::sendDocument');
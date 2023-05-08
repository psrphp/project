<?php

use PsrPHP\Router\Router;
use PsrPHP\Session\Session;

require __DIR__ . '/../vendor/autoload.php';

if (version_compare(PHP_VERSION, '7.1.0', '<')) {
    header("Content-type: text/html; charset=utf-8");
    die('PHP >= 7.1');
}

error_reporting(E_ALL);

$session = new Session;
$session->set('admin_auth', 1);

$router = new Router;
$url = str_replace(pathinfo(__FILE__, PATHINFO_BASENAME), 'index.php', $router->build('/ebcms/admin/index'));
header('Location: ' . $url);

<?php
$routes = require __DIR__ . '/routes.php';

$routing = new \App\Helper\Routing\Route();

$routing->addRoute($routes);

$routing->parseUri();
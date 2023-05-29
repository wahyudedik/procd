<?php

// public/index.php

require '../core/Router.php';
require '../config/database.php';

$router = new Router();

// Routes
$router->get('/', 'HomeController@index');

// Handle request
$router->handleRequest();

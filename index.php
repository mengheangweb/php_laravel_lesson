<?php 

require "vendor/autoload.php";


$query = require ("core/bootstrap.php");

$router = new App\core\Router();

$routes = require "app/routes.php";

$router->redirect(App\core\Request::uri(), App\core\Request::method());


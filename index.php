<?php 

$query = require ("core/bootstrap.php");

$router = new Router();

$routes = require "routes.php";

require $router->redirect(Request::uri());


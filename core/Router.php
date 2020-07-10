<?php 

namespace App\core;

Class Router {

	public $routes = [
		"POST" => [],
		"GET" => []
	]; 

	public function get($uri, $controller)
	{
		return $this->routes["GET"][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		return $this->routes["POST"][$uri] = $controller;
	}

	public function define($routes)
	{
		return $this->routes = $routes;
	}

	public function redirect($uri, $method) 
	{
		if(array_key_exists($uri, $this->routes[$method]))
		{
			// return $this->routes[$method][$uri];
			$explode = explode('@',$this->routes[$method][$uri]);

			return $this->callAction($explode[0], $explode[1]);
		}


		die('No route found in the app');
	}

	public function callAction($controller, $action)
	{
		$path = "App\\controllers\\{$controller}";

		$controller = new $path;

		return (new $controller)->$action();
	}
}
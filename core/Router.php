<?php 

Class router {

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
			return $this->routes[$method][$uri];
		}


		die('No route found in the app');
	}
}
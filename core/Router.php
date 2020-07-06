<?php 

Class router {

	public $routes = []; 

	public function define($routes)
	{
		return $this->routes = $routes;
	}

	public function redirect($uri) 
	{
		if(array_key_exists($uri, $this->routes))
		{
			return $this->routes[$uri];
		}


		die('No route found in the app');
	}
}
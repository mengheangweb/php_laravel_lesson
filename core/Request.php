<?php 

class Request {

	public function uri() 
	{
		$uri = trim($_SERVER['REQUEST_URI'], '/');

		return $uri;
	}
}
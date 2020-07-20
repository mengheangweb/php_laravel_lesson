<?php 

namespace App\core;

class Request {

	public function uri() 
	{
		$uri = strtok($_SERVER["REQUEST_URI"], '?');

		$uri = trim($uri, '/');


		return $uri;
	}

	public function method() 
	{
		return $_SERVER["REQUEST_METHOD"];
	}
}
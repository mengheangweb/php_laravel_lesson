<?php 

	use App\core\App;
	use App\core\database\Connection;
	use App\core\database\QueryBuilder;

	App::bind('config', require('config.php'));

	App::bind('connection', Connection::make(App::get('config')));

	App::bind('database', new QueryBuilder(
		App::get('connection')
	));


	function odd_number($item) {
		if($item % 2 == 0 ){

			// return "Odd Number";
			return true;
		}else{
			// return "Even Number";
			return false;
		}
	}

	function format_var_dump($item) {
		echo "<pre>";

		var_dump($item);

		echo "<pre>";
	}

	function redirect($location) 
	{
		return header("location:". $location);;
	}

	function view($name, $data = [])
	{
		extract($data);

		return require "app/views/{$name}.view.php";
	}




	return $app;

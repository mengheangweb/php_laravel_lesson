<?php 

Class Connection {

	public static function make($config) {
		try {

			$con = $config['connection'];

			$pdo = new PDO(
				"mysql:host=".$con['host'].";dbname=". $con['db_name'],
				$con['username'],
				$con['password']
			);


		} catch (Exception $e) {
			// echo $e->getMessage();
			echo "Can not connect to database";die();
		}

	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		return $pdo;
	}

}



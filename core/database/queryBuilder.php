<?php 

namespace App\core\database;

use PDO;

Class QueryBuilder {

	protected $pdo;

	public function __construct($pdo) {

		$this->pdo = $pdo;

	}


	function getAll($table_name) {

		$query = $this->pdo->prepare("select * from {$table_name}");

		$query->execute();

		return $query->fetchAll(PDO::FETCH_OBJ);
	}

	public function insert()
	{
		
	}
}
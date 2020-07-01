<?php 

	
	$config = require('config.php');

	require('database/connection.php');
	require('database/queryBuilder.php');

	require('function.php');

	$query = new queryBuilder(
		connection::make($config)
	);



	return $query;

<?php 

	
	$config = require('config.php');

	require('core/Router.php');
	require('core/request.php');
	require('core/database/connection.php');
	require('core/database/queryBuilder.php');
	require('core/function.php');

	$query = new queryBuilder(
		connection::make($config)
	);



	return $query;

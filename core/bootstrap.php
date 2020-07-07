<?php 

	$app = [];
	
	$app['config'] = require('config.php');

	require('core/router.php');
	require('core/request.php');
	require('core/database/connection.php');
	require('core/database/queryBuilder.php');
	require('core/function.php');

	$app['connection'] = connection::make($app['config']);

	$app['database'] = new queryBuilder(
		$app['connection']
	);



	return $app;

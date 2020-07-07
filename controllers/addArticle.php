<?php 

$query = "insert into article (title, description, status) values (?,?,?)";

$insert = $app['connection']->prepare($query);

$input = $_POST;

$insert->execute([
	$input['title'],
	$input['description'],
	1
]);


redirect('/');
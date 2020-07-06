<?php 

$routes = [
	"" => "controllers/article.php",
	"about-us" => "controllers/about.php",
	"contact-us" => "controllers/contact.php",
	"work-with-us" => "controllers/career.php",
];


$router->define($routes);
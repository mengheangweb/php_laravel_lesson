<?php 

// $routes = [
// 	"" => "controllers/article.php",
// 	"new-article" => "controllers/newArticle.php",
// 	"add-article" => "controllers/addArticle.php",
// 	"about-us" => "controllers/about.php",
// 	"contact-us" => "controllers/contact.php",
// 	"work-with-us" => "controllers/career.php",
// ];

$router->get("","controllers/article.php");
$router->get("new-article","controllers/newArticle.php");
$router->post("add-article","controllers/addArticle.php");

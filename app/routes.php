<?php 

$router->get("","ArticleController@index");
$router->get("new-article","ArticleController@create");
$router->post("add-article","ArticleController@add");

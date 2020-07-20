<?php 

$router->get("","ArticleController@index");
$router->get("admin","ArticleController@index");
$router->get("new-article","ArticleController@create");
$router->post("add-article","ArticleController@add");
$router->get("edit-article","ArticleController@edit");
$router->post("update-article","ArticleController@update");
$router->get("delete-article","ArticleController@delete");


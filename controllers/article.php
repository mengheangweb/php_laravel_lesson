<?php 


$articles = $app['database']->getAll('article');


require "views/article.view.php";
<?php 

include('function.php');

Class Article {

	public $title;
	public $thumbnail;
	public $description;
	public $published = false;

	function __construct($title) {
		$this->title = $title;
	}


	public function published () {
		return $this->published = true;
	}

	public function is_published () {
		return $this->published;
	}

}



$articles = [ 
	new Article("This is the first hot news"),
    new Article("This is the second hot news"),
	new Article("This is the three hot news")
];

$articles[1]->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley";

$articles[2]->published();
$articles[2]->thumbnail = "article_thumbnail.jpg";


// format_var_dump($articles);

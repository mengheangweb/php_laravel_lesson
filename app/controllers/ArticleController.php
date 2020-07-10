<?php 

namespace App\controllers;

use App\core\App;

class ArticleController {

	public function index()
	{

		$articles = App::get('database')->getAll('article');

		return view('article', ['articles' => $articles]);
	}

	public function create()
	{
		return view('new-article');
	}

	public function add()
	{
		$query = "insert into article (title, description, status) values (?,?,?)";

		$insert = App::get('connection')->prepare($query);

		$input = $_POST;

		$insert->execute([
			$input['title'],
			$input['description'],
			1
		]);


		return redirect('/');
	}
}
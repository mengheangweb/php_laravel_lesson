<?php 

namespace App\controllers;

use App\core\App;
use PDO;

class ArticleController {

	public function index()
	{

		$articles = App::get('database')->getAll('article');

		return view('website/index', ['articles' => $articles]);
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

	public function edit()
	{
		$query = "select * from article where id = :id";

		$select = App::get('connection')->prepare($query);

		$select->execute(['id' => $_GET['id']]);

		$article = $select->fetch(PDO::FETCH_OBJ);

		return view('edit-article', [
			'article' => $article
		]);
	}

	public function update()
	{

		$title = $_POST['title'];
		$description = $_POST['description'];
		$id = $_GET['id'];

		$query = "update article set title = ?, description = ? where id = ?";

		$update = App::get('connection')->prepare($query);


		$update->execute([
			$title,
			$description,
			$id
		]);


		echo json_encode(['message' => 'updated_success']);
	}

	public function delete()
	{
		$query = "delete from article where id = :id";

		$select = App::get('connection')->prepare($query);

		$select->execute(['id' => $_GET['id']]);

		echo json_encode(['message' => 'success']);
	}


}
<?php namespace App\Controllers;

use App\Models\PostsModel;

class Portfolio extends BaseController
{
	public $data = [
		"site_name" => "Tu Portfolio",
		"site_logo" => "Tu-Logo",
		"site_description" => "Tu-Descripcion",
		"page" => "porfolio",
		"stylesheets" => ["portfolio"]
	];

	public function index()
	{
		$postsModel = new PostsModel();
		$postsData = [
			'posts' => $postsModel->orderBy('id', 'DESC')->paginate(6,'group1'),
			'pager' => $postsModel->pager,
		];
		echo view('templates/header', $this->data);
		echo view('pages/portfolio', $postsData);
		echo view('templates/footer');
	}
}

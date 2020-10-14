<?php namespace App\Controllers;

class Portfolio extends BaseController
{
	public $data = [
		"site_name" => "Tu Portfolio",
		"site_logo" => "Tu-Logo",
		"site_description" => "Tu-Descripcion",
		"page" => "porfolio"
	];

	public function index()
	{
		echo view('templates/header', $this->data);
		echo view('pages/portfolio');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------
}

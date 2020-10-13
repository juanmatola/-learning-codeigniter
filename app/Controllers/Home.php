<?php namespace App\Controllers;

class Home extends BaseController
{
	public $data = [
		"site_name" => "Tu Portfolio",
		"site_logo" => "Tu-Logo",
		"site_description" => "Tu-Descripcion",
	];
	
	public function index()
	{
		$send = $this->data;
		echo view('templates/header', $send);
		echo view('pages/home', $send);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------
}

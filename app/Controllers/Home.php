<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = ["nombre" => "Mateo", "apellido" => "Asegurado"];
		
		echo view('templates/header');
		echo view('pages/home', $data);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------
}

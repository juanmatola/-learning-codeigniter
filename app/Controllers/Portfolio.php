<?php namespace App\Controllers;

class Portfolio extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('pages/portfolio');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------
}

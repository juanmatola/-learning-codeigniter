<?php namespace App\Controllers;

class Admin extends BaseController
{

	public function index()
	{
		/*Si ya esta logueado, redirecciono a administración*/
		if( false ){
			return redirect()->to(base_url().'/admin/panel/');
			exit;
		}

		echo view('admin/templates/header');
		echo view('admin/login');
		echo view('admin/templates/footer');
		
	}

	public function panel(){
		if (false) {
			return redirect()->to(base_url().'/admin/');
			exit;
		}

		echo view('admin/templates/header');
		echo "<h1>BIENVENIDO A LA ADMINISTRACION<h1>";
		echo view('admin/templates/footer');
	}

}
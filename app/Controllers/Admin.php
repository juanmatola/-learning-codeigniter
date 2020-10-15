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
		/*Sino muestro login*/ 
		echo view('admin/login');
	}

	public function panel(){
		/*Si no está logeado, envio a login*/
		if (false) {
			return redirect()->to(base_url().'/admin/');
			exit;
		}
		/*Muestro panel de admin*/
		echo view('admin/templates/header');
		echo "<h1>BIENVENIDO A LA ADMINISTRACION<h1>";
		echo view('admin/templates/footer');
	}

}
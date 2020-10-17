<?php namespace App\Controllers;

use App\Models\LoginModel; //llamo al modelo que conecta con la base de usuario

class Admin extends BaseController
{

	public function __construct(){
		helper('form');
	}
	
	public function index(){
		session_start();

		/*Si ya esta logueado, redirecciono a panel*/
		if($this->sessionStatus()){
			return redirect()->to(base_url().'/admin/panel/');
			exit;
		}
		/*Sino muestro login*/ 
		echo view('admin/login');
	}

	public function panel(){
		session_start();

		/*Si está logeado muestro panel*/
		if ($this->sessionStatus()) {
			/*Muestro panel de admin*/
			echo view('admin/templates/header');
			echo "<h1>BIENVENIDO A LA ADMINISTRACION<h1>";
			echo view('admin/templates/footer');
		}else{
			/* Sino envio a login */
			return redirect()->to(base_url().'/admin/?login=false');
			exit;
		}
	}


	public function login ($user = null, $pass = null){
		$userModel = new LoginModel();
		$userData = $userModel->getUser();
		
		//FALTA RECIBIR DATOS DE FORMULARIO DESDE INDEX (FORMULARIO DE LOGIN)

		$user = 'juanmatola';
		$pass = 'Juan.314159286540';
		if($user === $userData['0']['username'] && $pass === $userData['0']['password'])
		{
			//INICIAR SESION
			session_start();
			$_SESSION['id'] = $userData['0']['id'];
			$_SESSION['username'] = $userData['0']['username'];
			$_SESSION['password'] = $userData['0']['password'];

			if ($this->sessionStatus()) {
				//Luego redirigir a panel de admin
				return redirect()->to(base_url().'/admin/panel/');
				exit;
			}else {
				//Luego redirigir a login xq algo fallo
				return redirect()->to(base_url().'/admin/?session_err');
				exit;
			}
		}else {
			//manejar error de login
			return redirect()->to(base_url().'/admin/?login=data_err');
		}
	}

	public function logout() {
		session_start();
		session_destroy();
		return redirect()->to(base_url());
	}

	// Metodo q devuelve si el usuario esta conectado o no
	public function sessionStatus() {
		$sessionStatus = session_status();
		if ($sessionStatus === 2 && !empty($_SESSION['username']) && !empty($_SESSION['password'])) {
			return true;
		}else{
			return false;
		}
	}
}
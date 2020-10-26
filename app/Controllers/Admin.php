<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PostsModel;

class Admin extends BaseController
{

	public function __construct(){
		helper('form');
	}

	public function index(){
		session_start();
		if($this->sessionStatus()){
			return redirect()->to(base_url().'/admin/panel/');
			exit;
		}
		echo view('admin/login');
	}

	public function login ($user = null, $pass = null){
		/* Recibo datos del formulario */
		//$req = \Config\Services::request();
		$req = $this->request;
		$formData = array(
			'username'=>$req->getPostGet('username'),
			'password'=>$req->getPostGet('password')
		);
		/* Obtengo usuario desde db */
		$userModel = new LoginModel();
		$userData = $userModel->getUser();
		
		if($this->userValidation($userData, $formData)){

			session_start();
			$_SESSION['id'] = $userData['0']['id'];
			$_SESSION['username'] = $userData['0']['username'];
			$_SESSION['password'] = $userData['0']['password'];

			if ($this->sessionStatus()) {
				return redirect()->to(base_url().'/admin/panel/');
				exit;
			}else {
				return redirect()->to(base_url().'/admin/?session_err');
				exit;
			}
		}else {
			return redirect()->to(base_url().'/admin/?login=data_err');
		}
	}

	public function panel(){
		session_start();

		/*Si está logeado muestro panel*/
		if ($this->sessionStatus()) {
			echo view('admin/templates/header');
			echo view('admin/index');
			echo view('admin/templates/footer');
		}else{
			return redirect()->to(base_url().'/admin/?login=false');
			exit;
		}
	}

	public function logout() {

		session_start();
		session_destroy();
		return redirect()->to(base_url());
	}

	//Sessions methods

	private function sessionStatus() {
		$sessionStatus = session_status();
		if ($sessionStatus === 2 && !empty($_SESSION['username']) && !empty($_SESSION['password'])) {
			return true;
		}else{
			return false;
		}
	}

	private function userValidation($userData = [], $formData= []) {

		$entriedUsername = $formData['username'];
		$entriedHashedPassword = hash('sha512', $formData['password']);

		if ($entriedUsername === $userData['0']['username'] && $entriedHashedPassword === $userData['0']['password']) {
			return true;
		}else{
			return false;
		}
	}

	//Posts methods

	private function newPost() {
		if (!$this->sessionStatus()) {
			return false;
		}
	}

	private function modifyPost(){
		//solo podra llamarse desde panel
		//Modifica post prexistente
	}

	private function deletePost(){
		//solo podra llamarse desde panel	
		//Eliminar post
	}
}
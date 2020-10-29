<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PostsModel;

class Admin extends BaseController
{

	private $uploadPostPath = './writable/uploads/portfolio/';
	private $allowedExtensions = array('jpg','jpeg','png');
	private	$maxSize = 3000000; // Bytes 

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

		$postsModel = new PostsModel();
		$posts = $postsModel->orderBy('id', 'DESC')->paginate(5, 'group1');

		/*Si está logeado muestro panel*/
		if ($this->sessionStatus()) {

			$userData = [
				'username' => $_SESSION['username'],
			];
			$data = [
				'posts' => $posts,
				'pager' => $postsModel->pager,
			];
			echo view('admin/templates/header', $userData);
			echo view('admin/index', $data);
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

	public function savePost() {
		session_start();
		if (!$this->sessionStatus()) {
			return redirect()->to(base_url().'/admin/?login=false');
			exit;
		}

		//Obtengo informacion a cargar
		$postsModel = new PostsModel();
		$req = $this->request;
		$img = $req->getFile('image');
		$id = $req->getGet('id');

		$postData = array(
			'title'=>$req->getPost('title'),
			'description'=>$req->getPost('description'),
		);

		if ($img->getSize() > $this->maxSize || !in_array($img->getExtension(), $this->allowedExtensions)) {
			return redirect()->to(base_url().'/admin/panel?insert=file_err');
			exit;
		}

		//si recibo id es update sino es newpost
		if (isset($id)) {
			$postData = array('id' => $id) + $postData;
			if ($img->isValid()) {
				unlink($this->uploadPostPath.$postsModel->find($id)['image']);
				$imgName = $img->getRandomName();
				$postData = $postData + array('image' => $imgName);
				$img->move($this->uploadPostPath, $imgName);
			}
		}else {
			$imgName = $img->getRandomName();
			$postData = $postData + array('image' => $imgName);
			$img->move($this->uploadPostPath, $imgName);
		}

		//Guardo datos
		$postsModel->save($postData);

		//res
		return redirect()->to(base_url().'/admin/panel?insert=success');

	}

	public function deletePost(){
		session_start();
		if (!$this->sessionStatus()) {
			return redirect()->to(base_url().'/admin/?login=false');
		}

		$req = $this->request;
		$id = $req->getGet('id');

		if (isset($id) && $id != '') {
			$postsModel = new PostsModel();

			$imgName = $postsModel->find($id)['image'];

			$imgPath = $this->uploadPostPath.$imgName;

			if (file_exists($imgPath)) {
				unlink($imgPath);
			}
			$postsModel->delete($id);
			return redirect()->to(base_url().'/admin/panel?delete=success');

		}
		
		return redirect()->to(base_url().'/admin/panel?delete=err');

	}
}
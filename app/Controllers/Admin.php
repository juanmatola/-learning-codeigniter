<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('admin/templates/header');
		echo view('admin/login');
		echo view('admin/templates/footer');
	}
}
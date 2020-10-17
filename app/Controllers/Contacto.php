<?php namespace App\Controllers;

class Contacto extends BaseController
{

    public $data = [
		"site_name" => "Tu Portfolio",
		"site_logo" => "Tu-Logo",
        "site_description" => "Tu-Descripcion",
        "page" => "contacto",
        "stylesheets" => ["contacto"]
    ];
    
	public function index()
	{
        echo view('templates/header', $this->data);
        echo view('pages/contact');
        echo view('templates/footer');
    }
}

<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    /* Le digo al modelo sobre que tabla hacer las consultas y otras configuraciones sobre el modelo */
    protected $table = 'is_user';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    //protected $allowedFields = ['username', 'password']; declaro sobre que dato de tabla voy a poder modificar desde el modelo

    /* Metodo para traer o todas los datos o solo los pedidos por el $slug */
    public function getUser()
    {
        return $this->findAll();
    }
}
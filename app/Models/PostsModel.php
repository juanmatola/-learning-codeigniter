<?php namespace App\Models;

use CodeIgniter\Model;

class PostsModels extends Model
{
    /* Le digo al modelo sobre que tabla hacer las consultas y otras configuraciones sobre el modelo */
    protected $table = 'is_post';
    protected $primaryKey = 'id';
    protected $returnType =  'array';
    protected $allowedFields = ['title','description','image'];

    /* Metodo para traer todos los datos de usuario*/
    public function getPosts()
    {
        return $this->findAll();
    }
}
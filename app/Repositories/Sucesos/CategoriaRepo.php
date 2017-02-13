<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Categoria;
use Sucesos\Repositories\BaseRepo;

class CategoriaRepo extends BaseRepo{

    public function getModel()
    {
        return new Categoria();
    }

    //LISTAR CATEGORIAS PUBLICADAS (TITULO - ID)
    public function listPub()
    {
        return $this->getModel()->where('publicar', 1)->lists('titulo', 'id')->toArray();
    }

    //LISTAR CATEGORIAS PUBLICADAS
    public function listBlog()
    {
        return $this->getModel()->where('publicar', 1)->get();
    }
}
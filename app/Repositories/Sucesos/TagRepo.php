<?php namespace Sucesos\Repositories\Sucesos;

use Sucesos\Entities\Sucesos\Tag;
use Sucesos\Repositories\BaseRepo;

class TagRepo extends BaseRepo{

    public function getModel()
    {
        return new Tag();
    }

    //LISTAR CATEGORIAS PUBLICADAS
    public function listPub()
    {
        return $this->getModel()->where('publicar', 1)->lists('titulo', 'id')->toArray();
    }
}
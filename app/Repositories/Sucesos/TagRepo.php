<?php namespace Sucesos\Repositories\Sucesos;

use Sucesos\Entities\Sucesos\Tag;
use Sucesos\Repositories\BaseRepo;

class TagRepo extends BaseRepo{

    public function getModel()
    {
        return new Tag();
    }

    //LISTAR CATEGORIAS PUBLICADAS (TITULO - ID)
    public function listPub()
    {
        return $this->getModel()->where('publicar', 1)->pluck('titulo', 'id')->toArray();
    }

    //LISTAR TAGS EN FRONTEND
    public function listTags()
    {
        return $this->getModel()->where('publicar', 1)->orderBy('titulo','asc')->get();
    }
}
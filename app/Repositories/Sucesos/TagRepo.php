<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Tag;
use Sucesos\Repositories\BaseRepo;

class TagRepo extends BaseRepo{

    public function getModel()
    {
        return new Tag();
    }

    public function findAndPaginate(Request $request)
    {
        return $this->getModel()->titulo($request->input('titulo'))
                                ->publicar($request->input('publicar'))
                                ->paginate();
    }

    //LISTAR CATEGORIAS PUBLICADAS (TITULO - ID)
    public function listPub()
    {
        return $this->getModel()->where('publicar', 1)->pluck('titulo', 'id')->toArray();
    }

    //LISTAR TAGS EN FRONTEND
    public function listTags()
    {
        return $this->getModel()->where('publicar', 1)->orderBy('titulo','asc')->paginate(20);
    }
}
<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Columnista;
use Sucesos\Repositories\BaseRepo;

class ColumnistaRepo extends BaseRepo{

    public function getModel()
    {
        return new Columnista();
    }

    //LISTAR Y BUSCAR COLUMNISTAS
    public function listarColumnistasAdmin(Request $request)
    {
        return $this->getModel()->nombreCompleto($request->input('titulo'))
                                ->publicar($request->input('publicar'))
                                ->orderBy('nombre', 'asc')
                                ->paginate();
    }

    //LISTAR CATEGORIAS PUBLICADAS (TITULO - ID)
    public function listPub()
    {
        return $this->getModel()->where('publicar', 1)->pluck('titulo', 'id')->toArray();
    }

    //LISTAR CATEGORIAS PUBLICADAS
    public function listBlog()
    {
        return $this->getModel()->where('publicar', 1)->get();
    }
}
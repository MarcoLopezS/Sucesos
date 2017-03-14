<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Columna;
use Sucesos\Repositories\BaseRepo;

class ColumnaRepo extends BaseRepo{

    public function getModel()
    {
        return new Columna();
    }

    //COLUMNAS HOME
    public function listaColumnasHome()
    {
        return $this->getModel()->where('publicar', 1)
                                ->where('destacado', 1)
                                ->where('published_at','<=',fechaActual())
                                ->orderBy('published_at', 'desc')
                                ->paginate(12);
    }

    //NOTICIAS COLUMNISTA
    public function listaNoticiasColumnista($columnista)
    {
        return $this->getModel()
                    ->where('columnista_id', $columnista)
                    ->where('publicar', 1)
                    ->orderBy('published_at', 'desc')
                    ->paginate(6);
    }

    public function listaColumnasRelacionadas($noticia)
    {
        return $this->getModel()
                    ->where('columnista_id', $noticia->columnista_id)
                    ->where('publicar', 1)
                    ->where('id', '<>', $noticia->id)
                    ->inRandomOrder()
                    ->paginate(2);
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate($columnista, Request $request)
    {
        return $this->getModel()
                    ->where('columnista_id', $columnista)
                    ->titulo($request->get('titulo'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }

}
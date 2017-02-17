<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Sucesos\Noticia;

class NoticiaRepo extends BaseRepo{

    public function getModel()
    {
        return new Noticia();
    }

    //NOTICIAS CATEGORIA
    public function listaNoticiasCategoria($categoria)
    {
        return $this->getModel()
                    ->where('categoria_id', $categoria)
                    ->where('publicar', 1)
                    ->orderBy('published_at', 'desc')
                    ->paginate(4);
    }

    //NOTICIAS DESTACADAS EN HOME
    public function listaNoticiasDestacada()
    {
        return $this->getModel()
                    ->where('published_at','<=',fechaActual())
                    ->where('publicar', 1)
                    ->where('tipo', 'destacado')
                    ->orderBy('published_at', 'desc')
                    ->paginate(3);
    }

    //NOTICIAS NORMAL EN HOME
    public function listaNoticiasNormal()
    {
        return $this->getModel()
                    ->where('published_at','<=',fechaActual())
                    ->where('publicar', 1)
                    ->where('tipo', 'normal')
                    ->orderBy('published_at', 'desc')
                    ->paginate(6);
    }

    public function listaNoticiasRelacionadas($tags)
    {
        $tag = $tags->first()->id;

        return $this->getModel()->where('');
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->sCategoria($request->get('categoria'))
                    ->sTipo($request->get('tipo'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }

}
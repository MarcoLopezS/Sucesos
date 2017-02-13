<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Sucesos\Noticia;

class NoticiaRepo extends BaseRepo{

    public function getModel()
    {
        return new Noticia();
    }

    //PAGINAS NOTICIAS EN HOME
    public function listaNoticias()
    {
        return $this->getModel()
                    ->where('published_at','<=',fechaActual())
                    ->where('publicar', 1)
                    ->orderBy('published_at', 'desc')
                    ->paginate(4);
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->sCategoria($request->get('categoria'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }

}
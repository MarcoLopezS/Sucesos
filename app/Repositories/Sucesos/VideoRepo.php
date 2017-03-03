<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Repositories\BaseRepo;
use Sucesos\Entities\Sucesos\Video;

class VideoRepo extends BaseRepo{

    public function getModel()
    {
        return new Video();
    }

    //NOTICIAS DESTACADAS EN HOME
    public function listaVideosHome()
    {
        return $this->getModel()
                    ->where('published_at','<=',fechaActual())
                    ->where('publicar', 1)
                    ->orderBy('published_at', 'desc')
                    ->paginate(10);
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->publicar($request->get('publicar'))
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }

}
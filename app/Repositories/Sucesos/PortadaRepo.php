<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Portada;
use Sucesos\Repositories\BaseRepo;

class PortadaRepo extends BaseRepo{

    public function getModel()
    {
        return new Portada();
    }

    //LISTAR PORTADAS
    public function listaPortadaHome()
    {
        return $this->getModel()
                    ->orderBy('published_at', 'desc')
                    ->first();
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate()
    {
        return $this->getModel()
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }
}
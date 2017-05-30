<?php namespace Sucesos\Repositories\Sucesos;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Portada;
use Sucesos\Repositories\BaseRepo;

class PortadaRepo extends BaseRepo{

    public function getModel()
    {
        return new Portada();
    }

    //LISTAR PORTADA
    public function listaPortadaHome()
    {
        return $this->getModel()
                    ->orderBy('published_at', 'desc')
                    ->first();
    }

    //PORTADA SELECCIONADA
    public function listaPortadaSelect($fecha)
    {
        return $this->getModel()
                    ->whereDate('published_at', '=', $fecha)
                    ->first();
    }

    //LISTAR EDICIONES ANTERIORES
    public function listaEdicionAnterior()
    {
        return $this->getModel()
                    ->where('publicar', 1)
                    ->where('embed', '<>', '')
                    ->orderBy('published_at', 'desc')
                    ->get();
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate()
    {
        return $this->getModel()
                    ->orderBy('published_at', 'desc')
                    ->paginate();
    }
}
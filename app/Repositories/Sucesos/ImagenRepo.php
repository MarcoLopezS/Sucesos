<?php namespace Sucesos\Repositories\Sucesos;

use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Sucesos\Imagen;

class ImagenRepo extends BaseRepo{

    public function getModel()
    {
        return new Imagen();
    }

}
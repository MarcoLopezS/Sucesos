<?php namespace Sucesos\Repositories\Sucesos;

use Sucesos\Repositories\BaseRepo;
use Sucesos\Entities\Sucesos\Suscripcion;

class SuscripcionRepo extends BaseRepo{

    public function getModel()
    {
        return new Suscripcion();
    }

}
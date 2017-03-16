<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\BaseEntity;

class Suscripcion extends BaseEntity {

	protected $fillable = ['nombres','apellidos','dni','telefono','email','direccion'];
    protected $table = 'suscripcion';

}
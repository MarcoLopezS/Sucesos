<?php namespace Sucesos\Entities\Sucesos;

use Sucesos\Entities\BaseEntity;

class Suscripcion extends BaseEntity {

	protected $fillable = ['email'];
    protected $table = 'suscripcion';

}
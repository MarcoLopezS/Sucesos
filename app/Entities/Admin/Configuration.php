<?php namespace Sucesos\Entities\Admin;

use Sucesos\Entities\BaseEntity;

class Configuration extends BaseEntity {

    protected $fillable = ['titulo','dominio','descripcion','keywords','email'];

}
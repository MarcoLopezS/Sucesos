<?php namespace Sucesos\Entities\Admin;

use Sucesos\Entities\BaseEntity;

class Contacto extends BaseEntity{

    protected $fillable = ['nombre','empresa','email','telefono','mensaje'];
    protected $table = 'contacto';

}
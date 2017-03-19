<?php namespace Sucesos\Repositories;

use Sucesos\Entities\User;

class UserRepo extends BaseRepo{

    public function getModel()
    {
        return new User;
    }

    //BUSQUEDA DE REGISTROS
    public function findUsersAndPaginate()
    {
        return $this->getModel()
                    ->orderBy('id', 'asc')
                    ->paginate();
	}

	//LISTAR USUARIOS
    public function listAutores()
    {
        return $this->getModel()->get()->pluck('nombre_completo','id')->toArray();
    }

}
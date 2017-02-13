<?php namespace Sucesos\Repositories\Admin;

use Illuminate\Http\Request;

use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Admin\SocialMedia;

class SocialMediaRepo extends BaseRepo{

    public function getModel()
    {
        return new SocialMedia;
    }

    //BUSQUEDA DE REGISTROS
    public function findAndPaginate(Request $request)
    {
        return $this->getModel()
                    ->titulo($request->get('titulo'))
                    ->paginate();
    }
}
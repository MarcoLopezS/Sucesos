<?php namespace Sucesos\Repositories\Admin;

use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Admin\Configuration;

class ConfigurationRepo extends BaseRepo{

    public function getModel()
    {
        return new Configuration;
    }

}
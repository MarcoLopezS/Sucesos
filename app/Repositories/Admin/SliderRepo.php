<?php namespace Sucesos\Repositories\Admin;

use Sucesos\Repositories\BaseRepo;

use Sucesos\Entities\Admin\Slider;

class SliderRepo extends BaseRepo{

    public function getModel()
    {
        return new Slider;
    }

}
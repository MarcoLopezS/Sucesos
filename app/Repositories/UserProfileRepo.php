<?php namespace Sucesos\Repositories;

use Sucesos\Entities\UserProfile;

class UserProfileRepo extends BaseRepo{

    public function getModel()
    {
        return new UserProfile;
    }

}
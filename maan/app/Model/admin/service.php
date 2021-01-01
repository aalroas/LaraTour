<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //

    public function service_images()
    {
        return $this->hasMany('App\Model\admin\service_images');
    }





    public function getRouteKeyName()
    {
        return  'slug';
    }
}

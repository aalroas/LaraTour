<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{

    public function room_images()
    {
        return $this->hasMany('App\Model\admin\room_images');
    }

    // public function plan_images()
    // {
    //     return $this->hasMany('App\Model\admin\plan_images');
    // }

    public function categories()
    {
        return  $this->belongsToMany('App\Model\admin\room_cats', 'room_cat')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return  'slug';
    }



}

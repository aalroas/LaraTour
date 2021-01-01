<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{

    public function tour_images()
    {
        return $this->hasMany('App\Model\admin\tour_images');
    }

    // public function plan_images()
    // {
    //     return $this->hasMany('App\Model\admin\plan_images');
    // }

    // public function categories()
    // {
    //     return  $this->belongsToMany('App\Model\admin\tour_cats', 'tour_cat')->withTimestamps();
    // }

    public function getRouteKeyName()
    {
        return  'slug';
    }

}

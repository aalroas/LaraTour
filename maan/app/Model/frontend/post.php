<?php

namespace App\Model\frontend;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    public function post_images()
    {
        return $this->hasMany('App\Model\frontend\post_images');
    }



    public function categories()
    {
       return  $this->belongsToMany('App\Model\frontend\category','category_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
       return  'slug';
    }
}

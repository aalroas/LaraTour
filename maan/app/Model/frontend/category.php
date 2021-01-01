<?php

namespace App\Model\frontend;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
      return  $this->belongsToMany('App\Model\frontend\post','category_posts')->paginate(5);
      }
      public function getRouteKeyName()
      {
        return 'slug';
      }
    }

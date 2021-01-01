<?php

namespace App\Model\frontend;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
  public function posts()
  {
     return $this->belongsToMany('App\Model\frontend\post','post_tags')->paginate(5);
  }
  public function getRouteKeyName()
  {
    return 'slug';
  }

}

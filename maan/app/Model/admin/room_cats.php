<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class room_cats extends Model
{
    public function room()
    {
      return  $this->belongsToMany('App\Model\admin\room', 'room_cat')->paginate(5);
      }
      public function getRouteKeyName()
      {
        return 'slug';
      }
    }

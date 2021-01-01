<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;



class admin extends Authenticatable
{
  
      use Notifiable;

      public function roles()
      {
          return $this->belongsToMany('App\Model\admin\role')->withTimestamps(); // to share roles in  create edite admin pages
      }


      public function getNameAttribute($value)
        {
            return ucfirst($value);
        }

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name', 'email', 'password','status','phone',
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [
          'password', 'remember_token',
      ];

}

<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class plan_images extends Model
{

    protected $fillable = ['room_id', 'plan_image_path'];
    public function room()
    {
        return $this->belongsTo('App\Model\admin\room');
    }
}

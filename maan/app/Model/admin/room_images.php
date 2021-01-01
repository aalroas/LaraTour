<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class room_images extends Model
{

    protected $fillable = ['room_id', 'room_image_path'];
    public function room()
    {
        return $this->belongsTo('App\Model\admin\room');
    }


}

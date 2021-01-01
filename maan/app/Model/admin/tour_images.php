<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class tour_images extends Model
{

    protected $fillable = ['tour_id', 'tour_image_path'];
    public function tour()
    {
        return $this->belongsTo('App\Model\admin\tour');
    }


}

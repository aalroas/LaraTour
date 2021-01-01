<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class service_images extends Model
{

    protected $fillable = ['service_id', 'service_image_path'];
    public function service()
    {
        return $this->belongsTo('App\Model\admin\service');
    }


}

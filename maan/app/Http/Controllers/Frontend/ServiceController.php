<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\service_images;



class ServiceController extends Controller
{

    public function service(service $service)
    {
        $services = service::orderBy('created_at', 'DESC')->get();

        return view('frontend.services.service-single', compact('service', 'services'));
    }


    public function service_images(service_images $service_images)
    {
        $service = $service_images->service();
        return view('frontend.services.service-single', compact('service'));
    }




}


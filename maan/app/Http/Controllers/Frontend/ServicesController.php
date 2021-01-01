<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\service;
use Illuminate\Http\Request;
use App\Model\admin\service_images;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
           $services = service::all();
           return view('frontend.services.index',compact('services'));
    }


    public function service_images(service_images $service_images)
    {
        $services = $service_images->services();
        return view('frontend.services.index', compact('services'));
    }



    public function service($id)
    {
        $services = service::all();
        $service_images =  service_images::where("service_id", $id)->get();
        $service = service::where("id", $id)->first();
        return view('frontend.services.service-single', compact('service', 'service_images', 'services'));
    }
}



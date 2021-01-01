<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\about;
use App\Model\admin\team;
use App\Model\admin\testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {

           $about = about::find(1);
           $teams = team::all();
           $testimonials = testimonial::all();
           return view('frontend.about',compact('about', 'teams', 'testimonials'));

    }

}



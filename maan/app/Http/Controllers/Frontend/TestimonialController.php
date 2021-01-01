<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{



    public function index()
     {
           $testimonials = testimonial::all();
           return view('frontend.testimonials',compact('testimonials'));
    }

}



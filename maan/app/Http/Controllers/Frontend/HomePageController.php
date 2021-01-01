<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\slider;
use App\Model\admin\tour;
use App\Model\admin\room;
use App\Model\frontend\category;
use App\Model\frontend\post;


use App\Model\admin\testimonial;

use App\Model\admin\tour_images;



class HomePageController extends Controller
{
   public function index( )
  {
        $tours = tour::where('featured', 1)->get();

        $rooms = room::orderBy('created_at', 'DESC')->paginate(6);

        $testimonials = testimonial::orderBy('created_at', 'DESC')->paginate(4);


        $sliders = slider::where('status', 1)->get();


        $categories = category::all();

        $posts = post::orderBy('created_at', 'DESC')->paginate(10);



        return view('frontend.index', compact('sliders', 'tours', 'rooms', 'testimonials', 'categories', 'posts'));
  }













    public function category(category $category)
    {
        $rooms = $category->rooms();
        return view('frontend.index', compact('rooms'));
    }





    // public function tour_images(tour_images $tour_images)
    // {
    //     $tours = $tour_images->rooms();
    //     return view('frontend.index', compact('tours'));
    // }





}

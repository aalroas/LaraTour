<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\tour_images;



class ToursController extends Controller
{

    public function index()
    {


        $tours = tour::orderBy('created_at', 'DESC')->get();


        return view('frontend.tours.index', compact('tours'));
    }



    public function tour_images(tour_images $tour_images)
    {
        $tours = $tour_images->tours();
        return view('frontend.tours.index', compact('tours'));
    }






    public function category(category $category)
    {
        $tours = $category->tours();
        return view('frontend.tours.index', compact('tours'));
    }


    public function tour($id)
    {

        $tours = tour::all();
        $tour_images =  tour_images::where("tour_id", $id)->get();

        $tour = tour::where("id",$id)->first();
        return view('frontend.tours.tour-single', compact('tour', 'tour_images', 'tours'));
    }








}


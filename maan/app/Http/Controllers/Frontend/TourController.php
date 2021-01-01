<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\tour_images;



class TourController extends Controller
{





    public function tour(tour $tour)
    {
        $tours = tour::orderBy('created_at', 'DESC')->get();

        return view('frontend.tours.tour-single', compact('tour', 'tours'));
    }


    public function tour_images(tour_images $tour_images)
    {
        $tour = $tour_images->tour();
        return view('frontend.tours.tour-single', compact('tour'));
    }




}


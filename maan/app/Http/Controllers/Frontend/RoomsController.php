<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\room_images;
use App\Model\admin\plan_images;
use App\Model\admin\room_cat;
class RoomsController extends Controller
{

    public function index()
    {


        $rooms = room::orderBy('created_at', 'DESC')->get();


        return view('frontend.rooms.index', compact('rooms'));
    }



    public function room_images(room_images $room_images)
    {
        $rooms = $room_images->rooms();
        return view('frontend.rooms.index', compact('rooms'));
    }






    public function category(category $category)
    {
        $rooms = $category->rooms();
        return view('frontend.rooms.index', compact('rooms'));
    }





}


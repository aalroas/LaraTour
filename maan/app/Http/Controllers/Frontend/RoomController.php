<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\room_images;

use App\Model\admin\room_cat;

class RoomController extends Controller
{


    public function room(room $room)
    {

        $categories = room_cat::all();
        return view('frontend.rooms.room-single', compact('room', 'categories'));
    }


    public function room_images(room_images $room_images)
    {
        $room = $room_images->room();
        return view('frontend.rooms.room-single', compact('room'));
    }






    public function category(category $category)
    {
        $room = $category->room();
        return view('frontend.rooms.room-single', compact('room'));
    }
}

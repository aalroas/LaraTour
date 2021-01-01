<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\tour;
use App\Model\admin\testimonial;
use App\Model\admin\room;
use App\Model\frontend\post;
use Illuminate\Http\Request;
use App\Model\admin\admin;
use App\Model\admin\contact_form;
use App\Model\admin\service;
use App\Model\admin\slider;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  public function index( )
 {


        $tours = tour::count();
        $testimonials = testimonial::count();
        $rooms = room::count();
        $posts = post::count();


        $sliders = slider::count();
        $users = admin::count();
        $contact_forms = contact_form::count();
        $services = service::count();

     return view('admin.dashboard',compact('tours', 'testimonials', 'rooms', 'sliders', 'users', 'contact_forms', 'posts', 'services'));
 }
}

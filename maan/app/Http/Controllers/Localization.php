<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// here for lang
use Illuminate\Support\Facades\Input;
class Localization extends Controller
{

    //
    public function index()
    {
        if (!\Session::has('locale')) {
            \Session::put('locale', Input::get('locale'));
        } else {
            \Session::put('locale', Input::get('locale'));
        }
        return redirect()->back();
    }

    public function change($lang)
    {
        \Session::put('locale', $lang);
         return redirect()->back();
      //  return redirect()->route("admin.dashboard");
    }

}

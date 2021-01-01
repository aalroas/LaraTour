<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\contact_form;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class contact_formsController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
           $contacts = contact_form::orderBy('created_at', 'DESC')->get();
           return view('admin.contact.list',compact('contacts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
           $contact = contact_form::find($id);
           return view('admin.contact.show',compact('contact'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      contact_form::where('id',$id)->delete();
      return redirect()->back()->with('message','Contact Deleted Sucsessfully');
    }
}

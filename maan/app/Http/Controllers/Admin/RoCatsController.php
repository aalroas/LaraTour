<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\room_cats;

class RoCatsController extends Controller
{  /**
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

        $porcatsx = room_cats::all();

        return view('admin.roocats.list',compact('porcatsx'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.roocats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name_ar'=>'required',
        'slug'=>'required',

      ]);
      $category = new room_cats;
      $category->name_ar = $request->name_ar;
    $category->name_tr = $request->name_tr;
        $category->name_en = $request->name_en;
      $category->slug = $request->slug;
      $category->save();
     return redirect(route('roocats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roocats = room_cats::where('id',$id)->first();
       return view('admin.roocats.edit',compact('roocats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
            'name_ar' => 'required',
            'slug' => 'required',

      ]);
      $category = room_cats::find($id);
        $category->name_ar = $request->name_ar;
        $category->name_tr = $request->name_tr;
        $category->name_en = $request->name_en;
      $category->slug = $request->slug;
      $category->save();
     return redirect(route('roocats.index'));
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        room_cats::where('id',$id)->delete();
      return redirect()->back();
    }
}

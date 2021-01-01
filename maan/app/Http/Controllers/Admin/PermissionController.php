<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\permission;

class PermissionController extends Controller
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
       $permissions = permission::orderByDesc('for')->get(); // to oreder by
       // $permissions = permission::all();
       return view('admin.permission.show',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.permission.create');
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
            'name' =>'required|max:50|unique:roles',
            'for' =>'required',
        ]);
        $permission = new permission;
        $permission->name = $request->name;
        $permission->for = $request->for;
        $permission->save();
       return redirect(route('permission.index'))->with('message','Permission Stored Sucsessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {


       $permission = permission::where('id',$permission->id)->first();
       return view('admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
      $this->validate($request,[
        'name'=>'required',
        'for'=>'required',

      ]);
      $permission = permission::find($permission->id);
      $permission->name = $request->name;
      $permission->for = $request->for;
      $permission->save();
     return redirect(route('permission.index'))->with('message','Permission Updated Sucsessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
      permission::where('id',$permission->id)->delete();
      return redirect()->back()->with('message','Permission Deleted Sucsessfully');
    }
}

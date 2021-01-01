<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use Hash;

// updatedx

class UserController extends Controller
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
           $users = admin::all();
           return view('admin.user.show',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return  $request->all();
        $this->validate($request,[
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
          'phone' => ['required', 'numeric'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
          // 'image'=> ['required'],
      ]);

        // need development
        $user = new admin;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->move('uploads/users', $ImageName);
            $user->image = $ImageName;
        } else{
            $user->image = "noimage.png";
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request['password'] = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();



      return redirect(route('user.index'))->with('message', trans('backend.created_successfully'));
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
      $user = admin::find($id);

      return view('admin.user.edit',compact('user'));
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
          'name' => 'required|string|max:255',
          'email' => ['required', 'string', 'email', 'max:255'],
          'phone' => 'required|numeric',
        //   'password' => ['required', 'string', 'min:6', 'confirmed'],
          // 'image'=>'required',
      ]);

        $user = admin::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;
        $user->phone = $request->phone;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->move('uploads/users', $ImageName);
            $user->image = $ImageName;
        }


      $user->save();
      // except image cus we handle it above

      return redirect(route('user.index'))->with('message', trans('backend.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      admin::where('id',$id)->delete();
      return redirect()->back()->with('message','User Deleted Sucsessfully');
    }
}

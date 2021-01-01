<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class  TeamController extends Controller
{


    private $uploadPath = "uploads/teams/";


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
           $teams = team::all();
           return view('admin.team.show',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('admin.team.create');
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
          'name_ar' => ['required', 'string', 'max:255'],

          // 'image'=> ['required'],
      ]);



         // Start of Upload Files
      $formFileName = "image";
      $fileFinalName = "";
      if ($request->$formFileName != "") {
          $fileFinalName = time() . rand(1111,
                  9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
          $path = $this->getUploadPath();
          $request->file($formFileName)->move($path, $fileFinalName);
      }



      // End of Upload Files

        $team = new team;



        $team->image = $fileFinalName;

        $team->name_ar = $request->name_ar;
        $team->name_en = $request->name_en;
        $team->name_tr = $request->name_tr;


        $team->position_ar = $request->position_ar;
        $team->position_en = $request->position_en;
        $team->position_tr = $request->position_tr;



        $team->text_ar = $request->text_ar;
        $team->text_en = $request->text_en;
        $team->text_tr = $request->text_tr;

        $team->e_mail = $request->e_mail;

        $team->instagram = $request->instagram;

        $team->facebook = $request->facebook;

        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;


        $team->save();



        return redirect(route('team.index'))->with('message', trans('backend.created_successfully'));



    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $team = team::find($id);

      return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'name_ar' => ['required', 'string', 'max:255'],
          // 'image'=>'required',
      ]);

       // Start of Upload Files
         $formFileName = "image";
         $fileFinalName = "";
         if ($request->$formFileName != "") {
             $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
             $path = $this->getUploadPath();
             $request->file($formFileName)->move($path, $fileFinalName);
             $sliderx = team::find($id);  // here to store image alone
             $sliderx->image = $fileFinalName; // here there is  a bug when update profile image
             $sliderx->save();
         }



         // End of Upload Files
        $team = team::where('id',$id)->update($request->except('_token','_method','image'));
      // except image cus we handle it aboves


        return redirect(route('team.index'))->with('message', trans('backend.updated_successfully'));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      team::where('id',$id)->delete();


      return redirect()->back()->with('message', trans('backend.deleted_successfully'));
    }
}



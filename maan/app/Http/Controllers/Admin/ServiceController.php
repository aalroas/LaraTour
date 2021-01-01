<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Model\admin\service;
use Illuminate\Http\Request;
use App\Model\admin\service_images;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{


    private $uploadPath = "uploads/services/";


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
           $services = service::all();
           return view('admin.service.show',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('admin.service.create');
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
          'title_ar' => ['required', 'string', 'max:255'],

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

        $service = new service;



        $service->image = $fileFinalName;

        $service->title_ar = $request->title_ar;
        $service->title_en = $request->title_en;
        $service->title_tr = $request->title_tr;


        $service->text_ar = $request->text_ar;
        $service->text_en = $request->text_en;
        $service->text_tr = $request->text_tr;

        $service->price = $request->price;

        $service->slug =  Str::slug($request->title_en);


        $service->save();

        // Start of Upload Files
        if ($request->hasFile('service_images')) {
            $all_images = $request->file('service_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $service_images = new service_images;
                $service_images->service_id = $service->id;
                $service_images->service_image_path = $image_name;
                $service_images->save();
            }
        }


        return redirect(route('service.index'))->with('message', trans('backend.created_successfully'));



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
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $service = service::find($id);

      return view('admin.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'title_ar' => ['required', 'string', 'max:255'],
          // 'image'=>'required',
      ]);

       // Start of Upload Files
         $formFileName = "image";
         $fileFinalName = "";
         if ($request->$formFileName != "") {
             $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
             $path = $this->getUploadPath();
             $request->file($formFileName)->move($path, $fileFinalName);
            $sliderx = service::find($id);  // here to store image alone
            $sliderx->image = $fileFinalName; // here there is  a bug when update profile image
            $sliderx->save();
         }


        // Start of Upload Files
        if ($request->hasFile('service_images')) {
            $all_images = $request->file('service_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $service_images = new service_images;
                $service_images->service_id = $id;
                $service_images->service_image_path = $image_name;
                $service_images->save();
            }
        }


        $service = service::find($id);  // here to store image alone
        $service->slug =  Str::slug($request->title_en);
        $service->save();




         // End of Upload Files
        $service = service::where('id',$id)->update($request->except('_token','_method','image','slug', 'service_images'));
      // except image cus we handle it aboves


        return redirect(route('service.index'))->with('message', trans('backend.updated_successfully'));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      service::where('id',$id)->delete();


      return redirect()->back()->with('message', trans('backend.deleted_successfully'));

    }


    public function serviceimages($id)
    {
        //For Deleting
        $images = new service_images;
        $images = service_images::find($id);
        // unlink($this->getUploadPath() . $images->service_image_path);
        $images->delete($id);

        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }

}



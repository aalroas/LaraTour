<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class SliderController extends Controller
{


    private $uploadPath = "uploads/sliders/";


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
           $sliders = slider::all();
           return view('admin.slider.show',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('admin.slider.create');
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

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('image')->move('uploads/sliders', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
      // End of Upload Files

        $slider = new slider;

        $slider->image = $fileNameToStore;

        $slider->title_ar = $request->title_ar;
        $slider->title_en = $request->title_en;
        $slider->title_tr = $request->title_tr;

        $slider->text_ar = $request->text_ar;
        $slider->text_en = $request->text_en;
        $slider->text_tr = $request->text_tr;



        $slider->url = $request->url;

        $slider->status = $request->status;


        $slider->save();



      return redirect(route('slider.index'))->with('message',trans('backend.created_successfully'));

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
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = slider::find($id);

        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title_ar' => ['required', 'string', 'max:255'],

        ]);


        // Start of Upload Files
        // file upload
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

              $path = $request->file('image')->move('uploads/sliders', $fileNameToStore);
            $sliderar = slider::find($id);  // here to store image alone
            $sliderar->image = $fileNameToStore;
            $sliderar->save();
        }



        // End of Upload Files
        $slider = slider::where('id', $id)->update($request->except('_token', '_method', 'image'));
        // except image cus we handle it aboves


        return redirect(route('slider.index'))->with('message', trans('backend.updated_successfully'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      slider::where('id',$id)->delete();
      return redirect()->back()->with('message','slider Deleted Sucsessfully');
    }
}

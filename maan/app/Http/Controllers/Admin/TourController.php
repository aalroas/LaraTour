<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\tour_images;
use Illuminate\Support\Str;


class TourController extends Controller
{


    private $uploadPath = "uploads/tour/";


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


        $tours = tour::all();
        return view('admin.tour.show', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.tour.create');
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
        $this->validate($request, [
            'title_ar' => ['required', 'string', 'max:255'],

            // 'image'=> ['required'],
        ]);


        // End of Upload Files

        $tour = new tour;

        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/tour', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $tour->f_image = $fileNameToStore;

        $tour->title_ar = $request->title_ar;
        $tour->title_en = $request->title_en;
        $tour->title_tr = $request->title_tr;

        $tour->text_ar = $request->text_ar;
        $tour->text_en = $request->text_en;
        $tour->text_tr = $request->text_tr;
        $tour->price = $request->price;

        $tour->slug =  Str::slug($request->title_en);



        $tour->featured = $request->featured;







        $tour->save();


        // Start of Upload Files
        if ($request->hasFile('tour_images')) {
            $all_images = $request->file('tour_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $tour_images = new tour_images;
                $tour_images->tour_id = $tour->id;
                $tour_images->tour_image_path = $image_name;
                $tour_images->save();
            }
        }



        return redirect(route('tour.index'))->with('message', trans('backend.created_successfully'));
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
     * @param  \App\Admin\Model\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tour = tour::find($id);

        return view('admin.tour.edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title_ar' => ['required', 'string', 'max:255'],

        ]);


        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('uploads/tour', $fileNameToStore);
            $tourx = tour::find($id);  // here to store image alone
            $tourx->f_image = $fileNameToStore;
            $tourx->save();
        }


        // Start of Upload Files
        if ($request->hasFile('tour_images')) {
            $all_images = $request->file('tour_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $tour_images = new tour_images;
                $tour_images->tour_id = $id;
                $tour_images->tour_image_path = $image_name;
                $tour_images->save();
            }
        }


        $tourxx = tour::find($id);  // here to store image alone
        $tourxx->slug =  Str::slug($request->title_en);
        $tourxx->save();



        // End of Upload Files
        $tour = tour::where('id', $id)->update($request->except('_token', '_method', 'tour_images', 'f_image','slug'));
        // except image cus we handle it aboves


        return redirect(route('tour.index'))->with('message', trans('backend.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        tour::where('id', $id)->delete();
        return redirect()->back()->with('message', 'tour Deleted Sucsessfully');
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new tour_images;
        $images = tour_images::find($id);
        // unlink($this->getUploadPath() . $images->tour_image_path);


        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}

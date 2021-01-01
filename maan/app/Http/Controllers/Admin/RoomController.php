<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\room_images;
use App\Model\admin\plan_images;
use App\Model\admin\room_cats;
use Illuminate\Support\Str;
class RoomController extends Controller
{


    private $uploadPath = "uploads/room/";


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

        $categories = room_cats::all();

        $rooms = room::all();
        return view('admin.room.show', compact('rooms', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = room_cats::all();

        return view('admin.room.create', compact('categories'));
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

        $room = new room;

        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/room', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $room->f_image = $fileNameToStore;

        $room->title_ar = $request->title_ar;
        $room->title_en = $request->title_en;
        $room->title_tr = $request->title_tr;

        $room->text_ar = $request->text_ar;
        $room->text_en = $request->text_en;
        $room->text_tr = $request->text_tr;


        $room->price = $request->price;
        $room->slug =  Str::slug($request->title_en);


        $room->save();
        $room->categories()->sync($request->categories);


        // Start of Upload Files
        if ($request->hasFile('room_images')) {
            $all_images = $request->file('room_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $room_images = new room_images;
                $room_images->room_id = $room->id;
                $room_images->room_image_path = $image_name;
                $room_images->save();
            }
        }



        return redirect(route('room.index'))->with('message', trans('backend.created_successfully'));
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
     * @param  \App\Admin\Model\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = room_cats::all();


        $room = room::find($id);

        return view('admin.room.edit', compact('room', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\room  $room
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

            $path = $request->file('f_image')->move('uploads/room', $fileNameToStore);
            $roomx = room::find($id);  // here to store image alone
            $roomx->f_image = $fileNameToStore;
            $roomx->save();
        }


        // Start of Upload Files
        if ($request->hasFile('room_images')) {
            $all_images = $request->file('room_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $room_images = new room_images;
                $room_images->room_id = $id;
                $room_images->room_image_path = $image_name;
                $room_images->save();
            }
        }


        $roomxx = room::find($id);  // here to store image alone
        $roomxx->slug =  Str::slug($request->title_en);

        $roomxx->save();




        // End of Upload Files
        $room = room::where('id', $id)->update($request->except('_token', '_method', 'room_images', 'f_image', 'categories','slug'));
        // except image cus we handle it aboves

        $roomx = room::find($id);
        $roomx->categories()->sync($request->categories);

        return redirect(route('room.index'))->with('message', trans('backend.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {




        room::where('id', $id)->delete();
        return redirect()->back()->with('message', 'room Deleted Sucsessfully');
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new room_images;
        $images = room_images::find($id);
        // unlink($this->getUploadPath() . $images->room_image_path);
        $images->delete($id);

        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}

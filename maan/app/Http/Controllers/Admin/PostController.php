<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\frontend\post;
use App\Model\frontend\tag;
use App\Model\frontend\category;
use App\Model\frontend\post_images;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth; // error by tring to use restrict so i add it


class PostController extends Controller
{

      private $uploadPath = "uploads/posts/";


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



      $posts = post::all();
      return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = category::all();
        return view('admin.post.create',compact('categories'));
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
          'title_ar'=>'required',


        ]);


        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/posts', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }


        $post = new post;


        $post->f_image = $fileNameToStore;


        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug =  Str::slug($request->title_en);

        $post->date = $request->date;


        $post->save();

        $post->categories()->sync($request->categories);




        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



        $post = post::with('categories')->where('id',$id)->first();

        $categories = category::all();
        return view('admin.post.edit',compact('post','categories'));


        return redirect(route('admin.dashboard'));       // here we add restract user of ccreating post

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
        'title_ar'=>'required',

        // 'image'=>'required',
      ]);




         // End of Upload Files
      $post = post::find($id);
        //   $post->image = $imageUrl;



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

            $path = $request->file('f_image')->move('uploads/posts', $fileNameToStore);
            $postx = post::find($id);  // here to store image alone
            $postx->f_image = $fileNameToStore;
            $postx->save();
        }

        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug =  Str::slug($request->title_en);
        $post->date = $request->date;

      $post->save();





      $post->categories()->sync($request->categories);
      return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      post::where('id',$id)->delete();
      return redirect()->back();

    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new post_images();
        $images = post_images::find($id);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}

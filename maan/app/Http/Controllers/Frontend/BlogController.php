<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\frontend\post;
use App\Model\frontend\post_images;
use App\Model\frontend\category;


class BlogController extends Controller
{
   public function index( )
  {
$categories = category::all();
$reposts = post::orderBy('created_at', 'DESC')->paginate(3);
$posts = post::orderBy('created_at', 'DESC')->paginate(10);
     return view('frontend.blog.index',compact('posts', 'categories', 'reposts'));
  }

 public function post_images(post_images $post_images)
    {
        $posts = $post_images->posts();
        return view('frontend.blog.index', compact('posts'));
    }

  public function category(category $category)
  {
      $posts = $category->posts();
      return view('frontend.blog.index',compact('posts'));
  }

}

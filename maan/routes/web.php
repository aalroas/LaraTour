<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// here for lang
// Language Route
Route::post('/lang', array(
    'Middleware' => 'Localization',
    'uses' => 'Localization@index',
))->name('lang');
// For Language direct URL link
Route::get('/lang/{lang}', array(
    'Middleware' => 'Localization',
    'uses' => 'Localization@change',
))->name('langChange');
// .. End of Language Route



//user route
Route::group(['namespace'=> 'Frontend'],function(){
Route::get('/', 'HomePageController@index')->name('frontend.index'); //->name('frontend.index'); to show home page for home



Route::get('/testimonials', 'TestimonialController@index')->name('frontend.testimonials');





Route::post('contact/send_message', 'ContactController@send_message');



  Route::get('/blog','BlogController@index')->name('frontend.blog.index'); //->name('frontend.index'); to show home page for home
  Route::get('/blog/post/{post?}','PostController@post')->name('post'); //getting post by cliking in title
  Route::get('post/tag/{tag}','BlogController@tag')->name('tag');//getting all post by  cliking in tags
  Route::get('post/category/{category}','BlogController@category')->name('category');//getting all post by  cliking in category


 Route::get('/rooms', 'RoomsController@index')->name('frontend.rooms'); //->name('frontend.index'); to show home page for home


Route::get('/tours', 'ToursController@index')->name('frontend.tours'); //->name('frontend.index'); to show home page for home



 Route::get('/services', 'ServicesController@index')->name('frontend.services.index'); //->name('frontend.index'); to show home page for home

Route::get('/services/service/{service?}', 'ServiceController@service')->name('service'); //->name('frontend.index'); to show home page for home

 Route::get('/about', 'AboutController@index')->name('frontend.about'); //->name('frontend.index'); to show home page for home


Route::get('/contact', 'ContactController@index')->name('frontend.contact'); //->name('frontend.index'); to show home page for home







 Route::get('/rooms/room/{room?}', 'RoomController@room')->name('room'); //->name('frontend.index'); to show home page for home



Route::get('/tours/tour/{tour?}', 'TourController@tour')->name('tour'); //->name('frontend.index'); to show home page for home











});

//admin route


Route::group(['namespace'=> 'Admin'],function(){


Route::get('admin/about', 'AboutController@edit')->name('about.edit'); //->name('frontend.index'); to show home page for home
Route::post('admin/about', 'AboutController@update')->name('about.update'); //->name('frontend.index'); to show home page for home

Route::get('admin/contact', 'ContactController@edit')->name('contact.edit'); //->name('frontend.index'); to show home page for home
    Route::post('admin/contact', 'ContactController@update')->name('contact.update'); //->name('frontend.index'); to show home page for home



    Route::get('contact_forms', 'contact_formsController@index')->name('contact_forms.index');
    Route::get('contact_forms/show/{id}', 'contact_formsController@show');
    Route::delete('contact_forms/{id}', 'contact_formsController@destroy');







Route::get('admin/dashboard','DashboardController@index')->name('admin.dashboard'); // admin dashboard


    Route::get('admin/setting', 'SettingController@edit')->name('setting.edit');
    Route::post('admin/setting', 'SettingController@updateSiteInfo')->name('setting.UpdateSiteInfo');

  //
  Route::resource('admin/user','UserController');


  Route::resource('admin/post','PostController');
  Route::resource('admin/slider','SliderController');

 Route::resource('admin/service', 'ServiceController');

    Route::resource('admin/testimonial', 'TestimonialController');



    Route::resource('admin/team', 'TeamController');




    Route::resource('admin/tour', 'TourController');

    Route::resource('admin/room', 'RoomController');

  Route::resource('admin/tag','TagController');

  Route::resource('admin/category','CategoryController');

    Route::resource('admin/roocats', 'RoCatsController');


  // roles route
    Route::resource('admin/role','RoleController');
    //permission route
    Route::resource('admin/permission','PermissionController');
  // admin route Logic
  // Admin Auth Routes
Route::get('cpanel', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('cpanel', 'Auth\LoginController@login');
Route::POST('cpanel/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('cpanel/book','BookController');


Route::delete('/cpanel/images/{id}', 'RoomController@deleteImage');


Route::delete('/cpanel/tourimages/{id}', 'TourController@deleteImage');

Route::delete('/cpanel/serviceimages/{id}', 'ServiceController@serviceimages');




Route::delete('/cpanel/postimages/{id}', 'PostController@deleteImage');



});

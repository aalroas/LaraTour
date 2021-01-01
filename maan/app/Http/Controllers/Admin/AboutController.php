<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\about;


class AboutController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    // Define Default Settings ID
    private $id = 1;
    private $uploadPath = "uploads/about/";



    public function edit()
    {
        $id = $this->getId();
        $about = about::find($id);
        if (!empty($about)) {
            return view('admin.about', compact('about'));
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }




       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $id = $this->getId();
        $about = about::find($id);
        if (!empty($about)) {


            $about->page_name_en = $request->page_name_en;
            $about->page_name_ar = $request->page_name_ar;
            $about->page_name_tr = $request->page_name_tr;

            $about->page_text_ar = $request->page_text_ar;
            $about->page_text_tr = $request->page_text_tr;
            $about->page_text_en = $request->page_text_en;



            $about->about_tilte_ar = $request->about_tilte_ar;
            $about->about_tilte_en = $request->about_tilte_en;
            $about->about_tilte_tr = $request->about_tilte_tr;


            $about->about_text_ar = $request->about_text_ar;
            $about->about_text_en = $request->about_text_en;
            $about->about_text_tr = $request->about_text_tr;



            $about->url = $request->url;



            $about->award_tilte_ar = $request->award_tilte_ar;
            $about->award_tilte_en = $request->award_tilte_en;
            $about->award_tilte_tr = $request->award_tilte_tr;


            $about->award_text_ar = $request->award_text_ar;
            $about->award_text_en = $request->award_text_en;
            $about->award_text_tr = $request->award_text_tr;





            $about->projects = $request->projects;
            $about->customers = $request->customers;
            $about->hours = $request->hours;
            $about->awards = $request->awards;



            $about->team_tilte_ar = $request->team_tilte_ar;
            $about->team_tilte_en = $request->team_tilte_en;
            $about->team_tilte_tr = $request->team_tilte_tr;


            $about->team_text_ar = $request->team_text_ar;
            $about->team_text_en = $request->team_text_en;
            $about->team_text_tr = $request->team_text_tr;




            $about->testimonials_tilte_ar = $request->testimonials_tilte_ar;
            $about->testimonials_tilte_en = $request->testimonials_tilte_en;
            $about->testimonials_tilte_tr = $request->testimonials_tilte_tr;


            $about->testimonials_text_ar = $request->testimonials_text_ar;
            $about->testimonials_text_en = $request->testimonials_text_en;
            $about->testimonials_text_tr = $request->testimonials_text_tr;


            // logo icin
            $formFileName = "about_image";
            $fileFinalName = "";
            if ($request->$formFileName != "") {
                // Delete a style_logo_en photo
                if ($about->about_image != "") {
                    //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileFinalName = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }

            $formFileNameEn = "page_image";
            $fileFinalNameEn = "";
            if ($request->$formFileNameEn != "") {
                // Delete a style_logo_en photo
                if ($about->page_image != "") {
                    //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileFinalNameEn = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileNameEn)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileNameEn)->move($path, $fileFinalNameEn);
            }
            // End of Upload Files

            if ($fileFinalName != "") {
                $about->about_image = $fileFinalName;
            }

            if ($fileFinalNameEn != "") {
                $about->page_image = $fileFinalNameEn;
            }




           $about->save();
           return redirect(route('about.edit'))->with('message', trans('backend.updated_successfully'));

        }
        else {
            return redirect()->route('admin.dashboard');
        }
    }




    // update tab of site status

    public function getUploadPath()
    {
        return $this->uploadPath;
    }


    // update tab of Style Settings

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }


}

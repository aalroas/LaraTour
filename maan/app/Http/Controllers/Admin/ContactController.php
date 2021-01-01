<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\contact;


class ContactController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    // Define Default Settings ID
    private $id = 1;
    private $uploadPath = "uploads/contact/";



    public function edit()
    {
        $id = $this->getId();
        $contact = contact::find($id);
        if (!empty($contact)) {
            return view('admin.contact', compact('contact'));
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
        $contact = contact::find($id);
        if (!empty($contact)) {


            $contact->contact_name_en = $request->contact_name_en;
            $contact->contact_name_ar = $request->contact_name_ar;
            $contact->contact_name_tr = $request->contact_name_tr;
            $contact->contact_text_ar = $request->contact_text_ar;
            $contact->contact_text_tr = $request->contact_text_tr;
            $contact->contact_text_en = $request->contact_text_en;

            $contact->lat = $request->lat;
            $contact->long = $request->long;


            $formFileNameEn = "contact_image";
            $fileFinalNameEn = "";
            if ($request->$formFileNameEn != "") {
                // Delete a style_logo_en photo
                if ($contact->contact_image != "") {
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


            if ($fileFinalNameEn != "") {
                $contact->contact_image = $fileFinalNameEn;
            }




           $contact->save();
           return redirect(route('contact.edit'))->with('message', trans('backend.updated_successfully'));

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

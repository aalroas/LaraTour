<?php

namespace App\Http\Controllers\Frontend;

use App\Model\admin\contact;
use App\Model\admin\contact_form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {

           $contact = contact::find(1);

           return view('frontend.contact',compact('contact'));

    }




    public function send_message(Request $request)
    {



        // $name = $request->input("name");
        // $email = $request->input("email");
        // $phone = $request->input("phone");
        // $subject = $request->input("subject");
        // $message = $request->input("message");


        // //Send Email
        // $mail  = new \stdClass();
        // $mail->name = $name;
        // $mail->subject = $subject;
        // $mail->message = $message . "</br> Phone:$phone";
        // Mail::to(get_option('contact_email'))->send(new ContactEmail($mail));



        //Save To database
        $contact_form  = new contact_form;
        $contact_form->name   = $request->name;
        $contact_form->subject = $request->subject;
        $contact_form->phone = $request->phone;
        $contact_form->email = $request->email;
        $contact_form->message = $request->message;



        $contact_form->check_in   = $request->check_in;
        $contact_form->check_out = $request->check_out;
        $contact_form->children = $request->children;
        $contact_form->adults = $request->adults;
        $contact_form->rooms = $request->rooms;




        $contact_form->flight_type   = $request->flight_type;
        $contact_form->f_from = $request->f_from;
        $contact_form->f_to = $request->f_to;
        $contact_form->p_up_location = $request->p_up_location;
        $contact_form->p_up_date = $request->p_up_date;




        $contact_form->d_off_date   = $request->d_off_date;
        $contact_form->tour_name = $request->tour_name;
        $contact_form->tour_date = $request->tour_date;
        $contact_form->guests = $request->guests;
        $contact_form->destination = $request->destination;


        $contact_form->days_count = $request->days_count;
        $contact_form->speak = $request->speak;
        $contact_form->form_type = $request->form_type;






        $contact_form->save();



        // echo "<fieldset>";
        // echo "<div id='success_page'>";
        // echo "<h1>Email Sent Successfully.</h1>";
        // echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
        // echo "</div>";
        // echo "</fieldset>";




            $arr = array('msg' => trans('frontend.message_sended'), 'status' => true);
            return response()->json($arr);




    }


}



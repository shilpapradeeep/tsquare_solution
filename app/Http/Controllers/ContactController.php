<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Contact as ContactResource;

class ContactController extends Controller
{
    

    public function index()
    {
        return ContactResource::collection(
            Contact::where(['c_status'=>'1'])->get());
        //return Contact::where(['c_status'=>'1'])->first();
        

    }
    public function submit(Request $req)
    {
        $validation = $req->validate([
            'name'=>'required|max:55',
            'email'=>'required|email|max:55',
            'phone'=>'required|max:10',
            'message'=>'required|max:255'
        ]); 
        
        if ($validation)
        {
        	$contact = new Contact;
        	$contact->c_name = $req->post('name');
            $contact->c_email = $req->post('email');
            $contact->c_phone = $req->post('phone');
            $contact->c_message = $req->post('message');
            if ($contact->save())
            {
            	// mail send code

            	$cd =['data'=>$contact->attributesToArray(),'status'=>'1'] ;

                $cd1 =['data'=>'Thank you for reaching us1. Your message sent to the admin successfully. Our representative will contact you shortly. ','status'=>'2'] ;
                // Mail::to(\Illuminate\Support\Facades\Config::get('constants.pass-key.admin_mail'))->send(new \App\Mail\ContactMail($cd));
                
                // Mail::to($req->post('email'))->send(new \App\Mail\ContactMail($cd1));
                
            	// mail send end

            	$res = ['res'=>'1','msg'=>'Thank You! Your message sent to the admin successfully'];
            }
            else
            {
            	
            	$res = ['res'=>'0','msg'=>'Sorry something went wrong!'];
            }


        }
        else{
            $res = ['res'=>'0','msg'=>'Sorry something went wrong!','errors'=>$validation->errors()->all()];
        }

        return response()->json($res);
    }
}

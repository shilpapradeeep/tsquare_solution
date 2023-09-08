<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
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
                $cd1 =['data'=>'Thank you for reaching us. Your message sent to the admin successfully. Our representative will contact you shortly. ','status'=>'2'] ;
                // Mail::to(\Illuminate\Support\Facades\Config::get('constants.pass-key.admin_mail'))->send(new \App\Mail\ContactMail($cd));
                // Mail::to($req->post('email'))->send(new \App\Mail\ContactMail($cd1));
                
            	// mail send end
            	return back()->with('success','Thank You!Your message has been successfully sent');
            }
            else
            {
            	
            	return back()->with('error','Something went wrong #565678.Please contact admin for furthur details');
            }


        }
        return redirect('/');
    }
}

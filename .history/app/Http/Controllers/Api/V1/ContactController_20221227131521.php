<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Resources\Contact as ContactResource;
use Illuminate\Contracts\Validation\Validator;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page') ?? 15;
        return ContactResource::collection(
            Contact::where(['c_status'=>'1'])->paginate($perPage)->appends(
                    [
                        'per_page' => $perPage
                    ]
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        echo "<pre>";
        print_r($Request->input('name'));
        // $validation = $Request->validate([
        //     'name'=>'required|max:55',
        //     'email'=>'required|email|max:55',
        //     'phone'=>'required|max:10',
        //     'message'=>'required|max:255'
        // ]);
        $validator = \Validator::make($Request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|max:55',
           
        ]);
        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();;
            $responseArr['token'] = '';
            return response()->json($responseArr);
        }
        // if ($validation)
        // {
        // 	$contact = new Contact;
        // 	$contact->c_name = $Request->input('name');
        //     $contact->c_email = $req->post('email');
        //     $contact->c_phone = $req->post('phone');
        //     $contact->c_message = $req->post('message');
        //     if ($contact->save())
        //     {

        //     	$cd =['data'=>$contact->attributesToArray(),'status'=>'1'] ;
        //         $cd1 =['data'=>'Thank you for reaching us1. Your message sent to the admin successfully. Our representative will contact you shortly. ','status'=>'2'] ;
        //         $res = ['res'=>'1','msg'=>'Thank You! Your message sent to the admin successfully'];
        //     }
        //     else
        //     {
            	
        //     	$res = ['res'=>'0','msg'=>'Sorry something went wrong!'];
        //     }


        // }
        // else{
        //     $res = ['res'=>'0','msg'=>'Sorry something went wrong!','errors'=>$validation->errors()->all()];
        // }
        // $res = ['res'=>'0','msg'=>'Sorry something went wrong!','errors'=>$validation->errors()->all()];
        // return response()->json($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Resources\Contact as ContactResource;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;


class ContactController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api')->only(['store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        echo Str::random(80);
        $perPage = $request->input('per_page') ?? 15;
        // return ContactResource::collection(
        //     Contact::where(['c_status'=>'1'])->paginate($perPage)->appends(
        //             [
        //                 'per_page' => $perPage
        //             ]
        //     )
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
       
        // $validation = $Request->validate([
        //     'name'=>'required|max:55',
        //     'email'=>'required|email|max:55',
        //     'phone'=>'required|max:10',
        //     'message'=>'required|max:255'
        // ]);
        $validator = \Validator::make($Request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|max:55',
            'phone'=>'required|max:10',
            'message'=>'required|max:255'
           
        ]);
        // if ($validator->fails()) {
        //     $responseArr = array("status"=>false,"message"=>"The given data is invalid","errors"=>$validator->errors());
           
        //     return response()->json($responseArr);
        // }
        if ($validator->fails())
        {
            $res = ['res'=>'0','msg'=>'Sorry something went wrong!','errors'=>$validator->errors()];
        
        }
        else{
            $contact = new Contact;
        	$contact->c_name = $Request->input('name');
            $contact->c_email = $Request->input('email');
            $contact->c_phone = $Request->input('phone');
            $contact->c_message = $Request->input('message');
            if ($contact->save())
            {

            	$cd =['data'=>$contact->attributesToArray(),'status'=>'1'] ;
                $cd1 =['data'=>'Thank you for reaching us1. Your message sent to the admin successfully. Our representative will contact you shortly. ','status'=>'2'] ;
                $res = ['res'=>'1','msg'=>'Thank You! Your message sent to the admin successfully'];
            }
            else
            {
            	
            	$res = ['res'=>'0','msg'=>'Sorry something went wrong!'];
            }  
        }
        return response()->json($res);
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

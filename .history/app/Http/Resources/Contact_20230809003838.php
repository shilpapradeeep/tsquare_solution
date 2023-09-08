<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => isset($this->c_id)?$this->c_id:'',
            'name' => isset($this->c_name)?$this->c_name:'',
            'email' => isset($this->c_email)?$this->c_email:'',
            'phone' => isset($this->c_phone)?$this->c_phone:'',
            'message' => isset($this->c_message)?$this->c_message:'',
            'status' => isset($this->c_status)?$this->c_status:'',
            'created_at' => isset($this->created_at)?$this->created_at:'',
            'updated_at' =>isset($this->updated_at)?$this->updated_at:''
        ];
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'c_id ', 'c_name', 'c_email', 'c_phone', 'c_message', 'c_status','created_at',' updated_at '
    ];
}

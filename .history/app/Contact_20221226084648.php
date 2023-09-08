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
    protected $table = 'hr_request';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'profile_role_id', 'hr_id', 'vacancy', 'experience', 'job_description', 'status', 'viewed',
    ];
}

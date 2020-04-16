<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = array('id');

        public static $rules = array(
            'student_name' => 'required',
            'phone_number' => 'required',
            'mail_address' => 'required',
    );
}

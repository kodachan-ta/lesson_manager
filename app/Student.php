<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = array('student_id');

        public static $rules = array(
            'student_name' => 'required|max:30',
            'phone_number' => 'required|max:30',
            'mail_address' => 'required|max:50',
            'delete_flg' => 'required',
    );
}

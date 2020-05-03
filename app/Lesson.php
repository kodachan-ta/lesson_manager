<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'student_name' => 'required',
        'curriculum' => 'required',
    );
}

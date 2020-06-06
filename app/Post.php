<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $guarded = array('student_id');
     
    //
    public static $rules = array(
        'posts' => 'required',
    );
    
}

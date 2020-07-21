<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = array('Lesson_id');
    
    public static $rules = array(
        'student_name' => 'required',
        'curriculum' => 'required|max:240',
        'lesson_start' => 'required',
        'lesson_end' => 'required',
        'lesson_day' => 'required',
    );
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    //
    public function add()
    {
        return view('admin.lesson.create');
    }
    
}

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
    
    public function create(Request $request)
    {
      return redirect('admin/lesson/time');
    }
    
    public function TimeSelection(Request $request)
    {
        return redirect('admin.lesson.create');
    }
    
    public function time()
    {
     return view('admin.lesson.time');
    }
}

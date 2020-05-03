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
      return redirect('admin/lesson/create');
    }
    
    public function showCalendar(Request $request, $month)
    {
 
        $calendar = calendar($section, $patient, $month);
 
        $month = new CarbonImmutable($month);
 
        return view('calendar', compact( 'calendar', 'month'));
    }
  
  
  
    public function a()
    {
      return view('admin.lesson.calendar');
    }  
    
}

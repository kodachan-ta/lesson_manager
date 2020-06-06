<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Lesson;

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
    
    public function student_index(Request $request)
    {
        $cond_student =$request->cond_student;
        if($cond_student !=""){
            $posts = Student::where('student_name',$cond_student)->get();
        }else{
            $posts = Student::all();
        }
        return view('admin.lesson.student_select',['posts' => $posts,'cond_student'=>$cond_student]);
    }
    
     public function student_select(Request $request)
    {
      $student = Student::find($request->id);
      if (empty($student)) {
        abort(404);    
      }
      return view('admin.student.create', ['student_form' => $student]);
    }
    
    public function TimeSelection(Request $request)
    {
        
        return redirect('admin.lesson.create');
    }
    
}

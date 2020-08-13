<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
     public function add()
    {
        return view('admin.student.create');
    }
    
     public function create(Request $request)
    {   
        $user = Auth::id();
        
        $this->validate($request, Student::$rules);
        $student = new Student;
        $student->delete_flg = 0;
        $student->user = $user;
        
        $form = $request->all();
        
        unset($form['_token']);
        
        $student->fill($form);
        $student->save();
        
        return redirect('admin/student/students');
    }
    
    public function index(Request $request)
    {
        $user = Auth::id();
        
        $cond_student =$request->cond_student;
        $query = Student::query();
        if($cond_student != ""){
            $query ->where('student_name','LIKE binary',"%$cond_student%");
        }
        $query ->where('delete_flg',0);
        $query ->where('user',$user);
        $query ->orderBy('student_name','asc');
        $posts = $query->get();
        return view('admin.student.students',['posts' => $posts,'cond_student'=>$cond_student]);
    }
    
    public function edit(Request $request)
    {
      $student = Student::find($request->id);
      if (empty($student)) {
        abort(404);    
      }
      return view('admin.student.edit', ['student_form' => $student]);
    }
    
    public function update(Request $request)
    {
      $this->validate($request, Student::$rules);
      $student = Student::find($request->id);
      $student_form = $request->all();
      unset($student_form['_token']);

      $student->fill($student_form)->save();

      return redirect('admin/student/students');
    }
    
    public function delete(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete_flg = 1;
        $student->save();
        
      return redirect('admin/student/students');
        
    }
    
    
}

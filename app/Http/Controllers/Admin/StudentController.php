<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    //
     public function add()
    {
        return view('admin.student.create');
    }
    
     public function create(Request $request)
    {   
        $this->validate($request, Student::$rules);
        $student = new Student;
        $student->delete_flg=0;
        
        $form = $request->all();
        
        unset($form['_token']);
        
        $student->fill($form);
        $student->save();
        
        return redirect('admin/student/create');
    }
    
    public function index(Request $request)
    {
        $cond_student =$request->cond_student;
        if($cond_student !=""){
            $posts = Student::where('student_name',$cond_student)->get();
        }else{
            $posts = Student::all();
        }
        return view('admin.student.students',['posts' => $posts,'cond_student'=>$cond_student]);
    }
    
    public function edit(Request $request)
    {
      $student = Student::find($request->id);
      if (empty($student)) {
        abort(404);    
      }
      return view('admin.student.create', ['student_form' => $Student]);
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
        $news = Student::find($request->id);
        $news->delete();
      return redirect('admin/student/students');
        
    }
    
    
}

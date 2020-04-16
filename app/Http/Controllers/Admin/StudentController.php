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

        $form = $request->all();

        unset($form['_token']);
        
        $student->fill($form);
        $student->save();

        return redirect('admin/student/create');
    }  
}

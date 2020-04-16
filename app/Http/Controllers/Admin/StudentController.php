<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        
        $students = new Students;
        $form = $request->all();
        
        unset($form['_token']);
        
        $students->fill($form);
        $students->save();
        return redirect('admin/student/create');
    }  
}

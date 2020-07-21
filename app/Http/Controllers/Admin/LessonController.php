<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use App\Lesson;

class LessonController extends Controller
{
    
    public function add(Request $request)
    {
        $students = Student::where('delete_flg',0)->get();
        
        $day = $request->selectedDate;
        $time = $request->selectedTime;
        
        return view('admin.lesson.create', ['students' => $students, 'day' => $day, 'time' => $time]);
    }
    
    public function create(Request $request)
    {
        $day = $request->selectedDate;
        $time = $request->selectedTime;
        
        $this->validate($request, Lesson::$rules);
        $lesson = new Lesson;
        
        $form = $request->all();
        
        unset($form['_token']);
        
        $lesson->fill($form);
        $lesson->save();
        
        return redirect('/')->withinput(['day' => $day, 'time' => $time]);
    }
    
    public function edit(Request $request)
    {
        $students = Student::where('delete_flg',0)->get();
        
        $day = $request->selectedDate;
        $time = $request->selectedTime;
        
        $lesson =Lesson::find($request->id);
        if (empty($lesson)){
            about(404);
        }
        return view('admin.lesson.edit',['lesson_form' => $lesson, 'students' => $students, 'day' => $day, 'time' => $time]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Lesson::$rules);
        $lesson = Lesson::find($request->id);
        $lesson_form = $request->all();
        unset($lesson_form['_token']);
        
        $lesson->fill($lesson_form)->save();
        
        return redirect('/');
    }
    
    public function delete(Request $request)
    {
        $lesson = Lesson::find($request->id);
        $lesson->delete();
      return redirect('/');
    }
    
    public function student_index(Request $request)
    {
        $cond_student = $request->cond_student;
        if($cond_student != ""){
            $posts = Student::where('student_name', $cond_student)->get();
        }else{
            $posts = Student::all();
        }
        return view('admin.lesson.student_select', ['posts' => $posts, 'cond_student' => $cond_student]);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use Carbon\Carbon;

class ToppageController extends Controller
{
    public function add()
    {
        $dt = Carbon::today();
        $today_lesson = Lesson::where('lesson_day',$dt)->get();
        
        return view('admin.toppage', ['today_lesson' => $today_lesson]);
    }
    
}

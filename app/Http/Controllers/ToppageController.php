<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ToppageController extends Controller
{
    public function add()
    {
        $dt = Carbon::today();
        $user = Auth::id();
        
        $query = Lesson::query();
            $query ->where('user',$user);
            $query ->where('lesson_day',$dt);
            $query ->orderBy('lesson_start','asc');
            $today_lesson = $query->get();
            
        //$today_lesson = Lesson::where('lesson_day',$dt)->get();
        
        return view('admin.toppage', ['today_lesson' => $today_lesson]);
    }
    
}

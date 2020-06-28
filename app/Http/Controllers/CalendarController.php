<?php

namespace App\Http\Controllers;

use App\Facades\Calendar;
use App\Services\CalendarService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Lesson;

class CalendarController extends Controller
{
    private $service;

    public function __construct(CalendarService $service)
    {
        // dd($service);
        // $this->service = $service
    }

    public function index()
    {
        return view('admin.lesson.calendar', [
            // 'weeks'         => $this->service->getWeeks(),
            'weeks'         => Calendar::getWeeks(),
            'month'         => Calendar::getMonth(),
            'prev'          => Calendar::getPrev(),
            'next'          => Calendar::getNext(),
        ]);
    }
    
    public function time(Request $request)
    {
        $posts = Lesson::where('lesson_day',$request->selectedDate)->get();
        $time = $request->selectedDate;
        return view('admin.lesson.time',['posts' => $posts, 'time' => $time]); 
    }

}
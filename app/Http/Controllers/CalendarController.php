<?php

namespace App\Http\Controllers;

use App\Facades\Calendar;
use App\Services\CalendarService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

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
        $time = '日程';
        return view('admin.lesson.time')->with('time',$time); 
    }
    
}
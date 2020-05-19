<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
     Route::get('lesson/create', 'Admin\LessonController@add')->middleware('auth');
     Route::post('lesson/create', 'Admin\LessonController@create')->middleware('auth');
     Route::get('lesson', 'Admin\CalendarController@index')->name('calendar');
     Route::post('lesson/time', 'Admin\LessonController@TaimeSelection');
     
     Route::get('student/create', 'Admin\StudentController@add');
     Route::post('student/create', 'Admin\StudentController@create');
     Route::get('student/students', 'Admin\StudentController@index');
     Route::get('student/students/edit', 'Admin\StudentController@edit');
     Route::post('student/students/edit', 'Admin\StudentController@update');
     Route::get('student/students/delete', 'Admin\StudentController@delete');
     
    
     
});


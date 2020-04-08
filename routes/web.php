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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
     Route::get('lesson/create', 'Admin\LessonController@add')->middleware('auth');;
     Route::post('lesson/create', 'Admin\LessonController@create')->middleware('auth');;
     
     Route::get('student/create', 'Admin\StudentController@add')->middleware('auth');;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

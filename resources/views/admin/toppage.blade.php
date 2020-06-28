@extends('layouts.admin')
@section('title','トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>本日のレッスン予定</h2>
            <table class="table table-bordered">
                <div>
                    @foreach($today_lesson as $lesson)
                        <tr>
                            <th>{{ $lesson->lesson_start }}</th>
                            <th>{{ $lesson->student_name }}</th>
                        </tr>
                    @endforeach
                </div>
            </<table>
            
            <div class="button">
                <a class="btn btn-primary" href="admin/lesson/calendar" role="button">レッスン作成</a>
            </div>
    
            <div class="button">
                <a class="btn btn-primary" href="admin/student/students" role="button">生徒管理</a>
            </div>
    
        </div>
    </div>
</div>
@endsection
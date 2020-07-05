@extends('layouts.admin')
@section('title','トップページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>本日のレッスン予定</h2>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>レッスン時間</th>
                        <th>生徒名</th>
                        <th>レッスン内容</th>
                    </tr>
                </thead>
                @foreach($today_lesson as $lesson)
                    <tr>
                        <th class="t-body">{{ $lesson->lesson_start }}</th>
                        <th class="t-body">{{ $lesson->student_name }}</th>
                        <th class="t-body">{{ $lesson->curriculum }}</th>
                    </tr>
                @endforeach
            </table>
            
          
                <a class="btn btn-primary btn-lg btn-block" href="admin/lesson/calendar" role="button">レッスン作成</a>
                <a class="btn btn-primary btn-lg btn-block" href="admin/student/students" role="button">生徒管理</a>
    
        </div>
    </div>
</div>
@endsection
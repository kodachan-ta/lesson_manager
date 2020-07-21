@extends('layouts.admin')
@section('title','トップページ')

@section('content')
<div class="container">
    <div class="row">
        <h2>本日のレッスン予定</h2>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="row">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th width="25%">レッスン時間</th>
                        <th width="25%">生徒名</th>
                        <th width="50%">レッスン内容</th>
                    </tr>
                </thead>
                @foreach($today_lesson as $lesson)
                    <tr>
                        <td class="t-number">{{ $lesson->lesson_start }}</td>
                        <td class="t-body">{{ $lesson->student_name }}</td>
                        <td class="t-body">{!! nl2br(e($lesson->curriculum)) !!}</td>
                    </tr>
                @endforeach
            </table>
            </div>
            
          
                <a class="btn btn-primary btn-lg btn-block" href="admin/lesson/calendar" role="button">レッスン作成</a>
                <a class="btn btn-primary btn-lg btn-block" href="admin/student/students" role="button">生徒管理</a>
    
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('title', 'レッスン作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>レッスン作成</h2>
                <form action="{{ action('Admin\LessonController@create') }}" method="post" enctype="multipart/form-data">
                
                     @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <h3 class="t-number">登録日：{{ $day }} レッスン時間：{{ $time }}</h3>
                    
                    <input type="hidden" name="lesson_start" value="{{ $time }}">
                    <input type="hidden" name="lesson_end" value="0000">
                    <input type="hidden" name="lesson_day" value="{{ $day }}">
                    
                    <div class="form-group row">
                        <label class="col-md-2">生徒名</label>
                        <div class="col-md-10">
                            <select name="student_name">
                                @foreach($students as $student)
                                <option value="{{ $student->student_name }}">{{ $student->student_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
   
                    <div class="form-group row">
                        <label class="col-md-2">レッスン内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="curriculum" rows="20">{{ old('curriculum') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                    
                </form>
            </div>
        </div>
    </div>
@endsection
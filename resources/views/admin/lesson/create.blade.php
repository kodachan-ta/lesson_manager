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
                    
                    <div class="form-group row">
                        <label class="col-md-2">生徒名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="student_name" value="{{ $student_form->student_name }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2"><tr>時間開始選択</tr></label>
                        <div class="col-md-10">
                            <td>
                            15:00<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            15:30<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            16:00<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            16:30<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            17:00<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            17:30<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            18:00<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            18:30<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            19:00<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            19:30<input type="radio"  name="lesson_start" value="{{ old('lesson_start') }}">
                            </td>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2"><tr>時間終了選択</tr></label>
                        <div class="col-md-10">
                            <td>
                            15:00<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            15:30<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            16:00<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            16:30<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            17:00<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            17:30<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            18:00<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            18:30<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            19:00<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            19:30<input type="radio"  name="lesson_end" value="{{ old('lesson_start') }}">
                            </td>
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
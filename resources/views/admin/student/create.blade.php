@extends('layouts.admin')
@section('title', '生徒登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>生徒登録</h2>
                <form action="{{ action('Admin\StudentController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="student_name">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="student_name" value="{{ old('student_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="phone_number">連絡先</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="mail_address">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="mail_address" value="{{ old('mail_address') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection
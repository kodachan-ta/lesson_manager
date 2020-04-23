@extends('layouts.admin')
@section('title', '生徒一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>生徒一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\StudentController@add') }}" role="button" class="btn btn-primary">生徒登録</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\StudentController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_student" value="{{ $cond_student }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-student col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">生徒名</th>
                                <th width="20%">連絡先</th>
                                <th width="50%">メールアドレス</th>
                                 <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $student)
                                <tr>
                                    <th>{{ $student->student_name }}</th>
                                    <th>{{ $student->phone_number }}</th>
                                    <th>{{ $student->mail_address }}</th>
                                    <td>
                                    <div>
                                        <a href="{{ action('Admin\StudentController@edit', ['id' => $student->id]) }}">編集</a> 　　//idの意味
                                    </div>
                                    <div>
                                        <a href="{{ action('Admin\StudentController@delete', ['id' => $student->id]) }}">削除</a>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
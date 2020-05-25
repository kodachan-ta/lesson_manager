@extends('layouts.admin')
@section('title', '日程選択')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>レッスン日選択</h2>
            <form action="{{ action('CalendarController@aaa') }}" method="post" enctype="multipart/form-data">
                <div class="flex-center position-ref full-height">
                    <div class="content">

                        <div>
                            <a href="?ym={{ $prev }}">&lt;</a>
                            <span class="month">{{ $month }}</span>
                            <a href="?ym={{ $next }}">&gt;</a>
                        </div>

                        <table class="table table-bordered">
                        <tr>
                            <th>日</th>
                            <th>月</th>
                            <th>火</th>
                            <th>水</th>
                            <th>木</th>
                            <th>金</th>
                            <th>土</th>
                        </tr>
                            @foreach ($weeks as $week)
                                {!! $week !!}
                            @endforeach
                        </table>

                    </div>
                    {{-- .content --}}
                </div>
                {{-- .flex-center .position-ref .full-height --}}
            </form>
        </div>
    </div>
</div>
@endsection

<!--formタグで年月日をコンロトーラーに渡す month=年月　$week or $day=日？<form action="{{ action('Admin\LessonController@TimeSelection') }}" method="post" enctype="multipart/form-data"> >
@extends('layouts.admin')
@section('title','時間選択')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="t-number">{{$time}}レッスン時間選択</h2>

            <table class="table table-bordered">
                        <tr>
                            <th>レッスン時間</th>
                            <th>生徒名</th>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:15:00")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001500">15:00</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001500\">15:00</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>                           
                            @foreach($posts as $lesson)
 
                                @if($lesson->lesson_start =="00:15:30")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001530">15:30</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001530\">15:30</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>                            
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:16:00")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001600">16:00</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001600\">16:00</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                            
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:16:30")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001630">16:30</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001630\">16:30</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                            
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:17:00")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001700">17:00</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001700\">17:00</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:17:30")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001730">17:30</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001730\">17:30</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>                            
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:18:00")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001800">18:00</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001800\">18:00</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>                            
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:18:30")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001830">18:30</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001830\">18:30</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:19:00")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001900">19:00</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001900\">19:00</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
                        
                        <tr>
                            <?php
                                $counter = 0;
                            ?>
                            @foreach($posts as $lesson)
                                @if($lesson->lesson_start =="00:19:30")
                                    <th class="t-number">
                                        <a href="{{ action('Admin\LessonController@edit', ['id' => $lesson->id]) }}&selectedDate={{$time}}&selectedTime=001930">19:30</a>
                                    </th>
                                    <th class="t-body">
                                        {{ $lesson->student_name }}
                                        <div class="pull-right">
                                            <a href="{{ action('Admin\LessonController@delete', ['id' => $lesson->id]) }}">レッスン削除</a>
                                        </div>
                                    </th>
                                    <?php
                                        $counter = 1;
                                    ?>
                                    @break
                                @endif
                            @endforeach
                            <?php
                                if($counter == 0)
                                {
                                    echo("<th class=\"t-number\"><a href=\"create?selectedDate={$time}&selectedTime=001930\">19:30</a></th>");
                                    echo("<th></th>");
                                }
                            ?>
                        </tr>
            </table>
        </div>
    </div>
</div>

@endsection
@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            
            <form action="http://localhost/second-todos/public//create/todo" method="post">
                <input type="text" class="form-control input-lg" name="task" placeholder="Create a new task">
                <input type="submit" value="">
            </form>
        </div>
    </div>
    <hr>
    @foreach($tasks as $task)
        {{ $task->task }}
        <hr>
    @endforeach

@stop
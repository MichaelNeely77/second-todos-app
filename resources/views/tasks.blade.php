@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            
            <form action="http://localhost/second-todos/public/create/task" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="task" placeholder="Create a new task">

            </form>
        </div>
    </div>
    <hr>
    @foreach($tasks as $task)
        {{ $task->task }} <a href="{{ route('task.delete', ['id' => $task->id]) }}" class="btn btn-danger">Delete Task</a>
        <hr>
    @endforeach

@stop
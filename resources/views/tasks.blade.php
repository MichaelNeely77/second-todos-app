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
        <a href="{{ route('task.update', ['id' => $task->id]) }}" class="btn btn-info btn-xs">Update Task</a>
        @if (!$task->completed)
            <a href="{{ route('tasks.completed', ['id' => $task->id]) }}" class="btn btn-xs btn-success">Mark as Completed</a>            
        @else
            <h3>Completed</h3>
        @endif
        <hr>
    @endforeach

@stop
@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            
            <form action="{{ route('tasks.save', ['id' => $task->id ]) }}" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="task" value="{{ $task->task }}" placeholder="Create a new task">

            </form>
        </div>
    </div>
    <hr>


@stop
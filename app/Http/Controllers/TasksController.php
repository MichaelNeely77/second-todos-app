<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() 

    {

        $tasks = Task::all();

        return view('tasks')->with('tasks', $tasks);
    }

    public function store(Request $request) 
    {

        $task = new Task;

        $task->task = $request->task;

        $task->save();

        return redirect()->back();
    }
}

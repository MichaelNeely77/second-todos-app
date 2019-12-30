<?php

namespace App\Http\Controllers;

use Session;

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

        Session::flash('success', 'Your task was created');

        return redirect()->back();
    }

    public function delete($id) 
    {
        $task = Task::find($id);

        $task->delete();

        Session::flash('success', 'Your task was deleted');

        return redirect()->back();
    }

    
    public function update($id) 
    {
        $task = Task::find($id);

        return view('update')->with('task', $task);


    }

    public function save(Request $request, $id)
    {
        $task = Task::find($id);

        $task->task = $request->task;

        $task->save();

        Session::flash('success', 'Your task was updated');

        return redirect()->route('tasks');
    }

    public function completed($id)
    {
        $task = Task::find($id);

        $task->completed = 1;

        $task->save();

        Session::flash('success', 'Your task was completed');

        return redirect()->back();

    }
}

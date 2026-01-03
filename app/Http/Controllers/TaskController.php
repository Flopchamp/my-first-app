<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
      // Retrieve all tasks from the database
      $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        //
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        task::create([
            "title" => $request->title
        ]);

        return redirect('/tasks');
    }

   public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        
        return redirect('/tasks');
    }

    public function toggleComplete($id)
    {
        $task = Task::find($id);
        $task->completed = !$task->completed; // Flip true to false, or false to true
        $task->save();
        
        return redirect('/tasks');
    }
}
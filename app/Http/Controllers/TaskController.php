<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

//    $tasks = DB::table('tasks')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
//        $task = Task::find($id);

//    $task = DB::table('tasks')->find($id);

        return $task;

        return view('tasks.show', compact('task'));
    }
}

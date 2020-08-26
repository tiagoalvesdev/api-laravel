<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function searchTasks()
    {
    	return Task::all(); // model
    }

    public function storeTasks(Request $request)
    {
    	$task = Task::create([
    		'name'		=> $request->input('name'),
    		'complete'	=> $request->input('complete')
    	]);

    	return $task;
    }

    public function viewTask(Task $task)
    {
         return $task;
    }

    public function updateTask(Request $request, Task $task)
    {
        $task->name = $request->input('name');
        $task->save();

        return $task;
    }

    public function deleteTask(Task $task)
    {
        $task->delete();

        return response()->json(['success'=>true]);
    }
}

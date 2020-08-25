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
}

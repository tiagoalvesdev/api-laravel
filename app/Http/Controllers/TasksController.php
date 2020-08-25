<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function searchTasks()
    {
    	$tasks = [
			[
				"id" 	=> 1,
				"name"	=> "Realizar Tarefa 1",
				"complete" => true
			],
			[
				"id" 	=> 2,
				"name"	=> "Realizar Tarefa 2",
				"complete" => false
			],
			[
				"id" 	=> 3,
				"name"	=> "Realizar Tarefa 3",
				"complete" => false
			],
			[
				"id" 	=> 4,
				"name"	=> "Realizar Tarefa 4",
				"complete" => true
			]
		];

		return $tasks;
    }

    public function storeTasks()
    {
    	return "OK!";
    }
}

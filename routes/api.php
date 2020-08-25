<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", function(){

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
		]

	];

	return $tasks;

});

?>
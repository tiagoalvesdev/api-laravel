<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* get {task} = Model */

Route::get("tasks", "TasksController@searchTasks");
Route::get("tasks/{task}", "TasksController@viewTask");
Route::post("tasks", "TasksController@storeTasks");
Route::patch("tasks/{task}", "TasksController@updateTask");
Route::delete("tasks/{task}", "TasksController@deleteTask");

?>
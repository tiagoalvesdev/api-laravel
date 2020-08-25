<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "TasksController@searchTasks");
Route::post("tasks", "TasksController@storeTasks");

?>
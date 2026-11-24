<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// taskcontroller 
Route::get('/',[TaskController::class,'create'])->name('tasks_form.taskform');



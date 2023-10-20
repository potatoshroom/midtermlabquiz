<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\TaskController;

// Define a route to show the login page
Route::get('/', [TaskController::class, 'index'])->middleware(Authenticate::class);


// Define authentication routes
Auth::routes();

// Define resourceful routes for tasks using the TaskController
Route::resource('tasks', TaskController::class);


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);

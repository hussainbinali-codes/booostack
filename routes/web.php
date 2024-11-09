<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index'); // Adjust if you've renamed `index.blade.php` in `views`
});


use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);

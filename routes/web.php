<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index'); // Adjust if you've renamed `index.blade.php` in `views`
});

Route::get('/hire/flow', function () {
    return view('hire/flow'); // Adjust if you've renamed `index.blade.php` in `views`
});

Route::get('/hire/company-size', function () {
    return view('hire/company-size'); // Adjust if you've renamed `index.blade.php` in `views`
});

Route::get('/hire/project-type', function () {
    return view('hire/project-type'); // Adjust if you've renamed `index.blade.php` in `views`
});

Route::get('/hire/project-length', function () {
    return view('hire/project-length'); // Adjust if you've renamed `index.blade.php` in `views`
});
Route::get('/hire/commitment', function () {
    return view('hire/commitment'); // Adjust if you've renamed `index.blade.php` in `views`
});
Route::get('/hire/project-skills', function () {
    return view('hire/project-skills'); // Adjust if you've renamed `index.blade.php` in `views`
});
Route::get('/hire/ready-to-start', function () {
    return view('hire/ready-to-start'); // Adjust if you've renamed `index.blade.php` in `views`
});
Route::get('/hire/contact', function () {
    return view('hire/contact'); // Adjust if you've renamed `index.blade.php` in `views`
});
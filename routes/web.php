<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('college');
});

Route::view('/courses', 'courses.index');
Route::view('/services', 'services');
Route::view('/clients', 'clients');
Route::view('/contact', 'contact');
Route::view('/college', 'college');
Route::get('/health', function () {
    return [
        'app_key' => config('app.key') ? 'SET' : 'MISSING',
        'env' => app()->environment(),
    ];
});
Route::get('/about', function () {
    return view('about'); // no 'pages.' prefix
})->name('about');

Route::get('/team', function () {
    return view('team'); // no 'pages.' prefix
})->name('team');
Route::get('/careers', function () {
    return view('careers'); // no 'pages.' prefix
})->name('careers');
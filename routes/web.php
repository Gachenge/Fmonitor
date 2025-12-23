<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/courses', 'courses.index');
Route::view('/services', 'services');
Route::view('/team', 'team');
Route::view('/clients', 'clients');
Route::view('/contact', 'contact');
Route::view('/college', 'college');

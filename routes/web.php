<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('college');
});

Route::view('/courses', 'courses.index');
Route::view('/services', 'services');
Route::view('/clients', 'clients');
Route::view('/contact', 'contact');
Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/team', function () {
    return view('team'); 
})->name('team');

Route::get('/college', function () {
    return view('college'); 
})->name('college');

Route::get('/careers', function () {
    return view('careers'); 
})->name('careers');
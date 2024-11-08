<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home age']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About age']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']); // Menyisipkan variabel 'title' ke dalam view
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact age']) ;
});

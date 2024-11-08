<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home age']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About age']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page','posts' => [
        [
            'id' => '1',
            'title' => 'Judul artikel1',
            'author' => 'Beliau',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure, quibusdam libero repellat sunt nulla doloremque autem,
             recusandae iusto voluptatibus eaque reiciendis delectus perferendis dolor. Ipsam id accusamus quibusdam porro!'
        ],
        [
            'id' => '2',
            'title' => 'Judul artikel2',
            'author' => 'Beliau',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iure, quibusdam libero repellat sunt nulla doloremque autem,
             recusandae iusto voluptatibus eaque reiciendis delectus perferendis dolor. Ipsam id accusamus quibusdam porro!'
        ]
    ]]); // Menyisipkan variabel 'title' ke dalam view
});
Route::get('/blog/{{id}}', function () {
    
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact age']) ;
});

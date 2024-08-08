<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kurumsal', function () {
    return view('kurumsal');
});

Route::get('/e-magaza', function () {
    return view('e-magaza');
});

Route::get('/kampanya', function () {
    return view('kampanya');
});

Route::get('/e-katalog', function () {
    return view('e-katalog');
});

Route::get('/contact', function () {
    return view('contact');
});
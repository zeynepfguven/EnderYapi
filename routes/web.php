<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kurumsal', function () {
    return view('kurumsal');
});

Route::get('/detay', function () {
    return view('detay');
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

Route::get('/page2', function () {
    return view('page2');
});
Route::get('/page3', function () {
    return view('page3');
});

Route::get('/bahce', function () {
    return view('bahce');
});

Route::get('/standlar', function () {
    return view('standlar');
});

Route::get('/insaat', function () {
    return view('insaat');
});
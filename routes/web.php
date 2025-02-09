<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/', function () {
    return view('pages.create');
});

Route::get('/edit/', function () {
    return view('pages.edit');
});

Route::get('/index/', function () {
    return view('pages.index');
});

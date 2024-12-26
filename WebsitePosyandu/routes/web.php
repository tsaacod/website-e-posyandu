<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/bayi', function () {
    return view('bayi.index', ['title' => 'Daftar Bayi']);
});
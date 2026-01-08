<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route สำหรับ Resu
Route::get('/resume', function () {
    return view('664259034');
});

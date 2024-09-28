<?php

use Illuminate\Support\Facades\Route;


// Route untuk halaman setelah login
Route::get('/', function () {
    return view('welcome');
});

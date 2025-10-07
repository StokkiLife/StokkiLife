<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('stokkilifeLogin');
});

Route::get('login', function () {
    return view('login');
});

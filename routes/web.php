<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
    // return view('index');
});
Route::get('/', function (){
    return view('index');
    // return view('index');
});

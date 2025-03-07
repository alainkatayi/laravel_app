<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nb = 3;
    return view('welcome', ['nb' =>$nb]);
});

Route::get('/register', function(){
    return view('register');
});

<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nb = 3;
    return view('welcome', ['nb' =>$nb]);
});

Route::get('/register', function(){
    return view('register');
});

Route::post('/register', function(Request $request){
    dd($request ->all());
    return "Envoiyer";
});
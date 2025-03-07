<?php
use App\Models\Gens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\GensControler;


Route::get('/',[GensControler::class, 'home']);

Route::get('/register', [GensControler::class, 'register']);

Route::post('/register',[GensControler::class, 'register_add']);
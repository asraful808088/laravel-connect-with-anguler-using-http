<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersOpe;
Route::resource('api/user', UsersOpe::class);
Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class);
Route::get('/welcome', function () {
    return view('welcome');
});

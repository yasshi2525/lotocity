<?php

use App\Livewire\Deal;
use App\Livewire\Loto;
use App\Livewire\Stat;
use Illuminate\Support\Facades\Route;

Route::get('/loto', Loto::class);
Route::get('/deal', Deal::class);
Route::get('/stat', Stat::class);

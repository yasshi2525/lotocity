<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Deal;
use App\Livewire\Loto;
use App\Livewire\Stat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/top', Dashboard::class);
Route::get('/loto', Loto::class);
Route::get('/deal', Deal::class);
Route::get('/stat', Stat::class);

require __DIR__.'/auth.php';

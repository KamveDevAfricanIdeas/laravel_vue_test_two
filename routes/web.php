<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptionsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/options', [OptionsController::class, 'index']);
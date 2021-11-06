<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AvarageController;



Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/avarage', [AvarageController::class, 'avarage'])->name('avarage');


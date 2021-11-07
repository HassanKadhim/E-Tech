<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AvarageController;



Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/avarage', [AvarageController::class, 'avarage'])->name('avarage');
Route::post('/add', [AvarageController::class, 'add_college'])->name('add-college');
Route::get('/add-college', [AvarageController::class, 'college'])->name('college');


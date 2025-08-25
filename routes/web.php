<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('events', EventController::class);
Route::resource('galeris', GaleriController::class);
Route::resource('merchandises', MerchandiseController::class);

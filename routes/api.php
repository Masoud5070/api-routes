<?php

use Illuminate\Support\Facades\Route;
use Masoud5070\ApiRoutes\Http\Controllers\ApiController;

//api routes
Route::get('test', [ApiController::class, 'index'])->name('test');
Route::post('test', [ApiController::class, 'store'])->name('test.store');


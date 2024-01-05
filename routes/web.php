<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RNGController;

Route::get('/generate-random-number', [RNGController::class, 'generateRandomNumber']);


Route::get('/', function () {
    return view('welcome');
});

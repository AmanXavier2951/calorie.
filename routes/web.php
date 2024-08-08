<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculaterController;

Route::post('/calculate', [CalculaterController::class, 'calculate'])->name('calculate');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

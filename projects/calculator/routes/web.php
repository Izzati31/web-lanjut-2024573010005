<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\WelcomeController;

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');
Route::get('/welcome', [WelcomeController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/calculator', CalculatorController::class)->name('calculator');
Route::post('/calcul', [CalculatorController::class, 'calcul'])->name('calcul');

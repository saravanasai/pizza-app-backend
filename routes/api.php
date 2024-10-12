<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('pizzas',PizzaController::class);
Route::post('place-order',OrderController::class);

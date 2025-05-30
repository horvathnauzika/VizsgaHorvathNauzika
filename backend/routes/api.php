<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/temas',[TemaController::class,'index']);
Route::get('/szavaks',[SzavakController::class,'index']);

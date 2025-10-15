<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MarcasController,AutosController}; //17-10


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/marcas',MarcasController::class);
Route::apiResource('/autos',AutosController::class);//17-10

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\V1\NotaController;

// Rutas del controlador NotaController
Route::controller(NotaController::class)->group(function () {
    Route::get('v1/notas', 'index');
    Route::post('v1/notas', 'store');
    Route::get('v1/notas/{nota}', 'show');
    Route::put('v1/notas/{nota}', 'update');
    Route::delete('v1/notas/{nota}', 'destroy');
})->middleware(['api','auth:sanctum']);
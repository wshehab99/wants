<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WantController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::prefix('wants')->group(function () {
        Route::get('/', [WantController::class, 'index']);
    });
});

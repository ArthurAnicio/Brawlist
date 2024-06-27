<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrawlersController;

Route::get('/', [BrawlersController::class, 'index']);
Route::get('/create', [BrawlersController::class, 'create']);
Route::post('/store', [BrawlersController::class, 'store']);
Route::get('/edit/{id}',[BrawlersController::class, 'edit']);
Route::put('/update',[BrawlersController::class, 'update']);

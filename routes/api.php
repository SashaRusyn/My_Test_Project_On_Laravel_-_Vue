<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goods', [App\Http\Controllers\GoodController::class, 'goods'])->name('goods');
Route::post('/goods', [App\Http\Controllers\GoodController::class, 'store'])->name('good.store');
Route::patch('/goods/{good}/', [App\Http\Controllers\GoodController::class, 'update'])->name('good.update');
Route::delete('/goods/{good}', [App\Http\Controllers\GoodController::class, 'destroy'])->name('good.delete');

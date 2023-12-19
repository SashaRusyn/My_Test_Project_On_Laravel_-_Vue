<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/goods', [App\Http\Controllers\GoodController::class, 'index'])->name('good.index');
Route::get('/goods/filter', [App\Http\Controllers\GoodController::class, 'filter'])->name('good.filter');
Route::get('/create', [App\Http\Controllers\GoodController::class, 'create'])->name('good.create');
Route::get('/goods/{good}', [App\Http\Controllers\GoodController::class, 'show'])->name('good.show');
Route::get('/goods/{good}/edit', [App\Http\Controllers\GoodController::class, 'edit'])->name('good.edit');
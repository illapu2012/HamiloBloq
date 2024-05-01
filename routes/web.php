<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// para categorias
Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index']);
Route::get('/categorias/registrar', [App\Http\Controllers\CategoriasController::class, 'create']);
Route::post('/categorias/registrar', [App\Http\Controllers\CategoriasController::class, 'store']);
Route::get('/categorias/actualizar/{id}', [App\Http\Controllers\CategoriasController::class, 'edit']);
Route::put('/categorias/actualizar/{id}', [App\Http\Controllers\CategoriasController::class, 'update']);
Route::get('/categorias/estado/{id}', [App\Http\Controllers\CategoriasController::class, 'estado']);

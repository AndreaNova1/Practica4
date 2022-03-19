<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [\App\Http\Controllers\EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('/create', [\App\Http\Controllers\EstudianteController::class, 'create'])->name('estudiante.create');
Route::get('/edit', [\App\Http\Controllers\EstudianteController::class, 'edit'])->name('estudiante.edit');

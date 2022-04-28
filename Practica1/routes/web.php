<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\DocenteController;// necesario para poder ver los controladores.
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
/*get es para vistas*/
/*post es para guardar*/
/*patch editar*/
Route::get('/', function () {
    return view('layauts.base');
});

Route::get('/list', [AlumnoController::class, 'Lista']);

Route::get('/create', [AlumnoController::class,'form']);

Route::post('/alumno/create', [AlumnoController::class,'save'])->name('alumno.save');

Route::delete('/delete/{id}', [AlumnoController::class,'delete'])->name('delete');

Route::get('/editform/{id}', [AlumnoController::class,'editform'])->name('editform');

Route::patch('/edit/{id}', [AlumnoController::class,'edit'])->name('edit');

Route::get('/docente', [DocenteController::class,'ListDoce']);

Route::get('/formDocente', [DocenteController::class,'formDocente']);

Route::post('/docente/create', [DocenteController::class,'saveDocente'])->name('docente.save');



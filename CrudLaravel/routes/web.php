<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/', function () {
    return view('layauts.base');
});

Route::get('alumnos.listar', [AlumnoController::class,'listar']);


//Ruta de Formulario Guardar
//Route::get('/form', [StudenController::class,'form']);

//Ruta para Guardar al usuario
//Route::post('/Estudiante/crearStuden', [StudenController::class,'save'])->name('Estudiante.save');

//Ruta para Eliminar
//Route::delete('/delete/{id}', [StudenController::class,'delete'])->name('delete');

//Ruta de Formulario Editar
//Route::get('/editform/{id}', [StudenController::class,'editform'])->name('editform');

//Ruta para Editar
//Route::patch('/edit/{id}', [StudenController::class, 'edit'])->name('edit');


//Rutas de profer: Ruta de Lista
//Route::get('/profer', [ProferController::class,'listaProfer']);

//Ruta de Formulario Guardar
//Route::get('/formProfer', [ProferController::class,'formProfer']);

//Ruta para Guardar al usuario
//Route::post('/profer/crearProfer', [ProferController::class,'saveProfer'])->name('Profer.save');

//Ruta de Formulario Editar
//Route::get('/editformProfer/{id_profer}', [ProferController::class,'editformProfer'])->name('editformProfer');

//Ruta para Editar
//Route::patch('/editProfer/{id}', [ProferController::class, 'editProfer'])->name('editProfer');

//Ruta para Eliminar
//Route::delete('/deleteProfer/{id}', [ProferController::class,'destroy'])->name('deleteProfer');--!>

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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
    return view('welcome');
});

Route::get('/estudiante', '\App\Http\Controllers\EstudianteController@index');
Route::get('/Estudiantes/create','\App\Http\Controllers\EstudianteController@create');
Route::get('/Estudiantes/store','\App\Http\Controllers\EstudianteController@store');
Route::resource('Estudiantes', '\App\Http\Controllers\EstudianteController');
Route::get('/Estudiantes/edit','\App\Http\Controllers\EstudianteController@edit');


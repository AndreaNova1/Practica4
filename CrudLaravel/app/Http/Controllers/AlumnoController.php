<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function listar(){

    return view('alumnos.listar');


    }


    //Formulario
    public function form(){


    }

    //Guardar
    public function save(Request $request){


    }

    //Eliminar
    public function delete($id){


    }

    //Formulario Guardar
    public function editform($id){

    }

    //Editar
    public function edit(Request $request, $id){


    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*aca se creo la variable con referencia al estudiante y se hace una devolucion*/
        $texto=trim($request->get('texto'));
        $estudiantes=DB::table('estudiante')
                ->select('id', 'nombre', 'apellido', 'correo', 'direccion', 'telefono', 'grado')
                ->where('apellido', 'LIKE', '%' .$texto.'%')
                ->orWhere ('telefono', 'LIKE', '%', $texto.'%')
                ->paginate(13);
        return view('Estudiantes.index', compact ('estudiantes', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('Estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante= new Estudiante;
        $estudiante->nombre=$request->input('nombre');
        $estudiante->apellido=$request->input('apellido');
        $estudiante->correo=$request->input('correo');
        $estudiante->direccion=$request->input('direccion');
        $estudiante->telefono=$request->input('telefono');
        $estudiante->grado=$request->input('grado');
        $estudiante->save();
        return redirect('Estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante=Estudiante::findOrFail($id);
        return view('Estudiantes/edit', compact ('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante=Estudiante::findOrFail($id);
        $estudiante->nombre=$request->input('nombre');
        $estudiante->apellido=$request->input('apellido');
        $estudiante->correo=$request->input('correo');
        $estudiante->direccion=$request->input('direccion');
        $estudiante->telefono=$request->input('telefono');
        $estudiante->grado=$request->input('grado');
        $estudiante->save();
        return redirect('/estudiantes')->with('mensaje', 'Alumno Modificado Correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::destroy($id);

        #Retornamos a la pagina
        return redirect('Estudiantes')->with('mensaje', 'Alumno Eliminado Correctamente');
    }
}

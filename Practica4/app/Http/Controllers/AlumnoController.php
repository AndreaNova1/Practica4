<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{

    public function index()
    {
        $datos['alumnos']=Alumno::paginate(5);
        return view('alumno.index', $datos);
    }

    public function create()
    {
        return view('alumno.create');
    }


    public function store(Request $request)
    {

        //$datosAlumno = $request->all();
        $datosAlumno = request()->except('_token');
        Alumno::insert($datosAlumno);
        //restriccion de fotografica
        if($request->hasFile('Foto')){
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        // return response()->json($datosAlumno);
        return  redirect('alumno')->with('mensaje','Alumno agregado con exito');
    }


    public function show(Alumno $alumno)
    {
        //
    }


    public function edit($id)
    {
        $alumno=Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
    }


    public function update(Request $request, $id)
    {
        $datosAlumno = request()->except(['_token', '_method']);

        if ($request->hasFile('Foto')){
            $alumno = Alumno::findOrFail($id);
            Storage::delete('public/'.$alumno->Foto);

        $datosAlumno['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Alumno::where('id','=', $id)->update($datosAlumno);
        $alumno = Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
    }


    public function destroy($id)
    {
        $alumno = alumno::findOrFail($id);
        Alumno::destroy($id);

        return redirect('alumno');


    }
}

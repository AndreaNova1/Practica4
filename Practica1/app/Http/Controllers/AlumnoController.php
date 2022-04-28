<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    public function Lista(){
        $estudiante = DB::table('estudiante')
            ->join('docente','estudiante.id_docente', '=', 'docente.id_docente')
            ->select('estudiante.*', 'docente.nombre_docente')
            ->paginate(10);

        return view('alumno.list', compact('estudiante'));


    }

    public function form(){
        $profer = Docente::all();
        return view('alumno.create', compact('profer'));
    }
    public function save(Request $request){

        $datoalumno = request()->except('_token');

        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'apellido'=> 'required|string|max:255',
            'grado'=>'required|max:20|string',
            'correo'=>'required|string|max:255',
            'foto'=>'required',
            'id_profer'=> 'required'
        ]);

        //Guardar la foto
        if($request->hasFile('foto')){
            $datoalumno['foto']=$request->file("foto")->store('uploads', 'public');
        }

        Alumno::create ([
            'nombre' => $validator['nombre'],
            'apellido' => $validator['apellido'],
            'grado' => $validator['grado'],
            'correo' => $validator['correo'],
            'foto' => $datoalumno['foto'],
            'id_docente' => $validator['id_docente'],

        ]);

        return redirect('/list')->with('alumnoGuardado', 'Alumno Guardado');

    }

    public function delete($id){

        $estudiante= Alumno::findOrFail($id);

        //para eliminar foto
        if(Storage::delete('public/'.$estudiante->foto)){

            Alumno::destroy($id); //eliminar los estudiantes
        }

        return redirect('/list')->with('estudianteEliminado', 'Eliminado');
    }

    //Formulario Guardar
    public function editform($id){

        //se agrego el nombre del profesorr
        $docente = Docente::all();
        $estudiante= Alumno::findOrFail($id);

        return view('alumno.edit', compact('estudiante', 'docente'));
    }

    //Editar
    public function edit(Request $request, $id){

        $datoalumno = request()->except((['_token', '_method']));

        //Editar foto
        if($request->hasFile('foto')){

            $estudiante= Alumno::findOrFail($id);
            Storage::delete('public/'.$estudiante->foto);
            $datoalumno['foto']=$request->file("foto")->store('uploads', 'public');
        }

        Alumno::where('id', '=', $id)->update($datoalumno);

        return redirect('/list')->with('AlumnoModificado', 'Alumno Modificado');
    }
}

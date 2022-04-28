<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\log;

class DocenteController extends Controller
{
    public function ListDoce()
    {

        $datos['docente'] = Docente::paginate(50);

        return view('docente.list', $datos);
    }

    public function formDocente()
    {
        return view('docente.create');
    }


    public function saveDocente(Request $request)
    {
        try {
            $validator_l = $this->validate($request, [
                'nombre_docente' => 'required|string|max:45|unique:docente',
            ]);

            Docente::create([
                'nombre_docente' => $validator_l['nombre_docente'],
            ]);
        } catch (\Exception $exception) {

            Log::debug($exception->getMessage());

            return redirect('/formDocente');
        }

        return redirect('/docente')->with('docenteGuardado', "Nombre del docente Guardado");

    }
}

    /*public function editformuDocente($id_docente)
    {
        $docente = Docente::findOrFail($id_docente);

        return view('docente.edit', compact('docente'));
    }

    public function editDocente(Request $request, $id_docente)
    {
        $datoDocente = request()->except((['_token', '_method']));
        Docente::where('id_docente', '=', $id_docente)->update($datoDocente);

        return redirect('/docente')->with('DocenteModificado', "Nombre Modificado");
    }

    public function destroy($id_docente)
    {
        try {
            Docente::destroy($id_docente);

            return redirect('/docente')->with('DocenteEliminado', "Eliminado");

        } catch (\Exception $exception) {

            Log::debug($exception->getMessage());

            return redirect('/docente');
        }
    }*/


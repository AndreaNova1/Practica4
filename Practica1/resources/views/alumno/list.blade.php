@extends('layauts.base')
@section('title', 'Lista')
@section('content')

    <!--Mensaje de Modificacion-->
    @if(session('AlumnoModificado'))
        <div class="alert alert-success">
            {{session('AlumnoModificado')}}
        </div>
    @endif

    <!--Mensaje de Guardado-->
    @if(session('AlumnoGuardado'))
        <div class="alert alert-success">
            {{session('AlumnoGuardado')}}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">Alumnos</h1>

                <div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Grado</th>
                            <th>Correo</th>
                            <th>Docente</th>
                            <th>Foto</th>
                            <th>Acciones</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($estudiante as $estudiantes)
                        <tr>
                            <td>{{$estudiantes->nombre}}</td>
                            <td>{{$estudiantes->apellido}}</td>
                            <td>{{$estudiantes->grado}}</td>
                            <td>{{$estudiantes->correo}}</td>
                            <td>{{$estudiantes->nombre_docente}}</td>

                            <td>
                                <img src="{{asset('storage').'/'.$estudiantes->foto}}" width="100px" att="">
                            </td>

                        <td>
                            <div class="btn-group">

                                <a href="{{ route('editform', $estudiantes->id) }}" class="btn btn-primary mb-3 mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('delete', $estudiantes->id) }}" class="Alert-danger" method="POST">
                                    @method('DELETE') @csrf

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </form>
                            </div>
                        </td>
                        </tr>

                        @endforeach
                        </tbody>

                    </table>
                </div>
                <a class="btn btn-success mb-4" href="{{url('/create')}}">
                    <i class="fas fa-user-plus"> AGREGAR</i>
                </a>

                <!--paginas-->
                {{ $estudiante->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


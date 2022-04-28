@extends('layauts.base')
@section('title', 'Lista de Profesores')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">Docente</h1>

                <a class="btn btn-success mb-4" href="{{url('/formDocente')}}">AGREGAR</a>


                <div class="col-xl-30">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Profersor</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($docente as $docentes)
                            <tr>

                                <td>{{$docentes->id_docente}}</td>
                                <td>{{$docentes->nombre_docente}}</td>
                                <td>
                                    <div class="btn-group">

                                        <a  class="btn btn-primary mb-3 mr-2">
                                            <i class="fas fa-pencil-alt"></i></a>


                                            @method('DELETE') @csrf

                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>

                                        </form>
                                    </div>
                                </td>
                                <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

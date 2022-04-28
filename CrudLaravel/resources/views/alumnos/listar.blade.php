@extends('layauts.base')
@section('title', 'Lista')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">ALUMNOS</h1>

                <a class="btn btn-success mb-4" href="{{url('/form')}}">AGREGAR</a>

                <div class="col-xl-30">
                    <table class="table table-bordered table-striped text-center" style="background-color: #718096;">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Grado</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                    </table>
                </div>
        </div>
    </div>



@endsection

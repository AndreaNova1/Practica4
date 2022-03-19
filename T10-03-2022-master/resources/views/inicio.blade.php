@extends('layout/plantilla')

@section('tituloPagina', 'Datos del Registro')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="cold-md-11">
            <h1 class="text-center mb-5">Estudiantes</h1>
            <p>
            <a href="{{route('estudiante.create')}}" class="btn btn-success mb-4">Registrar</a>
            </p>
            @php()
            print_r($datos);
            @endphp
            <div class="col-xl-30">
                <br>
                <table class="table table-bordered table-striped text-center" style="background-color: #2C9086";>
                    <thead >
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Grado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    </thead>

                    <tbody class="table table-bordered table-striped text-center"  style="background-color: #A5E4DE";>
                    @foreach($estudiantes as $estudiante)
                    <tr>
                        <th>{{$estudiante->id}}</th>
                       <th>{{$estudiante->nombre}}</th>
                        <th>{{$estudiante->apellido}}</th>
                        <th>{{$estudiante->correo}}</th>
                        <th>{{$estudiante->telefono}}</th>
                        <th>{{$estudiante->grado}}</th>
                    <ht></ht>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            <!--paginas-->


        </div>
    </div>
</div>
@endsection

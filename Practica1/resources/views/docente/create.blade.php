@extends('layauts.base')
@section('title', 'Formulario de Profesores')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">


                <div class="card border-success">
                    <form action="{{ route('docente.save')}}" method="POST" enctype="multipart/form-data" class="alerta">
                        @csrf

                        <div class="card-header border-success "; >AGREGAR DOCENTE</div>

                        <div class="card-body">

                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre_docente">
                            </div>


                            <div class="row form-group">
                                <button type="submit" class="btn btn col-md-9 offset-2 text-dark mb-2" >Guardar</button>

                                <a class="btn btn-outline-secondary col-md-9 offset-2 text-dark" href="{{url('/docente')}}" role="button">Regresar</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection



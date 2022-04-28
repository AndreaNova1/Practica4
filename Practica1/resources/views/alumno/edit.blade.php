@extends('layauts.base')
@section('title', 'Lista')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <div class="card border-success">

    <div class="card-header border-success text-center" style="background-color: #3193A5"; >MODIFICAR ESTUDIANTE</div>
    <div class="card-body" style="background-color: #C6F1F9;">
        @if(session('alumnoGuardado' ))
            <div class="alert alert-success">
                {{session('AlumnoGuardado')}}
            </div>
        @endif
        <form action="{{route('edit', $estudiante->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PATCH')
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$estudiante->nombre}}">
            </div>

            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="{{$estudiante->apellido}}">
            </div>

            <div class="form-group">
                <label for="Grado">Grado</label>
                <input type="text" class="form-control" name="grado" value="{{$estudiante->grado}}">
            </div>

            <div class="form-group">
                <label for="Correo">Correo</label>
                <input type="text" class="form-control" name="correo" value="{{$estudiante->correo}}">
            </div>


            <input type="file" class="form-control" name="foto" value="" id="foto" >

            <div>
                <button type="submit" class="btn btn-success">Modificar</button>
                <a class="btn btn-primary" href="{{url('/')}}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Regresar</a>

            </div>
        </form>
                </div>

            </div>
        </div>
    </div>
    </div>

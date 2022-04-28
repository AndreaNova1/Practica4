@extends('layauts.base')
@section('title', 'Lista')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <div class="card border-success">

                    <div class="col-md-1 mt-1"></div>
                        <div class="card-header border-success text-center"; >AGREGAR ESTUDIANTE</div>
                            <div class="card-body">
                                 @if(session('alumnoGuardado' ))
                            <div class="alert alert-success">
                                {{session('AlumnoGuardado')}}
                            </div>
                        @endif
                                     <form action="{{ route('alumno.save')}}" method="POST" enctype="multipart/form-data" class="alerta">
                            @csrf
                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                                    <br>
                                <div class="form-group">
                                    <label for="Apellido">Apellido</label>
                                    <input type="text" class="form-control" name="apellido">
                                </div>
                                    <br>
                                <div class="form-group">
                                    <label for="Grado">Grado</label>
                                    <input type="text" class="form-control" name="grado">
                                </div>
                                    <br>
                                <div class="form-group">
                                    <label for="Correo">Correo</label>
                                    <input type="text" class="form-control" name="correo">
                                </div>
                                    <br>

                                <input type="file" class="form-control" name="foto" value="" id="foto" >
                                    <br>
                                    <br>
                                         <div class="row mb-3">
                                             <div class="col-6 offset-3">
                                                 <div class="form-group">
                                                     <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Proferosor</label>
                                                     <select name="id_profer" class="custom-select mr-sm-2" id="inlineFormCustomSelect" >
                                                         <option class="align-self-center text-center" value="">--Profesores--</option>

                                                         @foreach($profer as $profers)
                                                             <option value="{{$profers->id_profer}}"> {{$profers->nombre_profe}}  </option>
                                                         @endforeach

                                                     </select>
                                                 </div>
                                             </div>
                                         </div>

                                         <br>
                                    <div>

                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a class="btn btn-primary" href="{{url('/list')}}" class="btn btn-primary">
                                        <span class="fas fa-user-plus"></span>Regresar</a>
                                        </div>
                        </form>

                </div>
            </div>
        </div>
    </div>
@endsection

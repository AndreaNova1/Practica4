@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Formulario') <!--nombre pagina, nombre de seccion-->
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">

                        <div class="card-header border-success text-center text-white" style="background-color: #196F3D"; >AGREGAR USUARIO</div>

                        <div class="card-body" style="background-color: #D4EFDF;">

                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Grado</label>
                                <input type="text" name="grado" class="form-control col-md-9">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Email</label>
                                <input type="text" name="correo" class="form-control col-md-9">
                            </div>

                            <div class="input-group mb-3 col-md-13">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Eliga un archivo</label>
                                </div>
                            </div>


                            <div class="row form-group">
                                <button type="submit" class="btn btn col-md-9 offset-2 text-dark mb-2" style="background-color: #58D68D;">Guardar</button>

                                <a class="btn btn-outline-secondary col-md-9 offset-2 text-dark" href="{{url('/')}}" role="button">Regresar</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

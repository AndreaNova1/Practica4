<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>INFORMACION ESTUDIANTIL</title>
</head>
<body class="container">
<div class="container col-xl-12 mt-5 text-white">
    <h4>DATOS GENERALES</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action ="{{url('/estudiante')}}" method="get">
                <div class="form-row">
                    <div class="col-auto-my-1">
                        <a href="{{url('Estudiantes/create')}}" class="btn btn-success"> Formulario de Registro</a>
                    </div>
                    <div class="col-auto-my-1">
                        <a href="{{url('/')}}" class="btn btn-success"> salir</a>
                    </div>
                </div>
            </form>
        </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>correo</th>
                        <th>direccion</th>
                        <th>telefono</th>
                        <th>grado</th>

                        <th>opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>

                            <td>{{$estudiante->id}}</td>
                            <td>{{$estudiante->nombre}}</td>
                            <td>{{$estudiante->apellido}}</td>
                            <td>{{$estudiante->correo}}</td>
                            <td>{{$estudiante->direccion}}</td>
                            <td>{{$estudiante->telefono}}</td>
                            <td>{{$estudiante->grado}}</td>
                            <td>
                                <a href="{{ url('/Estudiantes/'.$estudiante->id.'Estudiantes/edit') }}" class="btn btn-success">Editar</a>
                                <form action="{{ url('/Estudiantes/'.$estudiante->id) }}" class="d-inline" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input class="btn btn-danger" type="submit" onclick="return confirm('Deseas borrar a este Alumno?')"
                                           value="Eliminar">
                                </form>

                            </td>

                    @endforeach
                    </tbody>
                </table>
                <!--paginas-->
                {{ $estudiantes->onEachSide(3)->links() }}

            </div>
        </div>
    </div>
</div>
</body>
</html>

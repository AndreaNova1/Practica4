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
    <title>Editar Datos</title>
</head>
<body class="container">

<div class="container col-xl-5 mt-5 bg-secondary text-white">
    <h4>EDITAR DATOS DE REGISTRO</h4>
    <div class="row">
        <div class="col-xl-11">
            <form action="{{url('/Estudiantes.update', $estudiante->id)}}" method="pots">
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="50" value="{{$estudiante->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido" required maxlength="50" value="{{$estudiante->apellido}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" class="form-control" name="correo" required maxlength="50" value="{{$estudiante->correo}}">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" name="direccion" required maxlength="50" value="{{$estudiante->direccion}}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" name="telefono" required maxlength="50" value="{{$estudiante->telefono}}">
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado</label>
                        <input type="text" class="form-control" name="grado" required maxlength="50" value="{{$estudiante->grado}}">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Guardar">
                    <a href="{{ url('/Estudiantes') }}" class="btn btn-danger">Cancelar</a>
                    <a href="{{url('/')}}"class="btn btn-primary"> Regresar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_ALUMNOS@yield('title')</title>

    <!--Estilos de Boopstrap y CSS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--Se agrega Boostrap a traves de el CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Para agragar el icono de basurero-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <a class="navbar-brand" href="#">
        <img src="https://umg.edu.gt/assets/umg.png" width="40" height="40" alt="">
    </a>
    <a class="navbar-brand" >SISTEMA DE REGISTRO ESTUDIANTIL</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"> </ul>
        <li class="nav-link">
            <a  href=" {{ url('/') }}" class="btn btn-outline-btn bg-info text-white " type="submit">Inicio</a>
        </li>
        <li class="nav-link">
            <a  href=" {{ url('/list') }}" class="btn btn-outline-btn bg-info text-white " type="submit">Tabla de Datos</a>
        </li>
        <li class="nav-link">
            <a  href=" {{ url('/create') }}" class="btn btn-outline-btn bg-info text-white" type="submit">Creacion de Datos</a>
        </li>
        <li class="nav-link">
            <a   class="btn btn-outline-btn bg-info text-white" type="submit">Categoria</a>
        </li>
    </div>
</nav>
<div class="container">
@yield('content') <!--para navbar-->
</div>

@yield('js')<!--Ayuda con mostrar el mensaje de error-->
</body>
</html>


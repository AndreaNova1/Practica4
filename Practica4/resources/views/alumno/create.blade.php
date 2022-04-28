<!--formulario que tendra los datos en comun con create y edit-->
<div class="card-body">
    <div class="container align-content-center">
        <form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="box box-info padding-1">

                <div class="box-footer mt-8">
                    @include('alumno.form', ['modo'=>'Crear']);

                </div>
            </div>

        </form>
    </div>
</div>

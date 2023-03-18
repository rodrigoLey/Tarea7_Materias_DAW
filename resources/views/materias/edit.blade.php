Formulario de edicion de Asignaturas.

<form action="{{ url('/materias/'.$materias->id) }}" method="post" enctype="multipart/form-data" >
@csrf
{{ method_field('PATCH') }}

@include('materias.form');

</form>
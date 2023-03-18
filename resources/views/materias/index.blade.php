Mostrar Asignaturas y Calificaciones
<br>
<a href="{{ url('materias/create') }}"> Registrar Nueva Asignatura </a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad_1</th>
            <th>Calificacion_Act_1</th>
            <th>Actividad_2</th>
            <th>Calificacion_Act_2</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $materias as $materias )
        <tr>
            <td>{{ $materias->id }}</td>
            <td>{{ $materias->Asignatura }}</td>
            <td>{{ $materias->Actividad_1 }}</td>
            <td>{{ $materias->Calificacion_Act_1 }}</td>
            <td>{{ $materias->Actividad_2 }}</td>
            <td>{{ $materias->Calificacion_Act_2 }}</td>
            <td>
            
            <a href="{{ url('/materias/'.$materias->id.'/edit') }}">
                Editar 
            </a>
             | 
            
            <form action="{{ url('/materias/'.$materias->id ) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Deseas borrar este registro?')" value="Borrar">

            </form>

            </td>
            <td></td>
        </tr>
        @endforeach

    </tbody>

</table>
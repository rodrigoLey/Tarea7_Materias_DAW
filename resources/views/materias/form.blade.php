<br>
<label for="Asignatura"> Asignatura: </label>
<input type="text" name="Asignatura" value="{{ isset($materias->Asignatura)?$materias->Asignatura:'' }}" id="Asignatura" >
<br>
<label for="Actividad_1"> Actividad_1: </label>
<input type="text" name="Actividad_1" value="{{ isset($materias->Actividad_1)?$materias->Actividad_1:'' }}" id="Actividad_1" >
<br>
<label for="Calificacion_Act_1"> Calificacion_Act_1: </label>
<input type="text" name="Calificacion_Act_1" value="{{ isset($materias->Calificacion_Act_1)?$materias->Calificacion_Act_1:'' }}" id="Calificacion_Act_1" >
<br>
<label for="Actividad_2"> Actividad_2: </label>
<input type="text" name="Actividad_2" value="{{ isset($materias->Actividad_2)?$materias->Actividad_2:'' }}" id="Actividad_2" >
<br>
<label for="Calificacion_Act_2"> Calificacion_Act_2: </label>
<input type="text" name="Calificacion_Act_2" value="{{ isset($materias->Calificacion_Act_2)?$materias->Calificacion_Act_2:'' }}" id="Calificacion_Act_2" >
<br>
<input type="submit" value="Guardar datos" >

<a href="{{ url('materias/') }}"> Regresar </a>

<br>
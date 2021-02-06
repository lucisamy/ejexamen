@csrf
<input type="hidden" name="project_id" value="{{$project_id}}">
<label>
  Nombre estudiante
  <br>
  <input type="text" name="nombre" value="{{ old('nombre',$estudiante->nombre) }}">
</label>
<br>
<label>
  DNI estudiante
  <br>
  <input type="text" name="dni" value="{{ old('dni',$estudiante->dni) }}">
</label>
<br>
<button>{{$btnText}}</button>

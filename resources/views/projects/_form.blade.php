<!-- el csrf hay que incluirlo  siempre en elos form para que envie un token hidden -->
@csrf
<label>
  Título del proyecto
  <br>
  <input type="text" name="title" value="{{ old('title',$project->title) }}">
</label>
<br>
<label>
  Descripción del poryecto
  <br>
  <textarea name="description">{{ old('description' ,$project->description) }}</textarea>
</label>
<br>
<label>
  URL del poryecto
  <br>
  <input type="text" name="url"  value="{{ old('url' ,$project->url) }}">
</label>
<br>
<button>{{$btnText}}</button>

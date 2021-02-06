<!-- carga la view layout -->
@extends('layout')

@section('title','proyectos')

@section('content')
  <!-- va remplazar el yield(content) de la layout.blade con lo que metamos aqui -->
  <h1>Proyectos</h1>
  <a href=" {{ route('projects.create') }}"> Crear proyecto</a>
  <hr>
  <table border=1>
    <tr>
      <th>Título</th>
      <th>Descrip</th>
      <th>Creado</th>
      <th>Actualizado</th>
      <th>URL</th>
    </tr>
    @forelse ($projects as $project)
      <tr>
        <td><a href=" {{ route('projects.show',$project) }}">{{ $project->title }}</a></td>
        <td><small> {{ $project->description }}</small></td>
        <td>{{ $project->created_at-> format('d-m-Y') }}</td>
        <td>{{ $project->updated_at->diffForHumans() }}</td>
        <td><a href=" {{ route('projects.show',$project) }}">{{ $project->url }}</a></td>
      </tr>
    @empty
        <tr><td>No hay proyectos para mostrar</td></tr>
    @endforelse
  </table>
@endsection

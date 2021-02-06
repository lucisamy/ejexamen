@extends('layout')

@section('title','proyecto | ' . $project->title)


@section('content')
  <h1>{{ $project -> title }}</h1>
  <a href="{{ route('projects.edit', $project) }}">Editar Proyecto</a>
  <h4>Descripción:</h4>
  <p>{{ $project -> description }}</p>
  <h4>Creado:</h4>
  <p>{{ $project -> created_at->diffForHumans() }}</p>
  <form method="POST" action="{{ route('projects.destroy', $project) }}">
    @csrf
    @method('DELETE')
    <button>Eliminar Proyecto</button>
  </form>
  <hr>
  <a href="{{ route('estudiantes.create',  ['project_id'=>$project->id] )}}">Añadir Estudiante</a>
  @include('estudiantes.show')
@endsection

<!-- carga la view  layout -->
@extends('layout')

@section('title','Crear proyecto')

@section('content')
  <!-- va remplazar el yield(content) de la layout.blade con lo que metamos aqui -->
  <h1>Editar proyecto</h1>

  @include('partials.validation-errors')

  <form method="POST" action="{{ route('projects.update',$project) }}">
<!-- el method('PATCH') es necesario en los formularios que llamaran a un update -->
    @method('PATCH')
    @include('projects._form', ['btnText' => 'Actualizar'])
  </form>
@endsection

<!-- carga la view layout -->
@extends('layout')

@section('title','Asinanar estudiante')

@section('content')
  <!-- va remplazar el yield(content) de la layout.blade con lo que metamos aqui -->
  <h1>Asignar nuevo estudiante</h1>

  @include('partials.validation-errors')

  <form method="POST" action="{{ route('estudiantes.store') }}">  
    @include('estudiantes._form', ['btnText' => 'Guardar'])
  </form>
@endsection

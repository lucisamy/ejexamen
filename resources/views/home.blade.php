<!-- carga la view layout -->
@extends('layout')

@section('title','Home gestion proyectos')

<!-- va remplazar el yield(content) de la layout.blade con lo que metamos aqui -->
@section('content')
  <h1>HOME</h1>
  <p>Ejercicio de aprendizaje.</p>
  <p>Gestión de proyectos y alumnos asignados.</p>
  <p>El objetivo es hacer una aplicación para llevar la gestión de proyectos
    en una universidad. Permitiendo crear, consultar, borrar y actualizar dichos proyectos.</p>
  <p>Deberá permitir asignar estudiantes a los proyectos. Crear estudiantes
    asociados a los proyectos (un estudiante solo pertenecerá a un proyecto, y
    un proyecto tendrá varios estudiantes), desde la vista de detalle del
    proyecto se mostraran los estudiantes asignados en un tabla, se debe
    permitir eliminar estudiantes asociados a un proyecto.</p>
@endsection

<!-- carga la view  layout -->
@extends('layout')

@section('title','Crear proyecto')

@section('content')

<h1>Formulario de contacto</h1>
<form action="{{route('contact')}}" method="POST">
  @csrf
  <input name="name" placeholder="Nombre..." value="{{ old ('name')}}"><br>
  {!! $errors->first('name','<small>:message</small><br>') !!}
  <input type="email" name="email" placeholder="Email..." value="{{ old ('email')}}"><br>
  {!! $errors->first('email','<small>:message</small><br>') !!}
  <textarea name="msg" placeholder="Mensaje...">{{ old ('msg') }}</textarea><br>
  {!! $errors->first('msg','<small>:message</small><br>') !!}
  <button>Enviar</button>
</form>
@endsection

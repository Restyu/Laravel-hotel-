@extends('layout')

@section('contenido')

  <h1>Editar Habitacion</h1>

  <form method="post" action="/habitaciones/{{ $habitacione->id }}">
      {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <textarea name="nombre" class="form-control">{{ $habitacione->nombre }}</textarea>
    </div>
    <div class="form-group">
      <textarea name="estado" class="form-control">{{ $habitacione->estado }}</textarea>
    </div>
    <div class="form-group">
      <textarea name="plazas" class="form-control">{{ $habitacione->plazas }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">actualizar habitacion</button>
    </div>

    @if( count($errors) )
      @foreach ($errors->all() as $error)
        <span class="help-block">{{ $error }}</span>
      @endforeach
    @endif

  </form>

@stop

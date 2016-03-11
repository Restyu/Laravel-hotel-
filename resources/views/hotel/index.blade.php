@extends('layout')

@section('contenido')

    <h1>Hoteles</h1>

      @foreach($hoteles as $hotel)
        <div>
          <a href="{{ url('hoteles/'.$hotel->id)}}">{{ $hotel->nombre }}</a>
        </div>
      @endforeach


  <form method="post" action="">
      {{ csrf_field() }}

    <div class="form-group">
      <label>nombre hotel
        <input type="text" name="nombre" class="form-control" value="">
      </label>
    </div>
    <div class="form-group">
      <label>estrellas
          <input type="text" name="estrellas" class="form-control" value="">
      </label>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-info">Añadir hotel</button>
    </div>

    @if( count($errors) )
      @foreach ($errors->all() as $error)
        <span class="help-block">{{ $error }}</span>
      @endforeach
    @endif

  </form>

@stop

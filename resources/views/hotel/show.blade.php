@extends('layout')

@section('contenido')

      <h1>Nombre: {{ $hotel->nombre }}</h1>

      <h2>Estrellas: {{ $hotel->estrellas }}</h2>

        @foreach($hotel->habitaciones as $ha)
          <ul>
            <li class="list-group-item"> {{ $ha->nombre }}
              <form style="display: inline" class="pull-right" action="{{ url('habitaciones/'.$ha->id)}}" method="post">
                {{method_field('delete')}}
                {{ csrf_field() }}
                <button style="margin-left:5px; margin-bottom:5px;" type="submit" class=" btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
              </form>
              <a style="margin-left: 10px" class="pull-right"
                href="/habitaciones/{{ $ha->id }}/edit">
                <span class="pull-right glyphicon glyphicon-pencil"></span>
              </a>
            </li>
          </ul>
        @endforeach

        <h3>Añadir habitacion</h3>

        <form method="post" action="{{ url('habitaciones')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $hotel->id }}">

          <div class="form-group">
            <label>nombre de la habitacion
              <input type="text" name="nombre" class="form-control" value="">
            </label>
          </div>
          <div class="form-group">
            <label>estado  de la habitacion
                <input type="text" name="estado" class="form-control" value="">
            </label>
          </div>
          <div class="form-group">
            <label>plazas de la habitacion
                <input type="text" name="plazas" class="form-control" value="">
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info">Añadir habitacion</button>
          </div>

          @if( count($errors) )
            @foreach ($errors->all() as $error)
              <span class="help-block">{{ $error }}</span>
            @endforeach
          @endif

        </form>

@stop

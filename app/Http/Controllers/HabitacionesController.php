<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Habitacione;

class HabitacionesController extends Controller
{
  public function delete(Habitacione $habitacione){

    $hotele_id = $habitacione->hotele_id;

    $habitacione->delete();

    return redirect('hoteles');
  }

  public function edit(Habitacione $habitacione){

    return view('habitaciones.edit' ,  compact('habitacione') );
  }

  public function update(Request $request, Habitacione $habitacione){

    $this->validate($request , [
        'nombre' => 'required|string',
        'estado' => 'required|string',
        'plazas' => 'required|numeric',
      ],[
        'required' => 'El campo esta vacio.',
        'plazas.numeric' => 'Debe ser numerico',

      ]);

    $habitacione->update( $request->all() );

    return redirect('hoteles');
  }

  public function store(Request $request, Habitacione $habitacione){

    $this->validate($request , [
        'nombre' => 'required|string',
        'estado' => 'required|string',
        'plazas' => 'required|numeric',
      ],[
        'required' => 'El campo esta vacio.',
        'plazas.numeric' => 'Debe ser numerico',

      ]);

    $habitacion = new Habitacione;
    $habitacion->nombre = $request->nombre;
    $habitacion->estado = $request->estado;
    $habitacion->plazas = $request->plazas;
    $habitacion->hotele_id = $request->id;

    $habitacion->save();

    return redirect('hoteles');
  }

}

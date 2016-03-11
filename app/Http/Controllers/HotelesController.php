<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotele;

class HotelesController extends Controller
{
    public function index(){

      $hoteles = Hotele::all();

    return view('hotel.index' , compact('hoteles') );

    }

    public function show(Hotele $hotel){

      return view('hotel.show', compact('hotel') );
    }

    public function store(Request $request){

          $this->validate($request , [
              'nombre' => 'required | min:10 ',
              'estrellas' => 'required|numeric',
            ],[
              'required' => 'El campo esta vacio.',
              'min' => 'El campo debe tener 10 caracteres',
              'estrellas.numeric' => 'Debe ser numerico',
            ]);

        $hotel = new Hotele;
        $hotel->nombre = $request->nombre;
        $hotel->estrellas = $request->estrellas;
        $hotel->save();

        return redirect('hoteles');
    }
}

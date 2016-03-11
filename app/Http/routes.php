<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::get('/',function(){
    return redirect('hoteles');
  });

  Route::get('hoteles' , 'HotelesController@index');
  Route::get('hoteles/{hotel}' , 'HotelesController@show');
  Route::post('hoteles' , 'HotelesController@store');

  Route::delete('habitaciones/{habitacione}'   , 'HabitacionesController@delete');
  Route::get('habitaciones/{habitacione}/edit' , 'HabitacionesController@edit');
  Route::patch('habitaciones/{habitacione}'    , 'HabitacionesController@update');
  Route::post('habitaciones' , 'HabitacionesController@store');



});

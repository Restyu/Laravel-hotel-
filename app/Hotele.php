<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Hotele extends Model
{
    public function habitaciones(){

      return $this->hasMany(Habitacione::class);
    }
}

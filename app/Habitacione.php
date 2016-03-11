<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Habitacione extends Model
{
    protected $fillable = ['nombre','plazas','estado'];

    public function hotele(){

      return $this->belongsTo(Hotele::class);
    }
}

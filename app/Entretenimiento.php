<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entretenimiento extends Model
{
    public function inmueble(){
      return $this->belongTo('App\Inmueble','inmueble_id');
    }
}

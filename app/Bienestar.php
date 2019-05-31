<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bienestar extends Model
{
    public function inmueble(){
      return $this->belongTo('App\Inmueble','inmueble_id');
    }
}

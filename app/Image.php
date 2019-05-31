<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function inmueble(){
      return $this->belongTo('App\Inmueble','inmueble_id');
    }
}

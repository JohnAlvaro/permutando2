<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;

class InmuebleController extends Controller
{
    public function store(Request $request){
        $inmueble = new Inmueble();
        return $inmueble->crear($request);
    }

    //Buscadores
    public function buscarTipo($tipo){
        return Inmueble::where('tipo',$tipo)->get();

    }
}

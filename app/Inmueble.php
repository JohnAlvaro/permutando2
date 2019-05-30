<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Inmueble;
use App\Zonas;
use App\Viveres;
use App\Transporte;
// use App\Entretenimiento;
class Inmueble extends Model
{
    public function crear($request){
        $inmueble =new Inmueble();
        $inmueble->tipo = $request->tipo;
        $inmueble->barrio = $request->barrio;
        $inmueble->direccion = $request->direccion;
        $inmueble->estrato = $request->estrato;
        $inmueble->area = $request->area;
        $inmueble->habitaciones = $request->habitaciones;
        $inmueble->banos = $request->banos;
        $inmueble->balcon = (boolean)$request->balcon;
        $inmueble->terraza = (boolean)$request->terraza;
        $inmueble->parqueadero = (boolean)$request->parqueadero;
        $inmueble->porteria = $request->porteria;
        $inmueble->caracteristicas = $request->caracteristica;
        $inmueble->valor = $request->valor;
        $inmueble->mas_informacion = $request->mas_informacion;
        $inmueble->valor = $request->valor;

        if($request->file('image')){
            $inmueble->imagen = $request->file('image')->store('imagenes');
        }

        // $inmueble->departamento_id = $request->departamento;
        // $inmueble->ciudad_id = $request->ciudad;
        $inmueble->save();
        foreach ((array)$request->zonas as $item) {
            $zona = new Zonas();
             $zona->nombre = $item;
             $zona->inmueble_id = $inmueble->id;
             $zona->save();

        }
        foreach ((array)$request->transporte as $item) {
             $transporte = new Transporte();
             $transporte->nombre = $item;
             $transporte->inmueble_id = $inmueble->id;
             $transporte->save();
        }
        foreach ((array)$request->viveres as $item) {
             $viveres = new Viveres();
             $viveres->nombre = $item;
             $viveres->inmueble_id = $inmueble->id;
             $viveres->save();
        }
        foreach ((array)$request->bienestar as $item) {
             $bienestar = new Bienestar();
             $bienestar->nombre = $item;
             $bienestar->inmueble_id = $inmueble->id;
             $bienestar->save();
        }
        foreach ((array)$request->entretenimiento as $item) {
             $entretenimiento = new Entretenimiento();
             $entretenimiento->nombre = $item;
             $entretenimiento->inmueble_id = $inmueble->id;
             $entretenimiento->save();
        }
        foreach ((array)$request->educativo as $item) {
             $educativo = new Educativo();
             $educativo->nombre = $item;
             $educativo->inmueble_id = $inmueble->id;
             $educativo->save();
        }
        foreach ((array)$request->gastronomia as $item) {
             $gastronomia = new Gastronimia();
             $gastronomia->nombre = $item;
             $gastronomia->inmueble_id = $inmueble->id;
             $gastronomia->save();
        }
        foreach ((array)$request->mascotas as $item) {
             $mascotas = new Mascotas();
             $mascotas->nombre = $item;
             $mascotas->inmueble_id = $inmueble->id;
             $mascotas->save();
        }
        return $request->zonas;
    }
}

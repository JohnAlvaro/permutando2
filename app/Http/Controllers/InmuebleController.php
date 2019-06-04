<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Inmueble;
use App\Modo;

class InmuebleController extends Controller
{
    public function store(Request $request){
        $inmueble = new Inmueble();
        return $inmueble->crear($request);
    }
    public function detalle($id){
        $inmueble = Inmueble::find($id);
        return view('admin.inmueble.detalle')->with('inmueble',$inmueble);

    }

    public function lista(){
      $inmueble =  Inmueble::orderBy('id','DESC');
      return Datatables::of($inmueble)
                //  ->addColumn('btn','ixtus.partials.botones_suscripcion')
                ->addColumn('btn', function ($inmueble) {
                return '
                <a class="btn btn-primary btn-sm"  href=" '.url('detalle-inmueble', $inmueble->id) . '">
                  <i class="fa fa-eye"></i>
                </a>';
                })
                ->rawColumns(['btn'])
                ->make(true);
    }

    //Buscadores
    public function buscarTipo($tipo){
        return Inmueble::where('tipo',$tipo)->get();

    }
    public function buscarModo($tipo,$modo){
        $inmuebles;
        $modos = Modo::where('modo',$modo)->get(); 
        foreach ($modos as $m) {
           $id = $m->inmueble_id;

                $inmuebles += Inmueble::where('tipo',$tipo)->where('id',$id)->get();
           
        }
         return $inmuebles;
    }
    public function info($id){
        return Inmueble::find($id);

    }
}

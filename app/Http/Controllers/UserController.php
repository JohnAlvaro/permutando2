<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function registro(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return Redirect::to('/');
      }
        return Redirect::to('/');
    }

    public function autenticar(Request $request){
      if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return back();
      }
      return back();
    }
    public function logout(){
      Auth()->logout();
      return  Redirect::to('/');
    }


    public function lista(){
      $users =  User::orderBy('id','DESC');

      return Datatables::of($users)
                //  ->addColumn('btn','ixtus.partials.botones_suscripcion')
                ->addColumn('btn', function ($users) {
                return '
                <a class="btn btn-primary btn-sm"  href="#">
                  <i class="fa fa-eye"></i>
                </a>';
                })
                ->rawColumns(['btn'])
                ->make(true);
    }
}

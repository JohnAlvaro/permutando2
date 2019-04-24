<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

class UserController extends Controller
{
    public function registro(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return back();
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
}

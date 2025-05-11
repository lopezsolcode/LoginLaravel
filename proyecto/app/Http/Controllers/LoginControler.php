<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// agregados por mi para hacer el login
class LoginControler extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        //para guardarlo en base de datos
        Auth::login($user); 
        return redirect(route('secret'));
    }
    public function login(Request $request){
    }
    public function logout(Request $request){

    }

    }


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        
        $u = User::where(['email'=>$req->email])->first();
        if(!$u || !Hash::check($req->password, $u->password)){
            return view('login', ['err'=>"Username or password incorrect"]);
        }
        else{
            $req->session()->put('user', $u);
            return redirect('/');
        }
    }

    function signUp(Request $req){
        if (User::where('email', '=', $req->email)->exists()) {
            return view('test')->with(['ohh'=>true]);
        }
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->village = $req->village;
        $user->mobile = $req->mobile;
        $user->save();
        return $this->login($req);
    }
}

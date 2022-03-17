<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $req->validate([
            'email' => 'required|max:15',
            'password' => 'required|min:5'

        ]);

        $u = User::where(['email'=>$req->email])->first();
        if(!$u || !Hash::check($req->password, $u->password)){
            return "Username or password incorrect";
        }
        else{
            $req->session()->put('user', $u);
            return redirect('/');
        }
    }

    function register(Request $req){
        $req->validate([
            'name' => 'required|min:4|max:35|alpha',
            'email' => 'required',
            'mobile' => 
            array(
                'required',
                'regex:/^[0-9]{6, 15}/$'
            ),
            'password' => 'required|min:6|max:15',
            'village' => 'required|min:3|max:30',
            'password1' => 'required'
            

        ]);
        return $req -> input();
    }
}

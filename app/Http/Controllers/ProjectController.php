<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Favourites;
use Session;

class ProjectController extends Controller
{

    function index(){
        $data = Project::all();
        return view('project', ['projects'=>$data]);
    }

    function detail($id){
        $data  = Project::find($id);
        return view('detail', ['project'=>$data]);
    }

    function addToFavourites(Request $req){
        if($req->session()->has('user')){
            $favourites = new Favourites;
            $favourites->user_id = $req->session()->get('user')['id'];
            $favourites->product_id = $req->product_id;
            $favourites->save();
            return redirect('/');
        }
        else{
            return redirect('login');
        }
    }

    static function favouriteItem(){
        $userId = Session::get('user')['id'];
        return Favourites::where('user_id', $userId)->count();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Favourites;
use Session;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    function index(){
        $data = Project::all();
        return view('project', ['projects'=>$data]);
    }

    function detail($id){
        if(Session::has('user')){
            $user_id = Session::get('user')['id'];
            $isthere = DB::table('favourites')->where('favourites.user_id', $user_id)
            ->where('favourites.project_id', $id)
            ->count('favourites.project_id');

            $data  = Project::find($id);
            return view('detail', ['project'=>$data, 'isthere'=> $isthere]);
        }
        else{
            $data  = Project::find($id);
            return view('detail', ['project'=>$data, 'isthere'=> 0]);
        }
        
    }

    function addToFavourites(Request $req){
        if($req->session()->has('user')){
            $favourites = new Favourites;
            $favourites->user_id = $req->session()->get('user')['id'];
            $favourites->project_id = $req->project_id;
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

    function favouritesList(){
        $userId = Session::get('user')['id'];
        $projects = DB::table('favourites')
        ->join('projects', 'favourites.project_id', '=', 'projects.id')
        ->where('favourites.user_id', $userId)
        ->select('projects.*', 'favourites.id as favourite_id')
        ->get();

        return view('favouriteslist', ['projects'=>$projects]);
    }

    function  removeFavourite($id){
        Favourites::destroy($id);
        return redirect('favouriteslist');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Announcement;
use App\Models\Dailywork;

class GeneralController extends Controller
{
    function showGallery(){
        return view('gallery');
    }

    function showAboutUs(){
        return view('aboutus');
    }

    function showDailyWork(){
        $announcements = Announcement::all();
        $dailywork = Dailywork::all();
        return view('dailywork', ['announcements'=>$announcements, 'dailywork'=>$dailywork]);
    }

    function showHisabKitab(){
        return view('hisabkitab');
    }
}
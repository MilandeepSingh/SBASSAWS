<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Donation;
use Session;
use Illuminate\Support\Facades\DB;

class DonateController extends Controller
{
    function donate(){
        return view('donate');
    }

    function donateFinal(Request $req){
        if($req->session()->has('user')){
            $donation = new Donation;
            $donation->user_id = $req->session()->get('user')['id'];
            $donation->date = Carbon::now()->toDateString();
            $donation->amount = $req->amount;
            $donation->suggestions = $req->suggestions;
            $donation->save();
            return $donation->all();
            return redirect('/mypayments');
        }
        else{
            return redirect('/login');
        }        
    }

    function donationsList(){
        $user_id = Session::get('user')['id'];
        $total = DB::table('donations')->where('donations.user_id', $user_id)
                    ->sum('donations.amount');
        $info = DB::table('donations')->where('donations.user_id', $user_id)
                    ->select('donations.amount', 'donations.suggestions', 'donations.date')
                    ->orderBy('date', 'desc')
                    ->get();
        return view('donationslist', ['info'=>$info, 'total'=>$total]);
    }
}

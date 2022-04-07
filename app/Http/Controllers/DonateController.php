<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Donation;
use Session;
use Illuminate\Support\Facades\DB;
use Mail;


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
            $this->sendMail($req->amount);
            Session::put('justDonated', true);
            return redirect('/donationslist');
        }
        else{
            return view('login', ['need' => "You need to login first."]);;
        }        
    }

    function donationsList(){
        $user_id = Session::get('user')['id'];
        $total = DB::table('donations')->where('donations.user_id', $user_id)
                    ->sum('donations.amount');
        $info = DB::table('donations')->where('donations.user_id', $user_id)
                    ->select('donations.amount', 'donations.suggestions', 'donations.date')
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return view('donationslist', ['total'=>$total, 'info'=>$info]);
    }


    public function sendMail($amount){
        $user['to']=Session::get('user')['email'];
        $user['sub']='Thank you for donating...';
        $user_id = Session::get('user')['id'];
        $total = DB::table('donations')->where('donations.user_id', $user_id)
                    ->sum('donations.amount');
        $info = DB::table('donations')->where('donations.user_id', $user_id)
                    ->select('donations.amount', 'donations.suggestions', 'donations.date')
                    ->orderBy('created_at', 'desc')
                    ->get();
        $data=['name'=>Session::get('user')['name'], "total"=>$total, 'info'=>$info, 'amount'=>$amount];
        Mail::send('donationslist', $data, function($messages) use($user){
            $messages->to($user['to']);
            $messages->subject($user['sub']);
        });
    }
}

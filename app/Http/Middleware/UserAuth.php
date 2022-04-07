<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path() == 'login' && $request->isMethod('post')){

            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:5'
            ]);
        }

        if ($request->path() == 'donatefinal' && $request->isMethod('post')){
            
            $request->validate([
                'amount' => 'required|numeric|min:10'
            ]);
        }

        if ($request->path() == 'signup' && $request->isMethod('post')){
            
            $request->validate([
                'name' => array(
                    'required',
                    'Regex:/^[A-Za-z ]+$/',
                    'min:3',
                    'max:35'
                ),
                'email' => 'required|email',
                'mobile' => array(
                    'required',
                    'digits_between:6,15'
                ),
                'password' => 'required|min:6|max:15',
                'village' => 'required|min:3|max:30',
                'confirm_password' => 'required|same:password'
            ]);
        }

        if ($request->path() == 'login' && $request->session()->has('user')){
            return redirect('/');
        }

        return $next($request);
    }
}

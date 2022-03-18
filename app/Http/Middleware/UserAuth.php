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
                'email' => 'required|max:15',
                'password' => 'required|min:5'
            ]);
        }
        if ($request->path() == 'login' && $request->session()->has('user')){
            return redirect('/');
        }
        return $next($request);
    }
}

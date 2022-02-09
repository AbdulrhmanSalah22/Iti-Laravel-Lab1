<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class VerifyAge
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
       $birthDate  = auth()->user()->birth_date;
       $d = Carbon::parse($birthDate)->diff(Carbon::now())->format('%y years, %m months and %d days');
        if ($d > 25){
            return $next($request);
        }

        else abort(403);
    }
}

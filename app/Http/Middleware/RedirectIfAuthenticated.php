<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointement;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

      
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }

            
        if ($guard == "clinic" && Auth::guard($guard)->check()) {

            $appointement = Appointement::where('status' , 1)->with('appointement' , $appointement);

            return redirect('/appointement');
        }
        if ($guard == "secretary" && Auth::guard($guard)->check()) {

            $appointement = Appointement::where('status' , 0)->get();

            return redirect('/index_admin')->with('appointement' , $appointement);
        }
        }

        return $next($request);
    }
}

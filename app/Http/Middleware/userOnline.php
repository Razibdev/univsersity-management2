<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Carbon\Carbon;
use Cache;
use Auth;



class userOnline
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $UserOnlineExpiredTime = Carbon::now()->addMinute(1);
            Cache::put('user-online'. Auth::user()->id, true, $UserOnlineExpiredTime);
        }
        return $next($request);
    }
}

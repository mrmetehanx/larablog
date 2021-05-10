<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class trackVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     public function __construct(RateLimiter $limiter)
     {
         $this->limiter = $limiter;
     }

    public function handle(Request $request, Closure $next, $hitDelayInMinute = 600)
    {
        $key = sha1($request->fullUrl().'|'.$request->ip());
        if(!$this->limiter->tooManyAttempts($key,1))
        {
        Article::where('slug', request()->segment(2))->increment('visit');
        }
        $this->limiter->hit($key, $hitDelayInMinute);

        return $next($request);
    }
}

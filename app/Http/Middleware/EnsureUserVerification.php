<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class EnsureUserVerification
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

        if (! $request->user() || ! $request->user()->hasVerifiedEmail()) {
        return $request->expectsJson()
                ? abort(403, 'Your email address is not verified.')
                : Redirect::route('user.verification.notice');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUsertype
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$usertypes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$usertypes): Response
    {
        $user = $request->user();

        if ($user && in_array($user->usertype, $usertypes)) {
            return $next($request);
        }

        return redirect('/');  // Arahkan ke halaman lain jika pengguna tidak memiliki peran yang sesuai
    }
}

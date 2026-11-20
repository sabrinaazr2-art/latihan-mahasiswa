<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogin
{
    /**
     * Handle an incoming request. (Modul Hal. 37-38)
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah ada session logged_in
        if (!session('logged_in')) {
            // Jika tidak ada maka kembali ke halaman login
            return redirect('/');
        }

        return $next($request);
    }
}

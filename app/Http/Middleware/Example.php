<?php

namespace App\Http\Middleware;

use Closure;
use DragonCode\Contracts\Cashier\Auth\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Example
{
    public function handle(Request $request, Closure $next): Response
    {
        return redirect()->route('no-access');
        // return $next($request);
    }
}

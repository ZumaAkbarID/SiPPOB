<?php

namespace App\Http\Middleware;

use App\Traits\ResponseJson;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifySecret
{
    use ResponseJson;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->header('SECRET') || $request->header('SECRET') !== config('secret.token'))
            return $this->response_secret();

        return $next($request);
    }
}

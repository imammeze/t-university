<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Footer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class FooterMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $datafooter = Footer::first();
        view()->share('datafooter', $datafooter);
        return $next($request);
    }
}
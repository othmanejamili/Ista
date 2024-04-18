<?php
namespace App\Http\Middleware;

use Closure;

class AddWebLayoutHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->header('x-app-web-layout', 'your_layout_value');
        return $response;
    }
}


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class PdfCors
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
        $response = $next($request);

        // Check if the response is a download response and the file extension is PDF
        if ($response instanceof Response && $request->route()->getName() === 'route.for.cv.download') {
            // Set CORS headers for PDF download
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With, Application');
        }

        return $response;
    }
}

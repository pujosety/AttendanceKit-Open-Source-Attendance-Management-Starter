<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureApiKey
{
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        // Laravel auth middleware handles it; keep for future API-key compatibility
        return $next($request);
    }
}

<?php

use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Providers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

return function (Providers $providers, Middleware $middleware, Exceptions $exceptions) {
    $providers->core([
        \App\Providers\AppServiceProvider::class,
        \App\Providers\AttendanceKitServiceProvider::class,
    ]);

    $middleware->assign([
        'auth' => \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        'auth.api' => \Illuminate\Auth\Middleware\Authenticate::class,
    ]);

    $exceptions->render(function (\Throwable $e, Request $request, Response $response) {
        // Simple rendering surface; refine later if needed
    });
};

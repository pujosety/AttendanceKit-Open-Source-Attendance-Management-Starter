<?php

declare(strict_types=1);

use App\Http\Middleware\ForceJson;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

$kernel = new class extends \Illuminate\Foundation\Http\Kernel {
    protected $middleware = [
        ForceJson::class,
    ];

    protected $middlewareGroups = [
        'api' => [
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];
};

return $kernel;

<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Facade;
use Illuminate\Routing\RoutingServiceProvider;

return [
    'providers' => [
        // Core Laravel providers would normally go here.
        RoutingServiceProvider::class,
    ],
];

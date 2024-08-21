<?php

use Illuminate\Foundation\Application;

// Create a new Laravel application instance
$app = new Application(
    dirname(__DIR__)
);

// Bind important interfaces into the container
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Return the application instance
return $app;
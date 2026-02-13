<?php

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Request;

return LaravelApplication::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        // Let Laravel handle the 'web' group automatically.
        // We only need to add our specific customizations here.

        $middleware->alias([
            'auth' => Authenticate::class,
            'throttle' => ThrottleRequests::class,
            'bindings' => SubstituteBindings::class,
        ]);

        // If you need to disable CSRF for a specific test, do it like this:
        // $middleware->validateCsrfTokens(except: ['login']);
        
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Your existing exception handling...
        $exceptions->render(function (QueryException $e, Request $request) {
            return response()->view('errors.custom', [
                'status' => 500,
                'message' => 'Database connection problem.'
            ], 500);
        });
    })
    ->create();
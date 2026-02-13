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
        // Register route middleware aliases
        $middleware->alias([
            'auth' => Authenticate::class,
            'throttle' => ThrottleRequests::class,
            'bindings' => SubstituteBindings::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Handle database errors
        $exceptions->render(function (QueryException $e, Request $request) {
            return response()->view('errors.custom', [
                'status' => 500,
                'message' => 'Database connection problem. Please try again later.'
            ], 500);
        });

        // Handle HTTP exceptions
        $exceptions->render(function (HttpException $e, Request $request) {
            return response()->view('errors.custom', [
                'status' => $e->getStatusCode(),
                'message' => 'Something went wrong.'
            ], $e->getStatusCode());
        });

        // Handle all other exceptions
        // $exceptions->render(function (Throwable $e, Request $request) {
        //     return response()->view('errors.custom', [
        //         'status' => 500,
        //         'message' => 'Unexpected server error.'
        //     ], 500);
        // });
    })
    ->create();
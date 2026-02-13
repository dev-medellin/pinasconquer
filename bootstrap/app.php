<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
        $exceptions->render(function (QueryException $e, $request) {
            return response()->view('errors.custom', [
                'status' => 500,
                'message' => 'Database connection problem. Please try again later.'
            ], 500);
        });

        $exceptions->render(function (HttpException $e, $request) {
            return response()->view('errors.custom', [
                'status' => $e->getStatusCode(),
                'message' => 'Something went wrong.'
            ], $e->getStatusCode());
        });

        $exceptions->render(function (\Throwable $e, $request) {
            return response()->view('errors.custom', [
                'status' => 500,
                'message' => 'Unexpected server error.'
            ], 500);
        });
    })->create();

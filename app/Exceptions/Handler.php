<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    // Don't forget these properties
    protected $levels = [];
    protected $dontReport = [];
    protected $dontFlash = ['current_password', 'password', 'password_confirmation'];

    public function register(): void
    {
        //
    }

    public function render($request, Throwable $exception)
    {
        $status = $exception instanceof \Illuminate\Http\Exceptions\HttpResponseException 
                  ? $exception->getResponse()->getStatusCode()
                  : ($exception->getCode() ?: 500);

        return response()->view('errors.custom', ['exception' => $exception], $status);
    }
}
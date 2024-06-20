<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (ValidationException $ve, Request $request) {
            if ($request->is('api/*'))
                return response()->json([
                    'status' => false,
                    'message' => $ve->getMessage(),
                    'errors' => $ve->errors()
                ], 422);
        });

        $exceptions->render(function (AuthenticationException $ae, Request $request) {
            if ($request->is('api/*'))
                return response()->json([
                    'status' => false,
                    'message' => $ae->getMessage(),
                    'errors' => 'authorization'
                ], 401);
        });
    })->create();

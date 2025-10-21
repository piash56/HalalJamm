<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Custom 404 page for frontend
        $exceptions->render(function (Illuminate\Http\Exceptions\HttpResponseException $e, $request) {
            if ($e->getResponse()->getStatusCode() === 404) {
                return response()->view('errors.404', [], 404);
            }
        });

        // Handle 404 errors
        $exceptions->render(function (Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, $request) {
            if ($request->is('admin/*')) {
                return response()->view('admin.pages.404', [], 404);
            }
            return response()->view('errors.404', [], 404);
        });
    })->create();

<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Mockery\Exception\InvalidOrderException;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
       /* $exceptions->render(function (InvalidOrderException $e, Request $request, Response $response) {
            if ($request->getStatusCode() === 419 || $request->getStatusCode() === 404) {
                return back()->with([
                    'message' => 'The page expired, please try again.',
                ]);
                return redirect()->route('site.index');
            }
            //return response()->view('errors.invalid-order', [], 500);
        });*/

    })->create();

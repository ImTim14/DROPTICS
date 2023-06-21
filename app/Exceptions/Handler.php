<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
        InsuraModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Throwable $e
     * @return void
     */
    public function report(Throwable $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Throwable $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $e)
    {
        //dd($e->getMessage());
        if ($e instanceof ModelNotFoundException) {
            $e = new NotFoundHttpException($e->getMessage(), $e);
        }
        if ($e instanceof InsuraModelNotFoundException) {
            $response = null;
            if ($e->getBack()) {
                $response = response(trans($e->getMessage()), 404);
            } else {
                $response = redirect()->back()->withErrors(array(
                    trans($e->getMessage())
                ))->withInput();
            }
            return $response;
        }
        if (str_contains($e->getMessage(), "The email has already been taken.")) {
            $response = response(trans($e->getMessage()), 500);
            return $response;
        }

        return parent::render($request, $e);
    }
}

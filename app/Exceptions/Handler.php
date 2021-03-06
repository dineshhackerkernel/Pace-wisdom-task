<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Arr;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException'
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof \Illuminate\Auth\AuthenticationException){
            $guard = Arr::get($exception->guards(), 0);
            switch($guard)
            {
                case 'admin':
                    return redirect(route('admin.login'));
                    break;
                case 'subadmin':
                    return redirect(route('sub.admin.login'));
                    break;
                default:
                    return redirect(route('login'));
                    break;
            }
        }

        if ($this->isHttpException($exception)){
            return $this->renderHttpException($exception);
        }else{
            return parent::render($request, $exception);
        }

        return parent::render($request, $exception);
    }
}

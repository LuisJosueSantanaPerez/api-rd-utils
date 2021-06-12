<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\NotFoundHttpException;
use App\Tools\ResponseCodes;

trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($this->isModel($e)) {
            return $this->modelResponse($e);
        }

        //NOT WORKING FROM HERE ON LARAVEL 8 - WORKING FROM API ROUTES
        if ($this->isHttp($e)) {
            return $this->httpResponse($e);
        }

        return parent::render($request, $e);
    }


    protected function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    protected function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }

    protected function modelResponse($e)
    {
        return response()->json(['status' => 'error', 'message' => 'Resource not found'], ResponseCodes::NOT_FOUND);

    }

    protected function httpResponse($e)
    {
        return response()->json(['status' => 'error', 'message' => 'Incorrect Route [Trait]'], ResponseCodes::NOT_FOUND);
    }
}
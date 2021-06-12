<?php

namespace App\Exceptions;
use App\Tools\ResponseCodes;

use Exception;

class SomethingWentWrong extends Exception
{
    public function render()
    {
        return response()->json(['status' => 'error', 'message' => 'Something Went Wrong'], ResponseCodes::UNPROCESSABLE_ENTITY);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function success($message, $data = null)
    {
        return response()->json([
           'status' => 'success',
            'message' => $message ?? 'operation successfully',
            'data' => $data
        ]);
    }

    public function error($message, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message ?? 'error occured',
            'data' => $data
        ]);
    }
}

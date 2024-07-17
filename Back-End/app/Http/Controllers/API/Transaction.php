<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\ResponseJson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Transaction extends Controller
{
    use ResponseJson;

    function placeOrder(Request $request): JsonResponse
    {
        return $this->response_success('Sukses!', 200, [
            'payload' => $request->except('_token'),
            'user' => Auth::guard('sanctum')->user() ?? 'Anonim',
            'token' => $request->header('Authorization')
        ]);
    }
}
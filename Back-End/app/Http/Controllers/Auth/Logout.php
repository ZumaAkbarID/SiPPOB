<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\ResponseJson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
    use ResponseJson;

    function login(Request $request): JsonResponse
    {
        try {
            Auth::logout();
            return $this->response_success('Success!', 200, []);
        } catch (\Exception $e) {
            return $this->response_error('Failed!', 404, [
                'error' => $e->getMessage()
            ]);
        }
    }
}

<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseJson
{
    public function response_error(string $message, int $code = 500, array $errors): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ], $code);
    }

    public function response_success(string $message, int $code = 200, array $data): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

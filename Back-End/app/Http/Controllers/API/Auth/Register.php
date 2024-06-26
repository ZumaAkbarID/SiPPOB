<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseJson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    use ResponseJson;

    function register(Request $request): JsonResponse
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8'
        ]);

        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return $this->response_success('Success!', 200, [
                'user' => $user
            ]);
        } catch (\Exception $e) {
            return $this->response_error('Failed!', 503, [
                'error' => $e->getMessage()
            ]);
        }
    }
}

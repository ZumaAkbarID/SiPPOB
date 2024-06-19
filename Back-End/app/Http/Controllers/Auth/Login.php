<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseJson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    use ResponseJson;

    function login(Request $request): JsonResponse
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        try {
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                $user = User::find(Auth::user()->id);

                return $this->response_success('Success!', 200, [
                    'token' => $user->createToken('Authentication')->plainTextToken
                ]);
            } else
                return $this->response_error('Akun tidak ditemukan!', 404, [
                    'error' => 'not_found'
                ]);
        } catch (\Exception $e) {
            return $this->response_error('Failed!', 404, [
                'error' => $e->getMessage()
            ]);
        }
    }
}

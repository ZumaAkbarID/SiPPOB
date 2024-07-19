<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact as ModelsContact;
use App\Traits\ResponseJson;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Contact extends Controller
{
    use ResponseJson;

    function sendMessage(Request $request): JsonResponse
    {
        try {
            ModelsContact::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'tipe' => $request->tipe,
                'pesan' => $request->pesan,
            ]);

            return $this->response_success('Sukses', 200, $request->except('_token'));
        } catch (\Exception $e) {
            return $this->response_error('Pesan gagal diproses', 500, [$e->getMessage()]);
        }
    }
}
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DigiflazzHandler extends Controller
{
    function notification(Request $request)
    {
        $secret = 'Z3tt4n1';

        $post_data = file_get_contents('php://input');
        $signature = hash_hmac('sha1', $post_data, $secret);

        if ($request->header('X-Hub-Signature') == 'sha1=' . $signature) {
            $response = json_decode($request->getContent(), true);

            if ($response['data']['status'] == 'Sukses') {
                $trx = Transaction::where('reff_id', $response['data']['ref_id'])->first();
                $trx->update(['status' => 'Success']);
            } else if ($response['data']['status'] == 'Gagal') {
                $trx = Transaction::where('reff_id', $response['data']['ref_id'])->first();
                $trx->update(['status' => 'Failed']);
            }
            return response('', 200);
        }
    }
}

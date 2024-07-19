<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait Fonnte
{
    private $token = "Uhd!J3bMzLZ@skcNg_93"; // dummy token

    public function validate_number(string $target)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => $this->token,
            ])->post('https://api.fonnte.com/validate', [
                'target' => $target,
                'countryCode' => '62'
            ]);

            // Log::alert(json_decode($response->body(), true));
            $check = json_decode($response->body(), true)['registered'];
            $target = str_split($target, 1);
            $target[0] = '62';

            return [
                'error' => $response->failed(),
                'message' => in_array(join($target), $check)
            ];
        } catch (\Exception $e) {
            //throw $th;
            return [
                'error' => true,
                'message' => 'Fonnte error: ' . $e->getMessage()
            ];
        }
    }

    public function send_message(string $target, string $message)
    {
        $checkTarget = $this->validate_number($target);
        if (!$checkTarget['error']) {
            try {
                $response = Http::withHeaders([
                    'Authorization' => $this->token,
                ])->post('https://api.fonnte.com/send', [
                    'target' => $target,
                    'message' => $message,
                    'countryCode' => '62',
                ]);

                return [
                    'error' => $response->failed(),
                    'message' => json_decode($response->body(), true)
                ];
            } catch (\Exception $e) {
                //throw $th;
                return [
                    'error' => true,
                    'message' => 'Fonnte error'
                ];
            }
        }
    }
}

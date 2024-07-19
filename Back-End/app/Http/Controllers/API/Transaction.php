<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction as ModelsTransaction;
use App\Traits\Fonnte;
use App\Traits\ResponseJson;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Midtrans;
use Midtrans\Snap;

class Transaction extends Controller
{
    use ResponseJson, Fonnte;

    function validateWa(Request $request): JsonResponse
    {
        return $this->response_success('OK', 200, $this->validate_number($request->phone));
    }

    function placeOrder(Request $request): JsonResponse
    {
        // Set your Merchant Server Key
        Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Midtrans\Config::$is3ds = true;

        $orderId = 'TOPUPIN-' . rand();
        $user = Auth::guard('sanctum')->user() ?? false;
        $product = Product::findOrFail($request->item);

        // Required
        $transaction_details = [
            'order_id' => $orderId,
            'gross_amount' => $product->price,
        ];

        // Optional
        $item_details = [
            [
                'id' => $product->buyer_sku_code,
                'price' => $product->price,
                'quantity' => 1,
                'name' => $product->product_name
            ]
        ];

        if ($user) {
            // Optional
            $customer_details = [
                'first_name'    => $user->username,
                'email'         => $user->email,
            ];
        } else {
            // Optional
            $customer_details = [
                'first_name'    => "Pembeli TopupIn",
            ];
        }
        $customer_details['phone'] = $request->phone;

        // Fill transaction details
        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        try {
            $snapToken = Snap::getSnapToken($transaction);

            ModelsTransaction::create([
                'user_id' => Auth::guard('sanctum')->user()->id ?? null,
                'product_id' => $product->id,
                'category_id' => $request->category,
                'reff_id' => $orderId,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'whatsapp' => $request->phone,
                'snap_token' => $snapToken,
                'id_game' => $request->idGame
            ]);

            $text = '';
            if ($user)
                $text .= "Salam, $user->username\n";
            else
                $text .= "Salam, Pembeli Rahasia\n";
            $text .= "Berikut rincian pembelian kamu\n\n";
            $text .= "==============================\n";
            $text .= "ID/Nickname : $request->idGame\n";
            $text .= "Item : $product->product_name\n";
            $text .= "Harga: Rp " . number_format($product->price, 0, ',', '.') . "\n";
            $text .= "Status Pembayaran: *Unpaid*\n";
            $text .= "Link Bayar: \n" . env('FE_URL') . "/pembayaran?order_id=$orderId\nKadaluarsa dalam 15 menit kedepan \n";
            $text .= "==============================\n\n";
            $text .= "Terima Kasih telah mempercayai kami❤\n\n";

            $this->send_message($request->phone, $text);

            return $this->response_success('Sukses!', 200, [
                'order_id' => $orderId
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return $this->response_error('Gagal membuat snap', 500, [
                'message' => $e->getMessage()
            ]);
        }
    }

    function getOrder(Request $request, string $orderId): JsonResponse
    {
        try {
            $transaction = ModelsTransaction::where('reff_id', $orderId)->first();
            // Ambil data dari database
            $createdAt = Carbon::parse($transaction->created_at);

            // Buat salinan dari createdAt sebelum menambahkan 15 menit
            $countdownTime = $createdAt->copy()->addMinutes(15);

            // Hitung sisa waktu dari sekarang hingga batas waktu
            $now = Carbon::now();
            $remainingTime = $countdownTime->diff($now);

            // Buat array hasil dengan sisa waktu dalam jam, menit, dan detik
            $result = [
                'jam' => $remainingTime->h,
                'menit' => $remainingTime->i,
                'detik' => $remainingTime->s,
            ];
            if ($transaction)
                return $this->response_success('transaction retrieved successfully', 200, [
                    'trx' => $transaction->toArray(),
                    'game' => Category::find($transaction->category_id),
                    'time' => $result
                ]);
            else
                throw new Exception("Not found!", 404);
        } catch (\Exception $e) {
            return $this->response_error('Failed to retrieve categories', 500, [$e->getMessage()]);
        }
    }
}

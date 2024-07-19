<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Traits\Digiflazz;
use App\Traits\Fonnte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans;
use Midtrans\Notification;

class MidtransHandler extends Controller
{
    use Digiflazz, Fonnte;

    function notification(Request $request)
    {
        // Set your Merchant Server Key
        Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Midtrans\Config::$isProduction = false;

        try {
            $notif = new Notification();
            $notif = $notif->getResponse();
            $transaction = $notif->transaction_status;
            $type = $notif->payment_type;
            $order_id = $notif->order_id;
            $fraud = $notif->fraud_status;
        } catch (\Exception $e) {
            return response('', 503);
        }
        // GUE UDAH MUAK NGERJAIN INI WOIIII AKWKAKWKKAKWKAKWKAKW, RIBET GA DIBAYAR PULA
        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    echo "Transaction order_id: " . $order_id . " is challenged by FDS";
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
                }
            }
        } else if ($transaction == 'settlement') {
            $trx = Transaction::where('reff_id', $order_id)->first();
            if (!$trx)
                return response('ga ada coy', 503);
            else if ($trx->payment == 'Paid')
                return response('already', 200);
            $trx->update(['payment' => 'Paid', 'status' => 'Progress']);
            $this->makeTransaction($trx);
            $text = '';
            $text .= "Pembayaran kamu sudah kami terima!\n";
            $text .= "Pesanan sedang diproses!\n";
            $text .= "==============================\n\n";
            $text .= "ID/Nickname : $trx->id_game\n";
            $text .= "Item : $trx->product_name\n";
            $text .= "Harga: Rp " . number_format($trx->price, 0, ',', '.') . "\n";
            $text .= "Status Pembayaran: *PAID*\n";
            $text .= "Cek Status Pesanan: \n" . env('FE_URL') . "/pembayaran?order_id=$order_id\n";
            $text .= "==============================\n\n";
            $text .= "Terima Kasih telah mempercayai kami❤\n\n";

            $this->send_message($trx->whatsapp, $text);
            return response('', 200);
        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
        } else if ($transaction == 'deny') {
            $trx = Transaction::where('reff_id', $order_id)->first();
            $trx->update(['payment' => 'Expired', 'status' => 'Failed']);
            return response('', 200);
        } else if ($transaction == 'expire') {
            $trx = Transaction::where('reff_id', $order_id)->first();
            $trx->update(['payment' => 'Expired', 'status' => 'Failed']);
            return response('', 200);
        } else if ($transaction == 'cancel') {
            $trx = Transaction::where('reff_id', $order_id)->first();
            $trx->update(['payment' => 'Expired', 'status' => 'Failed']);
            return response('', 200);
        }
    }
}
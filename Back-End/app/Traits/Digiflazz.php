<?php

namespace App\Traits;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

trait Digiflazz
{
    protected $username;
    protected $baseurl;
    protected $api_key;
    protected $api_key_prod;

    public function __construct()
    {
        $this->username = config('digiflazz.username');
        $this->baseurl = config('digiflazz.base_url');
        $this->api_key = config('digiflazz.api_key');
        $this->api_key_prod = config('digiflazz.api_key_prod');
    }

    public function signGen(string $path, bool $prod = false)
    {
        if (!$prod)
            return md5($this->username . $this->api_key . $path);
        else
            return md5($this->username . $this->api_key_prod . $path);
    }

    public function getPriceList()
    {
        try {
            $request = Http::post($this->baseurl . "price-list", [
                'cmd' => 'prepaid',
                'username' => $this->username,
                'sign' => $this->signGen('pricelist')
            ]);

            return json_decode($request->body(), true);
        } catch (\Exception $e) {
            return [
                'error' => true
            ];
        }
    }

    public function getBalance()
    {
        try {
            $request = Http::post($this->baseurl . "cek-saldo", [
                'cmd' => 'deposit',
                'username' => $this->username,
                'sign' => $this->signGen('depo', prod: true)
            ]);

            return json_decode($request->body(), true);
        } catch (\Exception $e) {
            return [
                'error' => true
            ];
        }
    }

    public function makeTransaction(Transaction $trx)
    {
        try {
            $product = Product::find($trx->product_id);

            $request = Http::post($this->baseurl . "transaction", [
                'username' => $this->username,
                'buyer_sku_code' => $product->buyer_sku_code,
                'customer_no' => $trx->id_game,
                'ref_id' => $trx->reff_id,
                'sign' => $this->signGen($trx->reff_id, prod: false),
                'testing' => true,
            ]);

            $resp = json_decode($request->body(), true);

            if ($resp['data']['status'] == 'Gagal') {
                $product->update(['status' => 'Failed']);
            } else if ($resp['data']['status'] == 'Sukses') {
                $product->update(['status' => 'Success']);
            }
        } catch (\Exception $e) {
            return [
                'error' => true
            ];
        }
    }
}

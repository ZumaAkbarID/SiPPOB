<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait Digiflazz
{
    protected $username;
    protected $baseurl;
    protected $api_key;

    public function __construct()
    {
        $this->username = config('digiflazz.username');
        $this->baseurl = config('digiflazz.base_url');
        $this->api_key = config('digiflazz.api_key');
    }

    public function signGen(string $path)
    {
        return md5($this->username . $this->api_key . $path);
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
}

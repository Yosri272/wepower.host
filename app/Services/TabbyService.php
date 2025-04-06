<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TabbyService
{
    protected $publicKey;
    protected $secretKey;

    public function __construct()
    {
        $this->publicKey = config('services.tabby.public_key');
        $this->secretKey = config('services.tabby.secret_key');
    }

    public function createPayment($amount, $currency, $customer)
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->secretKey}",
        ])->post('https://api.tabby.ai/payments', [
            'amount' => $amount,
            'currency' => $currency,
            'customer' => $customer,
        ]);

        return $response->json();
    }
}

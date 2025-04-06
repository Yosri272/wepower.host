<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class TamaraService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.tamara.api_key');
    }

    public function createPayment($amount, $currency, $customer)
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->apiKey}",
        ])->post('https://api.tamara.co/payments', [
            'amount' => $amount,
            'currency' => $currency,
            'customer' => $customer,
        ]);

        return $response->json();
    }
}

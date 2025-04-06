<?php

namespace App\Services;

<<<<<<< HEAD
use telesign\sdk\messaging\MessagingClient;

class TelesignService
=======
use App\Services\Contracts\SmsGatewayInterface;
use telesign\sdk\messaging\MessagingClient;

class TelesignService implements SmsGatewayInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    protected $client;

    public function __construct($config)
    {
        $customerId = $config->customer_id;
        $apiKey = $config->api_key;
        $this->client = new MessagingClient($customerId, $apiKey);
    }

    public function sendMessage($to, $message)
    {
        return $this->client->message($to, $message, 'ARN');
    }
}

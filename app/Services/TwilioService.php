<?php

namespace App\Services;

<<<<<<< HEAD
use Twilio\Rest\Client;

class TwilioService
=======
use App\Services\Contracts\SmsGatewayInterface;
use Twilio\Rest\Client;

class TwilioService implements SmsGatewayInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    protected $client;

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->client = new Client($config->twilio_sid, $config->twilio_token);
    }

    public function sendMessage($phone, $message)
    {
        return $this->client->messages->create($phone, [
            'from' => $this->config->twilio_from,
            'body' => $message,
        ]);
    }
}

<?php

namespace App\Services;

<<<<<<< HEAD
use MessageBird\Client;
use MessageBird\Objects\Message;

class MessageBirdService
=======
use App\Services\Contracts\SmsGatewayInterface;
use MessageBird\Client;
use MessageBird\Objects\Message;

class MessageBirdService implements SmsGatewayInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    protected $client;

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;

        $this->client = new Client($config->api_key);
    }

    public function sendMessage($phone, $message)
    {
<<<<<<< HEAD
        $messageObject = new Message();
=======
        $messageObject = new Message;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $messageObject->originator = $this->config->from;
        $messageObject->recipients = [$phone];
        $messageObject->body = $message;

        return $this->client->messages->create($messageObject);
    }
}

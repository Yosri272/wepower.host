<?php

namespace App\Services;

use App\Models\SMSConfig;
<<<<<<< HEAD
=======
use App\Services\Contracts\SmsGatewayInterface;
use Illuminate\Support\Facades\App;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class SmsGatewayService
{
    protected $gateway;

    public function __construct()
    {
        $smsConfig = SMSConfig::where('status', true)->first();

        if ($smsConfig) {
            $config = json_decode($smsConfig->data);
<<<<<<< HEAD

            switch ($smsConfig->provider) {
                case 'twilio':
                    $this->gateway = new TwilioService($config);
                    break;
                case 'message_bird':
                    $this->gateway = new MessageBirdService($config);
                    break;
                case 'nexmo':
                    $this->gateway = new NexmoService($config);
                    break;
                case 'telesign':
                    $this->gateway = new TelesignService($config);
                    break;
                default:
                    throw new \Exception('No SMS gateway selected.');
            }
        }
    }

    public function sendSMS($to, $message)
    {
        if (! $this->gateway) {
            throw new \Exception('SMS gateway not selected.');
        }

        return $this->gateway->sendMessage($to, $message);
=======
            $this->gateway = $this->resolveGateway($smsConfig->provider, $config);
        }
    }

    protected function resolveGateway(string $provider, $config): ?SmsGatewayInterface
    {
        switch ($provider) {
            case 'twilio':
                return App::makeWith(TwilioService::class, ['config' => $config]);
            case 'message_bird':
                return App::makeWith(MessageBirdService::class, ['config' => $config]);
            case 'nexmo':
                return App::makeWith(NexmoService::class, ['config' => $config]);
            case 'telesign':
                return App::makeWith(TelesignService::class, ['config' => $config]);
            default:
                return null;
        }
    }

    public function sendSMS($phoneCode, $phoneNumber, $message)
    {
        if (! $this->gateway) {
            return false;
        }

        $to = $phoneCode.$phoneNumber;

        // $phoneNumber = '+91'.substr($to, -10);
        $response = $this->gateway->sendMessage($to, $message);

        return $response;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}

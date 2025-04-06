<?php

namespace Vonage\Subaccount;

use Psr\Container\ContainerInterface;
use Vonage\Client\APIResource;
<<<<<<< HEAD
use Vonage\Client\Credentials\Handler\BasicHandler;
use Vonage\Client\Credentials\Handler\KeypairHandler;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class ClientFactory
{
    public function __invoke(ContainerInterface $container): Client
    {
        $api = $container->make(APIResource::class);
        $api->setIsHAL(true)
            ->setErrorsOn200(false)
            ->setBaseUrl('https://api.nexmo.com/accounts');

        return new Client($api);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

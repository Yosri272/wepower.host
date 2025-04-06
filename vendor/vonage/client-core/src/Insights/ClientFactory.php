<?php

declare(strict_types=1);

namespace Vonage\Insights;

use Psr\Container\ContainerInterface;
use Vonage\Client\APIResource;
<<<<<<< HEAD
=======
use Vonage\Client\Credentials\Handler\BasicHandler;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Vonage\Client\Credentials\Handler\BasicQueryHandler;

class ClientFactory
{
    public function __invoke(ContainerInterface $container): Client
    {
        /** @var APIResource $api */
        $api = $container->make(APIResource::class);
        $api->setIsHAL(false);
<<<<<<< HEAD
        $api->setAuthHandlers(new BasicQueryHandler());
=======
        $api->setAuthHandlers(new BasicHandler());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return new Client($api);
    }
}

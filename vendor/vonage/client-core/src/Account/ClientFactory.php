<?php

declare(strict_types=1);

namespace Vonage\Account;

use Psr\Container\ContainerInterface;
use Vonage\Client\APIResource;
<<<<<<< HEAD
use Vonage\Client\Credentials\Handler\BasicQueryHandler;
=======
use Vonage\Client\Credentials\Handler\BasicHandler;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class ClientFactory
{
    public function __invoke(ContainerInterface $container): Client
    {
        /** @var APIResource $accountApi */
        $accountApi = $container->make(APIResource::class);
        $accountApi
            ->setBaseUrl($accountApi->getClient()->getRestUrl())
            ->setIsHAL(false)
            ->setBaseUri('/account')
<<<<<<< HEAD
            ->setAuthHandlers(new BasicQueryHandler())
=======
            ->setAuthHandlers(new BasicHandler())
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ;

        return new Client($accountApi);
    }
}

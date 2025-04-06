<?php

declare(strict_types=1);

namespace Vonage\Account;

use Vonage\Client\Exception\Exception as ClientException;

class PrefixPrice extends Price
{
<<<<<<< HEAD
    protected $priceMethod = 'getPrefixPrice';

    /**
     * @throws ClientException
     */
=======
    protected string $priceMethod = 'getPrefixPrice';

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getCurrency(): ?string
    {
        throw new ClientException('Currency is unavailable from this endpoint');
    }
}

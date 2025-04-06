<?php

declare(strict_types=1);

namespace Vonage\Client\Credentials;

/**
 * Class Basic
 * Read-only container for api key and secret.
<<<<<<< HEAD
 *
 * @property string api_key
 * @property string api_secret
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
class Basic extends AbstractCredentials
{
    /**
     * Create a credential set with an API key and secret.
<<<<<<< HEAD
     *
     * @param $key
     * @param $secret
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct($key, $secret)
    {
        $this->credentials['api_key'] = (string)$key;
        $this->credentials['api_secret'] = (string)$secret;
    }
}

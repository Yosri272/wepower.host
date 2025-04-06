<?php

declare(strict_types=1);

namespace Kreait\Firebase\Contract;

use Kreait\Firebase\AppCheck\AppCheckToken;
use Kreait\Firebase\AppCheck\AppCheckTokenOptions;
use Kreait\Firebase\AppCheck\VerifyAppCheckTokenResponse;
use Kreait\Firebase\Exception;
<<<<<<< HEAD
=======
use Kreait\Firebase\Exception\AppCheck\FailedToVerifyAppCheckToken;
use Kreait\Firebase\Exception\AppCheck\InvalidAppCheckToken;
use Kreait\Firebase\Exception\AppCheck\InvalidAppCheckTokenOptions;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * @phpstan-import-type AppCheckTokenOptionsShape from AppCheckTokenOptions
 */
interface AppCheck
{
    /**
     * @param non-empty-string $appId
     * @param AppCheckTokenOptions|AppCheckTokenOptionsShape|null $options
     *
<<<<<<< HEAD
     * @throws Exception\AppCheck\InvalidAppCheckTokenOptions
=======
     * @throws InvalidAppCheckTokenOptions
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception\AppCheckException
     * @throws Exception\FirebaseException
     */
    public function createToken(string $appId, $options = null): AppCheckToken;

    /**
     * @param non-empty-string $appCheckToken
     *
<<<<<<< HEAD
     * @throws Exception\AppCheck\InvalidAppCheckToken
     * @throws Exception\AppCheck\FailedToVerifyAppCheckToken
=======
     * @throws InvalidAppCheckToken
     * @throws FailedToVerifyAppCheckToken
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception\AppCheckException
     * @throws Exception\FirebaseException
     */
    public function verifyToken(string $appCheckToken): VerifyAppCheckTokenResponse;
}

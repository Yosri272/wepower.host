<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Exception;

/**
 * @author Oskar Stark <oskarstark@googlemail.com>
 */
class MissingRequiredOptionException extends IncompleteDsnException
{
    public function __construct(string $option, ?string $dsn = null, ?\Throwable $previous = null)
    {
<<<<<<< HEAD
        $message = sprintf('The option "%s" is required but missing.', $option);
=======
        $message = \sprintf('The option "%s" is required but missing.', $option);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        parent::__construct($message, $dsn, $previous);
    }
}

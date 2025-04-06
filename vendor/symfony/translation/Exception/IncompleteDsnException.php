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

class IncompleteDsnException extends InvalidArgumentException
{
    public function __construct(string $message, ?string $dsn = null, ?\Throwable $previous = null)
    {
        if ($dsn) {
<<<<<<< HEAD
            $message = sprintf('Invalid "%s" provider DSN: ', $dsn).$message;
=======
            $message = \sprintf('Invalid "%s" provider DSN: ', $dsn).$message;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        parent::__construct($message, 0, $previous);
    }
}

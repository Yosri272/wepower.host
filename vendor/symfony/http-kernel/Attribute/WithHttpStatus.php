<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Attribute;

/**
<<<<<<< HEAD
=======
 * Defines the HTTP status code applied to an exception.
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @author Dejan Angelov <angelovdejan@protonmail.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WithHttpStatus
{
    /**
<<<<<<< HEAD
     * @param array<string, string> $headers
=======
     * @param int                   $statusCode The HTTP status code to use
     * @param array<string, string> $headers    The HTTP headers to add to the response
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(
        public readonly int $statusCode,
        public readonly array $headers = [],
    ) {
    }
}

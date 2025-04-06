<?php

declare(strict_types=1);

namespace Kreait\Firebase\Database\Query;

use Psr\Http\Message\UriInterface;

/**
 * @internal
 */
interface Modifier
{
    /**
     * Modifies the given URI and returns it.
     */
    public function modifyUri(UriInterface $uri): UriInterface;

    /**
     * Modifies the given value and returns it.
<<<<<<< HEAD
     *
     * @param mixed $value
     */
    public function modifyValue($value): mixed;
=======
     */
    public function modifyValue(mixed $value): mixed;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

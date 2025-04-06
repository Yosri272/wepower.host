<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\Exceptions;

use InvalidArgumentException as BaseInvalidArgumentException;
use Throwable;

class NotLocaleAwareException extends BaseInvalidArgumentException implements InvalidArgumentException
{
    /**
     * Constructor.
     *
     * @param mixed          $object
     * @param int            $code
     * @param Throwable|null $previous
     */
<<<<<<< HEAD
    public function __construct($object, $code = 0, Throwable $previous = null)
=======
    public function __construct($object, $code = 0, ?Throwable $previous = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $dump = \is_object($object) ? \get_class($object) : \gettype($object);

        parent::__construct("$dump does neither implements Symfony\Contracts\Translation\LocaleAwareInterface nor getLocale() method.", $code, $previous);
    }
}

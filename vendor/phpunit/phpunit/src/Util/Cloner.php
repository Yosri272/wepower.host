<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use Throwable;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Cloner
{
    /**
     * @psalm-template OriginalType of object
     *
     * @psalm-param OriginalType $original
     *
     * @psalm-return OriginalType
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Cloner
{
    /**
     * @template OriginalType of object
     *
     * @param OriginalType $original
     *
     * @return OriginalType
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function clone(object $original): object
    {
        try {
            return clone $original;
<<<<<<< HEAD
=======

            /** @phpstan-ignore catch.neverThrown */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        } catch (Throwable) {
            return $original;
        }
    }
}

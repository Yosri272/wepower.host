<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestSize;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
abstract class TestSize
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
abstract readonly class TestSize
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public static function unknown(): self
    {
        return new Unknown;
    }

    public static function small(): self
    {
        return new Small;
    }

    public static function medium(): self
    {
        return new Medium;
    }

    public static function large(): self
    {
        return new Large;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Known $this
=======
     * @phpstan-assert-if-true Known $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isKnown(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Unknown $this
=======
     * @phpstan-assert-if-true Unknown $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isUnknown(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Small $this
=======
     * @phpstan-assert-if-true Small $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isSmall(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Medium $this
=======
     * @phpstan-assert-if-true Medium $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isMedium(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Large $this
=======
     * @phpstan-assert-if-true Large $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isLarge(): bool
    {
        return false;
    }

    abstract public function asString(): string;
}

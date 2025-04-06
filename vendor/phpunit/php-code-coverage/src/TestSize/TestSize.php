<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Test\TestSize;

/**
<<<<<<< HEAD
 * @psalm-immutable
 */
abstract class TestSize
{
    public static function unknown(): self
=======
 * @immutable
 */
abstract class TestSize
{
    public static function unknown(): Unknown
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new Unknown;
    }

<<<<<<< HEAD
    public static function small(): self
=======
    public static function small(): Small
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new Small;
    }

<<<<<<< HEAD
    public static function medium(): self
=======
    public static function medium(): Medium
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new Medium;
    }

<<<<<<< HEAD
    public static function large(): self
=======
    public static function large(): Large
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
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

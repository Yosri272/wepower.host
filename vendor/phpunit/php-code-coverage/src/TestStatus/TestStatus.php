<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Test\TestStatus;

/**
<<<<<<< HEAD
 * @psalm-immutable
=======
 * @immutable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
abstract class TestStatus
{
    public static function unknown(): self
    {
        return new Unknown;
    }

    public static function success(): self
    {
        return new Success;
    }

    public static function failure(): self
    {
        return new Failure;
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
     * @psalm-assert-if-true Success $this
=======
     * @phpstan-assert-if-true Success $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isSuccess(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Failure $this
=======
     * @phpstan-assert-if-true Failure $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isFailure(): bool
    {
        return false;
    }

    abstract public function asString(): string;
}

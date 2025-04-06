<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\TestStatus;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestStatus
{
    private readonly string $message;
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestStatus
{
    private string $message;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public static function from(int $status): self
    {
        return match ($status) {
            0       => self::success(),
            1       => self::skipped(),
            2       => self::incomplete(),
            3       => self::notice(),
            4       => self::deprecation(),
            5       => self::risky(),
            6       => self::warning(),
            7       => self::failure(),
            8       => self::error(),
            default => self::unknown(),
        };
    }

    public static function unknown(): self
    {
        return new Unknown;
    }

    public static function success(): self
    {
        return new Success;
    }

    public static function skipped(string $message = ''): self
    {
        return new Skipped($message);
    }

    public static function incomplete(string $message = ''): self
    {
        return new Incomplete($message);
    }

    public static function notice(string $message = ''): self
    {
        return new Notice($message);
    }

    public static function deprecation(string $message = ''): self
    {
        return new Deprecation($message);
    }

    public static function failure(string $message = ''): self
    {
        return new Failure($message);
    }

    public static function error(string $message = ''): self
    {
        return new Error($message);
    }

    public static function warning(string $message = ''): self
    {
        return new Warning($message);
    }

    public static function risky(string $message = ''): self
    {
        return new Risky($message);
    }

    private function __construct(string $message = '')
    {
        $this->message = $message;
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
     * @psalm-assert-if-true Skipped $this
=======
     * @phpstan-assert-if-true Skipped $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isSkipped(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Incomplete $this
=======
     * @phpstan-assert-if-true Incomplete $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isIncomplete(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Notice $this
=======
     * @phpstan-assert-if-true Notice $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isNotice(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Deprecation $this
=======
     * @phpstan-assert-if-true Deprecation $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isDeprecation(): bool
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

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Error $this
=======
     * @phpstan-assert-if-true Error $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isError(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Warning $this
=======
     * @phpstan-assert-if-true Warning $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isWarning(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Risky $this
=======
     * @phpstan-assert-if-true Risky $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRisky(): bool
    {
        return false;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function isMoreImportantThan(self $other): bool
    {
        return $this->asInt() > $other->asInt();
    }

    abstract public function asInt(): int;

    abstract public function asString(): string;
}

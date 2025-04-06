<?php

declare(strict_types=1);

namespace Kreait\Firebase\JWT\Value;

use DateInterval;
use DateTimeImmutable;
use InvalidArgumentException;
use Stringable;
use Throwable;

use function is_int;

/**
 * Adapted duration class from gamez/duration.
 *
 * @see https://github.com/jeromegamez/duration-php
 */
final class Duration implements Stringable
{
    public const NONE = 'PT0S';

<<<<<<< HEAD
    private function __construct(private readonly DateInterval $value) {}
=======
    private function __construct(private readonly DateInterval $value)
    {
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __toString(): string
    {
        return $this->toString();
    }

    public static function make(self|DateInterval|int|string $value): self
    {
        if ($value instanceof self) {
            return $value;
        }

        if ($value instanceof DateInterval) {
            return self::fromDateInterval($value);
        }

        if (is_int($value)) {
            return self::inSeconds($value);
        }

        if (mb_strpos($value, 'P') === 0) {
            return self::fromDateIntervalSpec($value);
        }

        try {
            $interval = DateInterval::createFromDateString($value);
        } catch (Throwable) {
            throw new InvalidArgumentException("Unable to determine a duration from '{$value}'");
        }

        if ($interval === false) {
            throw new InvalidArgumentException("Unable to determine a duration from '{$value}'");
        }

        $duration = self::fromDateInterval($interval);
        // If the string doesn't contain a zero, but the result equals to zero
        // the value must be invalid.
        if (mb_strpos($value, '0') !== false) {
            return $duration;
        }

        if (!$duration->equals(self::none())) {
            return $duration;
        }

        throw new InvalidArgumentException("Unable to determine a duration from '{$value}'");
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function inSeconds(int $seconds): self
    {
        if ($seconds < 0) {
            throw new InvalidArgumentException('A duration can not be negative');
        }

<<<<<<< HEAD
        return self::fromDateIntervalSpec('PT' . $seconds . 'S');
=======
        return self::fromDateIntervalSpec('PT'.$seconds.'S');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function fromDateIntervalSpec(string $spec): self
    {
        try {
            $interval = new DateInterval($spec);
        } catch (Throwable) {
            throw new InvalidArgumentException("'{$spec}' is not a valid DateInterval specification");
        }

        return self::fromDateInterval($interval);
    }

    public static function fromDateInterval(DateInterval $interval): self
    {
        $now = new DateTimeImmutable();
        $then = $now->add($interval);

        if ($then < $now) {
            throw new InvalidArgumentException('A duration can not be negative');
        }

        return new self($interval);
    }

    public static function none(): self
    {
        return self::fromDateIntervalSpec(self::NONE);
    }

    public function value(): DateInterval
    {
        return $this->value;
    }

    public function isLargerThan(self|DateInterval|int|string $other): bool
    {
        return 1 === $this->compareTo($other);
    }

    public function equals(self|DateInterval|int|string $other): bool
    {
        return 0 === $this->compareTo($other);
    }

    public function isSmallerThan(self|DateInterval|int|string $other): bool
    {
        return -1 === $this->compareTo($other);
    }

    public function compareTo(self|DateInterval|int|string $other): int
    {
        $other = self::make($other);

        $now = self::now();

        return $now->add($this->value) <=> $now->add($other->value);
    }

    public function toString(): string
    {
        return self::toDateIntervalSpec(self::normalizeInterval($this->value));
    }

    private static function now(): DateTimeImmutable
    {
<<<<<<< HEAD
        return new DateTimeImmutable('@' . time());
=======
        return new DateTimeImmutable('@'.time());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    private static function normalizeInterval(DateInterval $value): DateInterval
    {
        $now = self::now();
        $then = $now->add($value);

        return $now->diff($then);
    }

    private static function toDateIntervalSpec(DateInterval $value): string
    {
        $spec = 'P';
<<<<<<< HEAD
        $spec .= 0 !== $value->y ? $value->y . 'Y' : '';
        $spec .= 0 !== $value->m ? $value->m . 'M' : '';
        $spec .= 0 !== $value->d ? $value->d . 'D' : '';

        $spec .= 'T';
        $spec .= 0 !== $value->h ? $value->h . 'H' : '';
        $spec .= 0 !== $value->i ? $value->i . 'M' : '';
        $spec .= 0 !== $value->s ? $value->s . 'S' : '';
=======
        $spec .= 0 !== $value->y ? $value->y.'Y' : '';
        $spec .= 0 !== $value->m ? $value->m.'M' : '';
        $spec .= 0 !== $value->d ? $value->d.'D' : '';

        $spec .= 'T';
        $spec .= 0 !== $value->h ? $value->h.'H' : '';
        $spec .= 0 !== $value->i ? $value->i.'M' : '';
        $spec .= 0 !== $value->s ? $value->s.'S' : '';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ('T' === mb_substr($spec, -1)) {
            $spec = mb_substr($spec, 0, -1);
        }

        if ('P' === $spec) {
            return self::NONE;
        }

        return $spec;
    }
}

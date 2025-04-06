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

namespace Carbon\Traits;

use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Carbon\CarbonPeriodImmutable;
use Carbon\Exceptions\UnitException;
use Closure;
use DateTime;
use DateTimeImmutable;
<<<<<<< HEAD
use ReturnTypeWillChange;
=======
use DateTimeInterface;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Trait Converter.
 *
 * Change date into different string formats and types and
 * handle the string cast.
 *
 * Depends on the following methods:
 *
 * @method static copy()
 */
trait Converter
{
    use ToStringFormat;

    /**
     * Returns the formatted date string on success or FALSE on failure.
     *
     * @see https://php.net/manual/en/datetime.format.php
<<<<<<< HEAD
     *
     * @param string $format
     *
     * @return string
     */
    #[ReturnTypeWillChange]
    public function format($format)
    {
        $function = $this->localFormatFunction ?: static::$formatFunction;
=======
     */
    public function format(string $format): string
    {
        $function = $this->localFormatFunction
            ?? $this->getFactory()->getSettings()['formatFunction']
            ?? static::$formatFunction;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (!$function) {
            return $this->rawFormat($format);
        }

        if (\is_string($function) && method_exists($this, $function)) {
            $function = [$this, $function];
        }

        return $function(...\func_get_args());
    }

    /**
     * @see https://php.net/manual/en/datetime.format.php
<<<<<<< HEAD
     *
     * @param string $format
     *
     * @return string
     */
    public function rawFormat($format)
=======
     */
    public function rawFormat(string $format): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return parent::format($format);
    }

    /**
     * Format the instance as a string using the set format
     *
     * @example
     * ```
     * echo Carbon::now(); // Carbon instances can be cast to string
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function __toString()
    {
        $format = $this->localToStringFormat ?? static::$toStringFormat;
=======
     */
    public function __toString(): string
    {
        $format = $this->localToStringFormat
            ?? $this->getFactory()->getSettings()['toStringFormat']
            ?? null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $format instanceof Closure
            ? $format($this)
            : $this->rawFormat($format ?: (
                \defined('static::DEFAULT_TO_STRING_FORMAT')
                    ? static::DEFAULT_TO_STRING_FORMAT
                    : CarbonInterface::DEFAULT_TO_STRING_FORMAT
            ));
    }

    /**
     * Format the instance as date
     *
     * @example
     * ```
     * echo Carbon::now()->toDateString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toDateString()
=======
     */
    public function toDateString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat('Y-m-d');
    }

    /**
     * Format the instance as a readable date
     *
     * @example
     * ```
     * echo Carbon::now()->toFormattedDateString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toFormattedDateString()
=======
     */
    public function toFormattedDateString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat('M j, Y');
    }

    /**
     * Format the instance with the day, and a readable date
     *
     * @example
     * ```
     * echo Carbon::now()->toFormattedDayDateString();
     * ```
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function toFormattedDayDateString(): string
    {
        return $this->rawFormat('D, M j, Y');
    }

    /**
     * Format the instance as time
     *
     * @example
     * ```
     * echo Carbon::now()->toTimeString();
     * ```
<<<<<<< HEAD
     *
     * @param string $unitPrecision
     *
     * @return string
     */
    public function toTimeString($unitPrecision = 'second')
=======
     */
    public function toTimeString(string $unitPrecision = 'second'): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat(static::getTimeFormatByPrecision($unitPrecision));
    }

    /**
     * Format the instance as date and time
     *
     * @example
     * ```
     * echo Carbon::now()->toDateTimeString();
     * ```
<<<<<<< HEAD
     *
     * @param string $unitPrecision
     *
     * @return string
     */
    public function toDateTimeString($unitPrecision = 'second')
=======
     */
    public function toDateTimeString(string $unitPrecision = 'second'): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat('Y-m-d '.static::getTimeFormatByPrecision($unitPrecision));
    }

    /**
     * Return a format from H:i to H:i:s.u according to given unit precision.
     *
     * @param string $unitPrecision "minute", "second", "millisecond" or "microsecond"
<<<<<<< HEAD
     *
     * @return string
     */
    public static function getTimeFormatByPrecision($unitPrecision)
    {
        switch (static::singularUnit($unitPrecision)) {
            case 'minute':
                return 'H:i';
            case 'second':
                return 'H:i:s';
            case 'm':
            case 'millisecond':
                return 'H:i:s.v';
            case 'µ':
            case 'microsecond':
                return 'H:i:s.u';
        }

        throw new UnitException('Precision unit expected among: minute, second, millisecond and microsecond.');
=======
     */
    public static function getTimeFormatByPrecision(string $unitPrecision): string
    {
        return match (static::singularUnit($unitPrecision)) {
            'minute' => 'H:i',
            'second' => 'H:i:s',
            'm', 'millisecond' => 'H:i:s.v',
            'µ', 'microsecond' => 'H:i:s.u',
            default => throw new UnitException('Precision unit expected among: minute, second, millisecond and microsecond.'),
        };
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as date and time T-separated with no timezone
     *
     * @example
     * ```
     * echo Carbon::now()->toDateTimeLocalString();
     * echo "\n";
     * echo Carbon::now()->toDateTimeLocalString('minute'); // You can specify precision among: minute, second, millisecond and microsecond
     * ```
<<<<<<< HEAD
     *
     * @param string $unitPrecision
     *
     * @return string
     */
    public function toDateTimeLocalString($unitPrecision = 'second')
=======
     */
    public function toDateTimeLocalString(string $unitPrecision = 'second'): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat('Y-m-d\T'.static::getTimeFormatByPrecision($unitPrecision));
    }

    /**
     * Format the instance with day, date and time
     *
     * @example
     * ```
     * echo Carbon::now()->toDayDateTimeString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toDayDateTimeString()
=======
     */
    public function toDayDateTimeString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat('D, M j, Y g:i A');
    }

    /**
     * Format the instance as ATOM
     *
     * @example
     * ```
     * echo Carbon::now()->toAtomString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toAtomString()
=======
     */
    public function toAtomString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->rawFormat(DateTime::ATOM);
    }

    /**
     * Format the instance as COOKIE
     *
     * @example
     * ```
     * echo Carbon::now()->toCookieString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toCookieString()
    {
        return $this->rawFormat(DateTime::COOKIE);
=======
     */
    public function toCookieString(): string
    {
        return $this->rawFormat(DateTimeInterface::COOKIE);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as ISO8601
     *
     * @example
     * ```
     * echo Carbon::now()->toIso8601String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toIso8601String()
=======
     */
    public function toIso8601String(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toAtomString();
    }

    /**
     * Format the instance as RFC822
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc822String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc822String()
    {
        return $this->rawFormat(DateTime::RFC822);
=======
     */
    public function toRfc822String(): string
    {
        return $this->rawFormat(DateTimeInterface::RFC822);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Convert the instance to UTC and return as Zulu ISO8601
     *
     * @example
     * ```
     * echo Carbon::now()->toIso8601ZuluString();
     * ```
<<<<<<< HEAD
     *
     * @param string $unitPrecision
     *
     * @return string
     */
    public function toIso8601ZuluString($unitPrecision = 'second')
=======
     */
    public function toIso8601ZuluString(string $unitPrecision = 'second'): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->avoidMutation()
            ->utc()
            ->rawFormat('Y-m-d\T'.static::getTimeFormatByPrecision($unitPrecision).'\Z');
    }

    /**
     * Format the instance as RFC850
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc850String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc850String()
    {
        return $this->rawFormat(DateTime::RFC850);
=======
     */
    public function toRfc850String(): string
    {
        return $this->rawFormat(DateTimeInterface::RFC850);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as RFC1036
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc1036String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc1036String()
    {
        return $this->rawFormat(DateTime::RFC1036);
=======
     */
    public function toRfc1036String(): string
    {
        return $this->rawFormat(DateTimeInterface::RFC1036);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as RFC1123
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc1123String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc1123String()
    {
        return $this->rawFormat(DateTime::RFC1123);
=======
     */
    public function toRfc1123String(): string
    {
        return $this->rawFormat(DateTimeInterface::RFC1123);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as RFC2822
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc2822String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc2822String()
    {
        return $this->rawFormat(DateTime::RFC2822);
    }

    /**
     * Format the instance as RFC3339
     *
     * @param bool $extended
=======
     */
    public function toRfc2822String(): string
    {
        return $this->rawFormat(DateTimeInterface::RFC2822);
    }

    /**
     * Format the instance as RFC3339.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc3339String() . "\n";
     * echo Carbon::now()->toRfc3339String(true) . "\n";
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc3339String($extended = false)
    {
        $format = DateTime::RFC3339;
        if ($extended) {
            $format = DateTime::RFC3339_EXTENDED;
        }

        return $this->rawFormat($format);
=======
     */
    public function toRfc3339String(bool $extended = false): string
    {
        return $this->rawFormat($extended ? DateTimeInterface::RFC3339_EXTENDED : DateTimeInterface::RFC3339);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as RSS
     *
     * @example
     * ```
     * echo Carbon::now()->toRssString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRssString()
    {
        return $this->rawFormat(DateTime::RSS);
=======
     */
    public function toRssString(): string
    {
        return $this->rawFormat(DateTimeInterface::RSS);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as W3C
     *
     * @example
     * ```
     * echo Carbon::now()->toW3cString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toW3cString()
    {
        return $this->rawFormat(DateTime::W3C);
=======
     */
    public function toW3cString(): string
    {
        return $this->rawFormat(DateTimeInterface::W3C);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Format the instance as RFC7231
     *
     * @example
     * ```
     * echo Carbon::now()->toRfc7231String();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toRfc7231String()
=======
     */
    public function toRfc7231String(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->avoidMutation()
            ->setTimezone('GMT')
            ->rawFormat(\defined('static::RFC7231_FORMAT') ? static::RFC7231_FORMAT : CarbonInterface::RFC7231_FORMAT);
    }

    /**
     * Get default array representation.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toArray());
     * ```
<<<<<<< HEAD
     *
     * @return array
     */
    public function toArray()
=======
     */
    public function toArray(): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return [
            'year' => $this->year,
            'month' => $this->month,
            'day' => $this->day,
            'dayOfWeek' => $this->dayOfWeek,
            'dayOfYear' => $this->dayOfYear,
            'hour' => $this->hour,
            'minute' => $this->minute,
            'second' => $this->second,
            'micro' => $this->micro,
            'timestamp' => $this->timestamp,
            'formatted' => $this->rawFormat(\defined('static::DEFAULT_TO_STRING_FORMAT') ? static::DEFAULT_TO_STRING_FORMAT : CarbonInterface::DEFAULT_TO_STRING_FORMAT),
            'timezone' => $this->timezone,
        ];
    }

    /**
     * Get default object representation.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toObject());
     * ```
<<<<<<< HEAD
     *
     * @return object
     */
    public function toObject()
=======
     */
    public function toObject(): object
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return (object) $this->toArray();
    }

    /**
<<<<<<< HEAD
     * Returns english human readable complete date string.
=======
     * Returns english human-readable complete date string.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @example
     * ```
     * echo Carbon::now()->toString();
     * ```
<<<<<<< HEAD
     *
     * @return string
     */
    public function toString()
=======
     */
    public function toString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->avoidMutation()->locale('en')->isoFormat('ddd MMM DD YYYY HH:mm:ss [GMT]ZZ');
    }

    /**
     * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z, if $keepOffset truthy, offset will be kept:
     * 1977-04-22T01:00:00-05:00).
     *
     * @example
     * ```
     * echo Carbon::now('America/Toronto')->toISOString() . "\n";
     * echo Carbon::now('America/Toronto')->toISOString(true) . "\n";
     * ```
     *
     * @param bool $keepOffset Pass true to keep the date offset. Else forced to UTC.
<<<<<<< HEAD
     *
     * @return null|string
     */
    public function toISOString($keepOffset = false)
=======
     */
    public function toISOString(bool $keepOffset = false): ?string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->isValid()) {
            return null;
        }

        $yearFormat = $this->year < 0 || $this->year > 9999 ? 'YYYYYY' : 'YYYY';
<<<<<<< HEAD
        $tzFormat = $keepOffset ? 'Z' : '[Z]';
        $date = $keepOffset ? $this : $this->avoidMutation()->utc();

        return $date->isoFormat("$yearFormat-MM-DD[T]HH:mm:ss.SSSSSS$tzFormat");
=======
        $timezoneFormat = $keepOffset ? 'Z' : '[Z]';
        $date = $keepOffset ? $this : $this->avoidMutation()->utc();

        return $date->isoFormat("$yearFormat-MM-DD[T]HH:mm:ss.SSSSSS$timezoneFormat");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Return the ISO-8601 string (ex: 1977-04-22T06:00:00Z) with UTC timezone.
     *
     * @example
     * ```
     * echo Carbon::now('America/Toronto')->toJSON();
     * ```
<<<<<<< HEAD
     *
     * @return null|string
     */
    public function toJSON()
=======
     */
    public function toJSON(): ?string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toISOString();
    }

    /**
     * Return native DateTime PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDateTime());
     * ```
<<<<<<< HEAD
     *
     * @return DateTime
     */
    public function toDateTime()
    {
        return new DateTime($this->rawFormat('Y-m-d H:i:s.u'), $this->getTimezone());
=======
     */
    public function toDateTime(): DateTime
    {
        return DateTime::createFromFormat('U.u', $this->rawFormat('U.u'))
            ->setTimezone($this->getTimezone());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Return native toDateTimeImmutable PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDateTimeImmutable());
     * ```
<<<<<<< HEAD
     *
     * @return DateTimeImmutable
     */
    public function toDateTimeImmutable()
    {
        return new DateTimeImmutable($this->rawFormat('Y-m-d H:i:s.u'), $this->getTimezone());
=======
     */
    public function toDateTimeImmutable(): DateTimeImmutable
    {
        return DateTimeImmutable::createFromFormat('U.u', $this->rawFormat('U.u'))
            ->setTimezone($this->getTimezone());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @alias toDateTime
     *
     * Return native DateTime PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(Carbon::now()->toDate());
     * ```
<<<<<<< HEAD
     *
     * @return DateTime
     */
    public function toDate()
=======
     */
    public function toDate(): DateTime
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toDateTime();
    }

    /**
     * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
     *
     * @param \DateTimeInterface|Carbon|CarbonImmutable|int|null $end      period end date or recurrences count if int
     * @param int|\DateInterval|string|null                      $interval period default interval or number of the given $unit
     * @param string|null                                        $unit     if specified, $interval must be an integer
<<<<<<< HEAD
     *
     * @return CarbonPeriod
     */
    public function toPeriod($end = null, $interval = null, $unit = null)
=======
     */
    public function toPeriod($end = null, $interval = null, $unit = null): CarbonPeriod
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($unit) {
            $interval = CarbonInterval::make("$interval ".static::pluralUnit($unit));
        }

<<<<<<< HEAD
        $period = ($this->isMutable() ? new CarbonPeriod() : new CarbonPeriodImmutable())
            ->setDateClass(static::class)
            ->setStartDate($this);

        if ($interval) {
            $period = $period->setDateInterval($interval);
        }

        if (\is_int($end) || (\is_string($end) && ctype_digit($end))) {
            $period = $period->setRecurrences($end);
        } elseif ($end) {
            $period = $period->setEndDate($end);
        }

        return $period;
=======
        $isDefaultInterval = !$interval;
        $interval ??= CarbonInterval::day();
        $class = $this->isMutable() ? CarbonPeriod::class : CarbonPeriodImmutable::class;

        if (\is_int($end) || (\is_string($end) && ctype_digit($end))) {
            $end = (int) $end;
        }

        $end ??= 1;

        if (!\is_int($end)) {
            $end = $this->resolveCarbon($end);
        }

        return new $class(
            raw: [$this, CarbonInterval::make($interval), $end],
            dateClass: static::class,
            isDefaultInterval: $isDefaultInterval,
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a iterable CarbonPeriod object from current date to a given end date (and optional interval).
     *
     * @param \DateTimeInterface|Carbon|CarbonImmutable|null $end      period end date
     * @param int|\DateInterval|string|null                  $interval period default interval or number of the given $unit
     * @param string|null                                    $unit     if specified, $interval must be an integer
<<<<<<< HEAD
     *
     * @return CarbonPeriod
     */
    public function range($end = null, $interval = null, $unit = null)
=======
     */
    public function range($end = null, $interval = null, $unit = null): CarbonPeriod
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toPeriod($end, $interval, $unit);
    }
}

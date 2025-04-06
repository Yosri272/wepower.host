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

use Carbon\CarbonConverterInterface;
use Carbon\CarbonInterface;
use Carbon\CarbonInterval;
<<<<<<< HEAD
use Carbon\Exceptions\UnitException;
=======
use Carbon\Exceptions\InvalidFormatException;
use Carbon\Exceptions\InvalidIntervalException;
use Carbon\Exceptions\UnitException;
use Carbon\Exceptions\UnsupportedUnitException;
use Carbon\Unit;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Closure;
use DateInterval;
use DateMalformedStringException;
use ReturnTypeWillChange;

/**
 * Trait Units.
 *
 * Add, subtract and set units.
 */
trait Units
{
    /**
<<<<<<< HEAD
     * Add seconds to the instance using timestamp. Positive $value travels
     * forward while negative $value travels into the past.
     *
     * @param string $unit
     * @param int    $value
     *
     * @return static
     */
    public function addRealUnit($unit, $value = 1)
    {
        switch ($unit) {
            // @call addRealUnit
            case 'micro':

            // @call addRealUnit
=======
     * @deprecated Prefer to use add addUTCUnit() which more accurately defines what it's doing.
     *
     * Add seconds to the instance using timestamp. Positive $value travels
     * forward while negative $value travels into the past.
     *
     * @param string         $unit
     * @param int|float|null $value
     *
     * @return static
     */
    public function addRealUnit(string $unit, $value = 1): static
    {
        return $this->addUTCUnit($unit, $value);
    }

    /**
     * Add seconds to the instance using timestamp. Positive $value travels
     * forward while negative $value travels into the past.
     *
     * @param string         $unit
     * @param int|float|null $value
     *
     * @return static
     */
    public function addUTCUnit(string $unit, $value = 1): static
    {
        $value ??= 0;

        switch ($unit) {
            // @call addUTCUnit
            case 'micro':

            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'microsecond':
                /* @var CarbonInterface $this */
                $diff = $this->microsecond + $value;
                $time = $this->getTimestamp();
                $seconds = (int) floor($diff / static::MICROSECONDS_PER_SECOND);
                $time += $seconds;
                $diff -= $seconds * static::MICROSECONDS_PER_SECOND;
                $microtime = str_pad((string) $diff, 6, '0', STR_PAD_LEFT);
<<<<<<< HEAD
                $tz = $this->tz;

                return $this->tz('UTC')->modify("@$time.$microtime")->tz($tz);

            // @call addRealUnit
            case 'milli':
            // @call addRealUnit
            case 'millisecond':
                return $this->addRealUnit('microsecond', $value * static::MICROSECONDS_PER_MILLISECOND);

            // @call addRealUnit
            case 'second':
                break;

            // @call addRealUnit
=======
                $timezone = $this->tz;

                return $this->tz('UTC')->modify("@$time.$microtime")->setTimezone($timezone);

            // @call addUTCUnit
            case 'milli':
            // @call addUTCUnit
            case 'millisecond':
                return $this->addUTCUnit('microsecond', $value * static::MICROSECONDS_PER_MILLISECOND);

            // @call addUTCUnit
            case 'second':
                break;

            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'minute':
                $value *= static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'hour':
                $value *= static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'day':
                $value *= static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'week':
                $value *= static::DAYS_PER_WEEK * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'month':
                $value *= 30 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'quarter':
                $value *= static::MONTHS_PER_QUARTER * 30 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'year':
                $value *= 365 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'decade':
                $value *= static::YEARS_PER_DECADE * 365 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'century':
                $value *= static::YEARS_PER_CENTURY * 365 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

<<<<<<< HEAD
            // @call addRealUnit
=======
            // @call addUTCUnit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            case 'millennium':
                $value *= static::YEARS_PER_MILLENNIUM * 365 * static::HOURS_PER_DAY * static::MINUTES_PER_HOUR * static::SECONDS_PER_MINUTE;

                break;

            default:
<<<<<<< HEAD
                if ($this->localStrictModeEnabled ?? static::isStrictModeEnabled()) {
=======
                if ($this->isLocalStrictModeEnabled()) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    throw new UnitException("Invalid unit for real timestamp add/sub: '$unit'");
                }

                return $this;
        }

<<<<<<< HEAD
        /* @var CarbonInterface $this */
        return $this->setTimestamp((int) ($this->getTimestamp() + $value));
    }

    public function subRealUnit($unit, $value = 1)
    {
        return $this->addRealUnit($unit, -$value);
=======
        $seconds = (int) $value;
        $microseconds = (int) round(
            (abs($value) - abs($seconds)) * ($value < 0 ? -1 : 1) * static::MICROSECONDS_PER_SECOND,
        );
        $date = $this->setTimestamp($this->getTimestamp() + $seconds);

        return $microseconds ? $date->addUTCUnit('microsecond', $microseconds) : $date;
    }

    /**
     * @deprecated Prefer to use add subUTCUnit() which more accurately defines what it's doing.
     *
     * Subtract seconds to the instance using timestamp. Positive $value travels
     * into the past while negative $value travels forward.
     *
     * @param string $unit
     * @param int    $value
     *
     * @return static
     */
    public function subRealUnit($unit, $value = 1): static
    {
        return $this->addUTCUnit($unit, -$value);
    }

    /**
     * Subtract seconds to the instance using timestamp. Positive $value travels
     * into the past while negative $value travels forward.
     *
     * @param string $unit
     * @param int    $value
     *
     * @return static
     */
    public function subUTCUnit($unit, $value = 1): static
    {
        return $this->addUTCUnit($unit, -$value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Returns true if a property can be changed via setter.
     *
     * @param string $unit
     *
     * @return bool
     */
<<<<<<< HEAD
    public static function isModifiableUnit($unit)
=======
    public static function isModifiableUnit($unit): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static $modifiableUnits = [
            // @call addUnit
            'millennium',
            // @call addUnit
            'century',
            // @call addUnit
            'decade',
            // @call addUnit
            'quarter',
            // @call addUnit
            'week',
            // @call addUnit
            'weekday',
        ];

        return \in_array($unit, $modifiableUnits, true) || \in_array($unit, static::$units, true);
    }

    /**
     * Call native PHP DateTime/DateTimeImmutable add() method.
     *
     * @param DateInterval $interval
     *
     * @return static
     */
<<<<<<< HEAD
    public function rawAdd(DateInterval $interval)
=======
    public function rawAdd(DateInterval $interval): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return parent::add($interval);
    }

    /**
     * Add given units or interval to the current instance.
     *
     * @example $date->add('hour', 3)
     * @example $date->add(15, 'days')
     * @example $date->add(CarbonInterval::days(4))
     *
<<<<<<< HEAD
     * @param string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int                                                  $value
     * @param bool|null                                            $overflow
=======
     * @param Unit|string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int|float                                                 $value
     * @param bool|null                                                 $overflow
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @return static
     */
    #[ReturnTypeWillChange]
<<<<<<< HEAD
    public function add($unit, $value = 1, $overflow = null)
    {
=======
    public function add($unit, $value = 1, ?bool $overflow = null): static
    {
        $unit = Unit::toNameIfUnit($unit);
        $value = Unit::toNameIfUnit($value);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (\is_string($unit) && \func_num_args() === 1) {
            $unit = CarbonInterval::make($unit, [], true);
        }

        if ($unit instanceof CarbonConverterInterface) {
<<<<<<< HEAD
            return $this->resolveCarbon($unit->convertDate($this, false));
        }

        if ($unit instanceof Closure) {
            return $this->resolveCarbon($unit($this, false));
=======
            $unit = Closure::fromCallable([$unit, 'convertDate']);
        }

        if ($unit instanceof Closure) {
            $result = $this->resolveCarbon($unit($this, false));

            if ($this !== $result && $this->isMutable()) {
                return $this->modify($result->rawFormat('Y-m-d H:i:s.u e O'));
            }

            return $result;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if ($unit instanceof DateInterval) {
            return parent::add($unit);
        }

        if (is_numeric($unit)) {
            [$value, $unit] = [$unit, $value];
        }

<<<<<<< HEAD
        return $this->addUnit($unit, $value, $overflow);
=======
        return $this->addUnit((string) $unit, $value, $overflow);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Add given units to the current instance.
<<<<<<< HEAD
     *
     * @param string    $unit
     * @param int       $value
     * @param bool|null $overflow
     *
     * @return static
     */
    public function addUnit($unit, $value = 1, $overflow = null)
    {
=======
     */
    public function addUnit(Unit|string $unit, $value = 1, ?bool $overflow = null): static
    {
        $unit = Unit::toName($unit);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $originalArgs = \func_get_args();

        $date = $this;

        if (!is_numeric($value) || !(float) $value) {
<<<<<<< HEAD
            return $date->isMutable() ? $date : $date->avoidMutation();
=======
            return $date->isMutable() ? $date : $date->copy();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $unit = self::singularUnit($unit);
        $metaUnits = [
            'millennium' => [static::YEARS_PER_MILLENNIUM, 'year'],
            'century' => [static::YEARS_PER_CENTURY, 'year'],
            'decade' => [static::YEARS_PER_DECADE, 'year'],
            'quarter' => [static::MONTHS_PER_QUARTER, 'month'],
        ];

        if (isset($metaUnits[$unit])) {
            [$factor, $unit] = $metaUnits[$unit];
            $value *= $factor;
        }

        if ($unit === 'weekday') {
<<<<<<< HEAD
            $weekendDays = static::getWeekendDays();
=======
            $weekendDays = $this->transmitFactory(static fn () => static::getWeekendDays());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            if ($weekendDays !== [static::SATURDAY, static::SUNDAY]) {
                $absoluteValue = abs($value);
                $sign = $value / max(1, $absoluteValue);
<<<<<<< HEAD
                $weekDaysCount = 7 - min(6, \count(array_unique($weekendDays)));
=======
                $weekDaysCount = static::DAYS_PER_WEEK - min(static::DAYS_PER_WEEK - 1, \count(array_unique($weekendDays)));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $weeks = floor($absoluteValue / $weekDaysCount);

                for ($diff = $absoluteValue % $weekDaysCount; $diff; $diff--) {
                    /** @var static $date */
                    $date = $date->addDays($sign);

                    while (\in_array($date->dayOfWeek, $weekendDays, true)) {
                        $date = $date->addDays($sign);
                    }
                }

                $value = $weeks * $sign;
                $unit = 'week';
            }

            $timeString = $date->toTimeString();
        } elseif ($canOverflow = (\in_array($unit, [
                'month',
                'year',
            ]) && ($overflow === false || (
                $overflow === null &&
                ($ucUnit = ucfirst($unit).'s') &&
                !($this->{'local'.$ucUnit.'Overflow'} ?? static::{'shouldOverflow'.$ucUnit}())
            )))) {
            $day = $date->day;
        }

<<<<<<< HEAD
        $value = (int) $value;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($unit === 'milli' || $unit === 'millisecond') {
            $unit = 'microsecond';
            $value *= static::MICROSECONDS_PER_MILLISECOND;
        }

<<<<<<< HEAD
        // Work-around for bug https://bugs.php.net/bug.php?id=75642
        if ($unit === 'micro' || $unit === 'microsecond') {
            $microseconds = $this->micro + $value;
            $second = (int) floor($microseconds / static::MICROSECONDS_PER_SECOND);
            $microseconds %= static::MICROSECONDS_PER_SECOND;
            if ($microseconds < 0) {
                $microseconds += static::MICROSECONDS_PER_SECOND;
            }
            $date = $date->microseconds($microseconds);
            $unit = 'second';
            $value = $second;
        }

        try {
            $date = $date->modify("$value $unit");

            if (isset($timeString)) {
                $date = $date->setTimeFromTimeString($timeString);
            } elseif (isset($canOverflow, $day) && $canOverflow && $day !== $date->day) {
                $date = $date->modify('last day of previous month');
            }
        } catch (DateMalformedStringException $ignoredException) { // @codeCoverageIgnore
            $date = null; // @codeCoverageIgnore
        }

        if (!$date) {
            throw new UnitException('Unable to add unit '.var_export($originalArgs, true));
        }

        return $date;
=======
        $previousException = null;

        try {
            $date = self::rawAddUnit($date, $unit, $value);

            if (isset($timeString)) {
                $date = $date?->setTimeFromTimeString($timeString);
            } elseif (isset($canOverflow, $day) && $canOverflow && $day !== $date?->day) {
                $date = $date?->modify('last day of previous month');
            }
        } catch (DateMalformedStringException|InvalidFormatException|UnsupportedUnitException $exception) {
            $date = null;
            $previousException = $exception;
        }

        return $date ?? throw new UnitException(
            'Unable to add unit '.var_export($originalArgs, true),
            previous: $previousException,
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Subtract given units to the current instance.
<<<<<<< HEAD
     *
     * @param string    $unit
     * @param int       $value
     * @param bool|null $overflow
     *
     * @return static
     */
    public function subUnit($unit, $value = 1, $overflow = null)
=======
     */
    public function subUnit(Unit|string $unit, $value = 1, ?bool $overflow = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->addUnit($unit, -$value, $overflow);
    }

    /**
     * Call native PHP DateTime/DateTimeImmutable sub() method.
<<<<<<< HEAD
     *
     * @param DateInterval $interval
     *
     * @return static
     */
    public function rawSub(DateInterval $interval)
=======
     */
    public function rawSub(DateInterval $interval): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return parent::sub($interval);
    }

    /**
     * Subtract given units or interval to the current instance.
     *
     * @example $date->sub('hour', 3)
     * @example $date->sub(15, 'days')
     * @example $date->sub(CarbonInterval::days(4))
     *
<<<<<<< HEAD
     * @param string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int                                                  $value
     * @param bool|null                                            $overflow
=======
     * @param Unit|string|DateInterval|Closure|CarbonConverterInterface $unit
     * @param int|float                                                 $value
     * @param bool|null                                                 $overflow
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @return static
     */
    #[ReturnTypeWillChange]
<<<<<<< HEAD
    public function sub($unit, $value = 1, $overflow = null)
=======
    public function sub($unit, $value = 1, ?bool $overflow = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (\is_string($unit) && \func_num_args() === 1) {
            $unit = CarbonInterval::make($unit, [], true);
        }

        if ($unit instanceof CarbonConverterInterface) {
<<<<<<< HEAD
            return $this->resolveCarbon($unit->convertDate($this, true));
        }

        if ($unit instanceof Closure) {
            return $this->resolveCarbon($unit($this, true));
=======
            $unit = Closure::fromCallable([$unit, 'convertDate']);
        }

        if ($unit instanceof Closure) {
            $result = $this->resolveCarbon($unit($this, true));

            if ($this !== $result && $this->isMutable()) {
                return $this->modify($result->rawFormat('Y-m-d H:i:s.u e O'));
            }

            return $result;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if ($unit instanceof DateInterval) {
            return parent::sub($unit);
        }

        if (is_numeric($unit)) {
            [$value, $unit] = [$unit, $value];
        }

<<<<<<< HEAD
        return $this->addUnit($unit, -(float) $value, $overflow);
=======
        return $this->addUnit((string) $unit, -(float) $value, $overflow);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Subtract given units or interval to the current instance.
     *
     * @see sub()
     *
     * @param string|DateInterval $unit
<<<<<<< HEAD
     * @param int                 $value
=======
     * @param int|float           $value
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param bool|null           $overflow
     *
     * @return static
     */
<<<<<<< HEAD
    public function subtract($unit, $value = 1, $overflow = null)
=======
    public function subtract($unit, $value = 1, ?bool $overflow = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (\is_string($unit) && \func_num_args() === 1) {
            $unit = CarbonInterval::make($unit, [], true);
        }

        return $this->sub($unit, $value, $overflow);
    }
<<<<<<< HEAD
=======

    private static function rawAddUnit(self $date, string $unit, int|float $value): ?static
    {
        try {
            return $date->rawAdd(
                CarbonInterval::fromString(abs($value)." $unit")->invert($value < 0),
            );
        } catch (InvalidIntervalException $exception) {
            try {
                return $date->modify("$value $unit");
            } catch (InvalidFormatException) {
                throw new UnsupportedUnitException($unit, previous: $exception);
            }
        }
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

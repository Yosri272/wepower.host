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

use Carbon\CarbonInterface;
use Carbon\Exceptions\UnknownUnitException;
<<<<<<< HEAD
=======
use Carbon\WeekDay;
use DateInterval;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Trait Rounding.
 *
 * Round, ceil, floor units.
 *
 * Depends on the following methods:
 *
 * @method static copy()
 * @method static startOfWeek(int $weekStartsAt = null)
 */
trait Rounding
{
    use IntervalRounding;

    /**
     * Round the current instance at the given unit with given precision if specified and the given function.
<<<<<<< HEAD
     *
     * @param string    $unit
     * @param float|int $precision
     * @param string    $function
     *
     * @return CarbonInterface
     */
    public function roundUnit($unit, $precision = 1, $function = 'round')
    {
=======
     */
    public function roundUnit(
        string $unit,
        DateInterval|string|float|int $precision = 1,
        callable|string $function = 'round',
    ): static {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $metaUnits = [
            // @call roundUnit
            'millennium' => [static::YEARS_PER_MILLENNIUM, 'year'],
            // @call roundUnit
            'century' => [static::YEARS_PER_CENTURY, 'year'],
            // @call roundUnit
            'decade' => [static::YEARS_PER_DECADE, 'year'],
            // @call roundUnit
            'quarter' => [static::MONTHS_PER_QUARTER, 'month'],
            // @call roundUnit
            'millisecond' => [1000, 'microsecond'],
        ];
        $normalizedUnit = static::singularUnit($unit);
        $ranges = array_merge(static::getRangesByUnit($this->daysInMonth), [
            // @call roundUnit
            'microsecond' => [0, 999999],
        ]);
        $factor = 1;

        if ($normalizedUnit === 'week') {
            $normalizedUnit = 'day';
            $precision *= static::DAYS_PER_WEEK;
        }

        if (isset($metaUnits[$normalizedUnit])) {
            [$factor, $normalizedUnit] = $metaUnits[$normalizedUnit];
        }

        $precision *= $factor;

        if (!isset($ranges[$normalizedUnit])) {
            throw new UnknownUnitException($unit);
        }

        $found = false;
        $fraction = 0;
        $arguments = null;
        $initialValue = null;
        $factor = $this->year < 0 ? -1 : 1;
        $changes = [];
        $minimumInc = null;

        foreach ($ranges as $unit => [$minimum, $maximum]) {
            if ($normalizedUnit === $unit) {
                $arguments = [$this->$unit, $minimum];
                $initialValue = $this->$unit;
                $fraction = $precision - floor($precision);
                $found = true;

                continue;
            }

            if ($found) {
                $delta = $maximum + 1 - $minimum;
                $factor /= $delta;
                $fraction *= $delta;
                $inc = ($this->$unit - $minimum) * $factor;

                if ($inc !== 0.0) {
                    $minimumInc = $minimumInc ?? ($arguments[0] / pow(2, 52));

                    // If value is still the same when adding a non-zero increment/decrement,
                    // it means precision got lost in the addition
                    if (abs($inc) < $minimumInc) {
                        $inc = $minimumInc * ($inc < 0 ? -1 : 1);
                    }

                    // If greater than $precision, assume precision loss caused an overflow
                    if ($function !== 'floor' || abs($arguments[0] + $inc - $initialValue) >= $precision) {
                        $arguments[0] += $inc;
                    }
                }

                $changes[$unit] = round(
<<<<<<< HEAD
                    $minimum + ($fraction ? $fraction * $function(($this->$unit - $minimum) / $fraction) : 0)
=======
                    $minimum + ($fraction ? $fraction * $function(($this->$unit - $minimum) / $fraction) : 0),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                // Cannot use modulo as it lose double precision
                while ($changes[$unit] >= $delta) {
                    $changes[$unit] -= $delta;
                }

                $fraction -= floor($fraction);
            }
        }

        [$value, $minimum] = $arguments;
        $normalizedValue = floor($function(($value - $minimum) / $precision) * $precision + $minimum);

        /** @var CarbonInterface $result */
        $result = $this;

        foreach ($changes as $unit => $value) {
            $result = $result->$unit($value);
        }

        return $result->$normalizedUnit($normalizedValue);
    }

    /**
     * Truncate the current instance at the given unit with given precision if specified.
<<<<<<< HEAD
     *
     * @param string    $unit
     * @param float|int $precision
     *
     * @return CarbonInterface
     */
    public function floorUnit($unit, $precision = 1)
=======
     */
    public function floorUnit(string $unit, DateInterval|string|float|int $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->roundUnit($unit, $precision, 'floor');
    }

    /**
     * Ceil the current instance at the given unit with given precision if specified.
<<<<<<< HEAD
     *
     * @param string    $unit
     * @param float|int $precision
     *
     * @return CarbonInterface
     */
    public function ceilUnit($unit, $precision = 1)
=======
     */
    public function ceilUnit(string $unit, DateInterval|string|float|int $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->roundUnit($unit, $precision, 'ceil');
    }

    /**
     * Round the current instance second with given precision if specified.
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     * @param string                              $function
     *
     * @return CarbonInterface
     */
    public function round($precision = 1, $function = 'round')
=======
     */
    public function round(DateInterval|string|float|int $precision = 1, callable|string $function = 'round'): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->roundWith($precision, $function);
    }

    /**
     * Round the current instance second with given precision if specified.
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return CarbonInterface
     */
    public function floor($precision = 1)
=======
     */
    public function floor(DateInterval|string|float|int $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->round($precision, 'floor');
    }

    /**
     * Ceil the current instance second with given precision if specified.
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return CarbonInterface
     */
    public function ceil($precision = 1)
=======
     */
    public function ceil(DateInterval|string|float|int $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->round($precision, 'ceil');
    }

    /**
     * Round the current instance week.
     *
<<<<<<< HEAD
     * @param int $weekStartsAt optional start allow you to specify the day of week to use to start the week
     *
     * @return CarbonInterface
     */
    public function roundWeek($weekStartsAt = null)
    {
        return $this->closest(
            $this->avoidMutation()->floorWeek($weekStartsAt),
            $this->avoidMutation()->ceilWeek($weekStartsAt)
=======
     * @param WeekDay|int|null $weekStartsAt optional start allow you to specify the day of week to use to start the week
     */
    public function roundWeek(WeekDay|int|null $weekStartsAt = null): static
    {
        return $this->closest(
            $this->avoidMutation()->floorWeek($weekStartsAt),
            $this->avoidMutation()->ceilWeek($weekStartsAt),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
     * Truncate the current instance week.
     *
<<<<<<< HEAD
     * @param int $weekStartsAt optional start allow you to specify the day of week to use to start the week
     *
     * @return CarbonInterface
     */
    public function floorWeek($weekStartsAt = null)
=======
     * @param WeekDay|int|null $weekStartsAt optional start allow you to specify the day of week to use to start the week
     */
    public function floorWeek(WeekDay|int|null $weekStartsAt = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->startOfWeek($weekStartsAt);
    }

    /**
     * Ceil the current instance week.
     *
<<<<<<< HEAD
     * @param int $weekStartsAt optional start allow you to specify the day of week to use to start the week
     *
     * @return CarbonInterface
     */
    public function ceilWeek($weekStartsAt = null)
=======
     * @param WeekDay|int|null $weekStartsAt optional start allow you to specify the day of week to use to start the week
     */
    public function ceilWeek(WeekDay|int|null $weekStartsAt = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($this->isMutable()) {
            $startOfWeek = $this->avoidMutation()->startOfWeek($weekStartsAt);

            return $startOfWeek != $this ?
                $this->startOfWeek($weekStartsAt)->addWeek() :
                $this;
        }

        $startOfWeek = $this->startOfWeek($weekStartsAt);

        return $startOfWeek != $this ?
            $startOfWeek->addWeek() :
            $this->avoidMutation();
    }
}

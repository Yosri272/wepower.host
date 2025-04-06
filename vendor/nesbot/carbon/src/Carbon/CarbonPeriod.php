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

namespace Carbon;

use Carbon\Exceptions\EndLessPeriodException;
use Carbon\Exceptions\InvalidCastException;
use Carbon\Exceptions\InvalidIntervalException;
use Carbon\Exceptions\InvalidPeriodDateException;
use Carbon\Exceptions\InvalidPeriodParameterException;
use Carbon\Exceptions\NotACarbonClassException;
use Carbon\Exceptions\NotAPeriodException;
use Carbon\Exceptions\UnknownGetterException;
use Carbon\Exceptions\UnknownMethodException;
use Carbon\Exceptions\UnreachableException;
<<<<<<< HEAD
use Carbon\Traits\IntervalRounding;
=======
use Carbon\Traits\DeprecatedPeriodProperties;
use Carbon\Traits\IntervalRounding;
use Carbon\Traits\LocalFactory;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Carbon\Traits\Mixin;
use Carbon\Traits\Options;
use Carbon\Traits\ToStringFormat;
use Closure;
use Countable;
use DateInterval;
use DatePeriod;
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
<<<<<<< HEAD
use InvalidArgumentException;
use Iterator;
=======
use Generator;
use InvalidArgumentException;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use JsonSerializable;
use ReflectionException;
use ReturnTypeWillChange;
use RuntimeException;
<<<<<<< HEAD
=======
use Throwable;

// @codeCoverageIgnoreStart
require PHP_VERSION < 8.2
    ? __DIR__.'/../../lazy/Carbon/ProtectedDatePeriod.php'
    : __DIR__.'/../../lazy/Carbon/UnprotectedDatePeriod.php';
// @codeCoverageIgnoreEnd
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Substitution of DatePeriod with some modifications and many more features.
 *
<<<<<<< HEAD
 * @property-read int|float $recurrences number of recurrences (if end not set).
 * @property-read bool $include_start_date rather the start date is included in the iteration.
 * @property-read bool $include_end_date rather the end date is included in the iteration (if recurrences not set).
 * @property-read CarbonInterface $start Period start date.
 * @property-read CarbonInterface $current Current date from the iteration.
 * @property-read CarbonInterface $end Period end date.
 * @property-read CarbonInterval $interval Underlying date interval instance. Always present, one day by default.
 *
 * @method static static start($date, $inclusive = null) Create instance specifying start date or modify the start date if called on an instance.
 * @method static static since($date, $inclusive = null) Alias for start().
 * @method static static sinceNow($inclusive = null) Create instance with start date set to now or set the start date to now if called on an instance.
 * @method static static end($date = null, $inclusive = null) Create instance specifying end date or modify the end date if called on an instance.
=======
 * @method static static|CarbonInterface start($date = null, $inclusive = null) Create instance specifying start date or modify the start date if called on an instance.
 * @method static static since($date = null, $inclusive = null) Alias for start().
 * @method static static sinceNow($inclusive = null) Create instance with start date set to now or set the start date to now if called on an instance.
 * @method static static|CarbonInterface end($date = null, $inclusive = null) Create instance specifying end date or modify the end date if called on an instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @method static static until($date = null, $inclusive = null) Alias for end().
 * @method static static untilNow($inclusive = null) Create instance with end date set to now or set the end date to now if called on an instance.
 * @method static static dates($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static between($start, $end = null) Create instance with start and end dates or modify the start and end dates if called on an instance.
 * @method static static recurrences($recurrences = null) Create instance with maximum number of recurrences or modify the number of recurrences if called on an instance.
 * @method static static times($recurrences = null) Alias for recurrences().
<<<<<<< HEAD
 * @method static static options($options = null) Create instance with options or modify the options if called on an instance.
=======
 * @method static static|int|null options($options = null) Create instance with options or modify the options if called on an instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @method static static toggle($options, $state = null) Create instance with options toggled on or off, or toggle options if called on an instance.
 * @method static static filter($callback, $name = null) Create instance with filter added to the stack or append a filter if called on an instance.
 * @method static static push($callback, $name = null) Alias for filter().
 * @method static static prepend($callback, $name = null) Create instance with filter prepended to the stack or prepend a filter if called on an instance.
<<<<<<< HEAD
 * @method static static filters(array $filters = []) Create instance with filters stack or replace the whole filters stack if called on an instance.
 * @method static static interval($interval) Create instance with given date interval or modify the interval if called on an instance.
=======
 * @method static static|array filters(array $filters = []) Create instance with filters stack or replace the whole filters stack if called on an instance.
 * @method static static|CarbonInterval interval($interval = null) Create instance with given date interval or modify the interval if called on an instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @method static static each($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static every($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static step($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static stepBy($interval) Create instance with given date interval or modify the interval if called on an instance.
 * @method static static invert() Create instance with inverted date interval or invert the interval if called on an instance.
 * @method static static years($years = 1) Create instance specifying a number of years for date interval or replace the interval by the given a number of years if called on an instance.
 * @method static static year($years = 1) Alias for years().
 * @method static static months($months = 1) Create instance specifying a number of months for date interval or replace the interval by the given a number of months if called on an instance.
 * @method static static month($months = 1) Alias for months().
 * @method static static weeks($weeks = 1) Create instance specifying a number of weeks for date interval or replace the interval by the given a number of weeks if called on an instance.
 * @method static static week($weeks = 1) Alias for weeks().
 * @method static static days($days = 1) Create instance specifying a number of days for date interval or replace the interval by the given a number of days if called on an instance.
 * @method static static dayz($days = 1) Alias for days().
 * @method static static day($days = 1) Alias for days().
 * @method static static hours($hours = 1) Create instance specifying a number of hours for date interval or replace the interval by the given a number of hours if called on an instance.
 * @method static static hour($hours = 1) Alias for hours().
 * @method static static minutes($minutes = 1) Create instance specifying a number of minutes for date interval or replace the interval by the given a number of minutes if called on an instance.
 * @method static static minute($minutes = 1) Alias for minutes().
 * @method static static seconds($seconds = 1) Create instance specifying a number of seconds for date interval or replace the interval by the given a number of seconds if called on an instance.
 * @method static static second($seconds = 1) Alias for seconds().
 * @method static static milliseconds($milliseconds = 1) Create instance specifying a number of milliseconds for date interval or replace the interval by the given a number of milliseconds if called on an instance.
 * @method static static millisecond($milliseconds = 1) Alias for milliseconds().
 * @method static static microseconds($microseconds = 1) Create instance specifying a number of microseconds for date interval or replace the interval by the given a number of microseconds if called on an instance.
 * @method static static microsecond($microseconds = 1) Alias for microseconds().
 * @method $this roundYear(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this roundYears(float $precision = 1, string $function = "round") Round the current instance year with given precision using the given function.
 * @method $this floorYear(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this floorYears(float $precision = 1) Truncate the current instance year with given precision.
 * @method $this ceilYear(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this ceilYears(float $precision = 1) Ceil the current instance year with given precision.
 * @method $this roundMonth(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this roundMonths(float $precision = 1, string $function = "round") Round the current instance month with given precision using the given function.
 * @method $this floorMonth(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this floorMonths(float $precision = 1) Truncate the current instance month with given precision.
 * @method $this ceilMonth(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this ceilMonths(float $precision = 1) Ceil the current instance month with given precision.
 * @method $this roundWeek(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundWeeks(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorWeek(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorWeeks(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilWeek(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilWeeks(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundDay(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this roundDays(float $precision = 1, string $function = "round") Round the current instance day with given precision using the given function.
 * @method $this floorDay(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this floorDays(float $precision = 1) Truncate the current instance day with given precision.
 * @method $this ceilDay(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this ceilDays(float $precision = 1) Ceil the current instance day with given precision.
 * @method $this roundHour(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this roundHours(float $precision = 1, string $function = "round") Round the current instance hour with given precision using the given function.
 * @method $this floorHour(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this floorHours(float $precision = 1) Truncate the current instance hour with given precision.
 * @method $this ceilHour(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this ceilHours(float $precision = 1) Ceil the current instance hour with given precision.
 * @method $this roundMinute(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this roundMinutes(float $precision = 1, string $function = "round") Round the current instance minute with given precision using the given function.
 * @method $this floorMinute(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this floorMinutes(float $precision = 1) Truncate the current instance minute with given precision.
 * @method $this ceilMinute(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this ceilMinutes(float $precision = 1) Ceil the current instance minute with given precision.
 * @method $this roundSecond(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this roundSeconds(float $precision = 1, string $function = "round") Round the current instance second with given precision using the given function.
 * @method $this floorSecond(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this floorSeconds(float $precision = 1) Truncate the current instance second with given precision.
 * @method $this ceilSecond(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this ceilSeconds(float $precision = 1) Ceil the current instance second with given precision.
 * @method $this roundMillennium(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this roundMillennia(float $precision = 1, string $function = "round") Round the current instance millennium with given precision using the given function.
 * @method $this floorMillennium(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this floorMillennia(float $precision = 1) Truncate the current instance millennium with given precision.
 * @method $this ceilMillennium(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this ceilMillennia(float $precision = 1) Ceil the current instance millennium with given precision.
 * @method $this roundCentury(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this roundCenturies(float $precision = 1, string $function = "round") Round the current instance century with given precision using the given function.
 * @method $this floorCentury(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this floorCenturies(float $precision = 1) Truncate the current instance century with given precision.
 * @method $this ceilCentury(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this ceilCenturies(float $precision = 1) Ceil the current instance century with given precision.
 * @method $this roundDecade(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this roundDecades(float $precision = 1, string $function = "round") Round the current instance decade with given precision using the given function.
 * @method $this floorDecade(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this floorDecades(float $precision = 1) Truncate the current instance decade with given precision.
 * @method $this ceilDecade(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this ceilDecades(float $precision = 1) Ceil the current instance decade with given precision.
 * @method $this roundQuarter(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this roundQuarters(float $precision = 1, string $function = "round") Round the current instance quarter with given precision using the given function.
 * @method $this floorQuarter(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this floorQuarters(float $precision = 1) Truncate the current instance quarter with given precision.
 * @method $this ceilQuarter(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this ceilQuarters(float $precision = 1) Ceil the current instance quarter with given precision.
 * @method $this roundMillisecond(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this roundMilliseconds(float $precision = 1, string $function = "round") Round the current instance millisecond with given precision using the given function.
 * @method $this floorMillisecond(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this floorMilliseconds(float $precision = 1) Truncate the current instance millisecond with given precision.
 * @method $this ceilMillisecond(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this ceilMilliseconds(float $precision = 1) Ceil the current instance millisecond with given precision.
 * @method $this roundMicrosecond(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this roundMicroseconds(float $precision = 1, string $function = "round") Round the current instance microsecond with given precision using the given function.
 * @method $this floorMicrosecond(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this floorMicroseconds(float $precision = 1) Truncate the current instance microsecond with given precision.
 * @method $this ceilMicrosecond(float $precision = 1) Ceil the current instance microsecond with given precision.
 * @method $this ceilMicroseconds(float $precision = 1) Ceil the current instance microsecond with given precision.
 *
<<<<<<< HEAD
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CarbonPeriod implements Iterator, Countable, JsonSerializable
{
=======
 * @mixin DeprecatedPeriodProperties
 *
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.CamelCasePropertyName)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class CarbonPeriod extends DatePeriodBase implements Countable, JsonSerializable
{
    use LocalFactory;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    use IntervalRounding;
    use Mixin {
        Mixin::mixin as baseMixin;
    }
<<<<<<< HEAD
    use Options;
=======
    use Options {
        Options::__debugInfo as baseDebugInfo;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    use ToStringFormat;

    /**
     * Built-in filter for limit by recurrences.
     *
     * @var callable
     */
    public const RECURRENCES_FILTER = [self::class, 'filterRecurrences'];

    /**
     * Built-in filter for limit to an end.
     *
     * @var callable
     */
    public const END_DATE_FILTER = [self::class, 'filterEndDate'];

    /**
     * Special value which can be returned by filters to end iteration. Also a filter.
     *
     * @var callable
     */
    public const END_ITERATION = [self::class, 'endIteration'];

    /**
<<<<<<< HEAD
     * Exclude start date from iteration.
     *
     * @var int
     */
    public const EXCLUDE_START_DATE = 1;

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Exclude end date from iteration.
     *
     * @var int
     */
<<<<<<< HEAD
    public const EXCLUDE_END_DATE = 2;
=======
    public const EXCLUDE_END_DATE = 8;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Yield CarbonImmutable instances.
     *
     * @var int
     */
    public const IMMUTABLE = 4;

    /**
     * Number of maximum attempts before giving up on finding next valid date.
     *
     * @var int
     */
    public const NEXT_MAX_ATTEMPTS = 1000;

    /**
     * Number of maximum attempts before giving up on finding end date.
     *
     * @var int
     */
    public const END_MAX_ATTEMPTS = 10000;

    /**
     * Default date class of iteration items.
     *
     * @var string
     */
    protected const DEFAULT_DATE_CLASS = Carbon::class;

    /**
     * The registered macros.
<<<<<<< HEAD
     *
     * @var array
     */
    protected static $macros = [];

    /**
     * Date class of iteration items.
     *
     * @var string
     */
    protected $dateClass = Carbon::class;

    /**
     * Underlying date interval instance. Always present, one day by default.
     *
     * @var CarbonInterval
     */
    protected $dateInterval;

    /**
     * True once __construct is finished.
     *
     * @var bool
     */
    protected $constructed = false;

    /**
     * Whether current date interval was set by default.
     *
     * @var bool
     */
    protected $isDefaultInterval;

    /**
     * The filters stack.
     *
     * @var array
     */
    protected $filters = [];

    /**
     * Period start date. Applied on rewind. Always present, now by default.
     *
     * @var CarbonInterface
     */
    protected $startDate;

    /**
     * Period end date. For inverted interval should be before the start date. Applied via a filter.
     *
     * @var CarbonInterface|null
     */
    protected $endDate;

    /**
     * Limit for number of recurrences. Applied via a filter.
     *
     * @var int|null
     */
    protected $recurrences;

    /**
     * Iteration options.
     *
     * @var int
     */
    protected $options;
=======
     */
    protected static array $macros = [];

    /**
     * Date class of iteration items.
     */
    protected string $dateClass = Carbon::class;

    /**
     * Underlying date interval instance. Always present, one day by default.
     */
    protected ?CarbonInterval $dateInterval = null;

    /**
     * True once __construct is finished.
     */
    protected bool $constructed = false;

    /**
     * Whether current date interval was set by default.
     */
    protected bool $isDefaultInterval = false;

    /**
     * The filters stack.
     */
    protected array $filters = [];

    /**
     * Period start date. Applied on rewind. Always present, now by default.
     */
    protected ?CarbonInterface $startDate = null;

    /**
     * Period end date. For inverted interval should be before the start date. Applied via a filter.
     */
    protected ?CarbonInterface $endDate = null;

    /**
     * Limit for number of recurrences. Applied via a filter.
     */
    protected int|float|null $carbonRecurrences = null;

    /**
     * Iteration options.
     */
    protected ?int $options = null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Index of current date. Always sequential, even if some dates are skipped by filters.
     * Equal to null only before the first iteration.
<<<<<<< HEAD
     *
     * @var int
     */
    protected $key;
=======
     */
    protected int $key = 0;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Current date. May temporarily hold unaccepted value when looking for a next valid date.
     * Equal to null only before the first iteration.
<<<<<<< HEAD
     *
     * @var CarbonInterface
     */
    protected $current;

    /**
     * Timezone of current date. Taken from the start date.
     *
     * @var \DateTimeZone|null
     */
    protected $timezone;

    /**
     * The cached validation result for current date.
     *
     * @var bool|string|null
     */
    protected $validationResult;

    /**
     * Timezone handler for settings() method.
     *
     * @var mixed
     */
    protected $tzName;

    /**
     * Make a CarbonPeriod instance from given variable if possible.
     *
     * @param mixed $var
     *
     * @return static|null
     */
    public static function make($var)
    {
        try {
            return static::instance($var);
        } catch (NotAPeriodException $e) {
=======
     */
    protected ?CarbonInterface $carbonCurrent = null;

    /**
     * Timezone of current date. Taken from the start date.
     */
    protected ?DateTimeZone $timezone = null;

    /**
     * The cached validation result for current date.
     */
    protected array|string|bool|null $validationResult = null;

    /**
     * Timezone handler for settings() method.
     */
    protected DateTimeZone|string|int|null $timezoneSetting = null;

    public function getIterator(): Generator
    {
        $this->rewind();

        while ($this->valid()) {
            $key = $this->key();
            $value = $this->current();

            yield $key => $value;

            $this->next();
        }
    }

    /**
     * Make a CarbonPeriod instance from given variable if possible.
     */
    public static function make(mixed $var): ?static
    {
        try {
            return static::instance($var);
        } catch (NotAPeriodException) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return static::create($var);
        }
    }

    /**
     * Create a new instance from a DatePeriod or CarbonPeriod object.
<<<<<<< HEAD
     *
     * @param CarbonPeriod|DatePeriod $period
     *
     * @return static
     */
    public static function instance($period)
=======
     */
    public static function instance(mixed $period): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($period instanceof static) {
            return $period->copy();
        }

        if ($period instanceof self) {
            return new static(
                $period->getStartDate(),
<<<<<<< HEAD
                $period->getEndDate() ?: $period->getRecurrences(),
                $period->getDateInterval(),
                $period->getOptions()
=======
                $period->getEndDate() ?? $period->getRecurrences(),
                $period->getDateInterval(),
                $period->getOptions(),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        if ($period instanceof DatePeriod) {
            return new static(
                $period->start,
                $period->end ?: ($period->recurrences - 1),
                $period->interval,
<<<<<<< HEAD
                $period->include_start_date ? 0 : static::EXCLUDE_START_DATE
=======
                $period->include_start_date ? 0 : static::EXCLUDE_START_DATE,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        $class = static::class;
        $type = \gettype($period);
<<<<<<< HEAD

        throw new NotAPeriodException(
            'Argument 1 passed to '.$class.'::'.__METHOD__.'() '.
            'must be an instance of DatePeriod or '.$class.', '.
            ($type === 'object' ? 'instance of '.\get_class($period) : $type).' given.'
=======
        $chunks = explode('::', __METHOD__);

        throw new NotAPeriodException(
            'Argument 1 passed to '.$class.'::'.end($chunks).'() '.
            'must be an instance of DatePeriod or '.$class.', '.
            ($type === 'object' ? 'instance of '.\get_class($period) : $type).' given.',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
     * Create a new instance.
<<<<<<< HEAD
     *
     * @return static
     */
    public static function create(...$params)
=======
     */
    public static function create(...$params): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return static::createFromArray($params);
    }

    /**
     * Create a new instance from an array of parameters.
<<<<<<< HEAD
     *
     * @param array $params
     *
     * @return static
     */
    public static function createFromArray(array $params)
=======
     */
    public static function createFromArray(array $params): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new static(...$params);
    }

    /**
     * Create CarbonPeriod from ISO 8601 string.
<<<<<<< HEAD
     *
     * @param string   $iso
     * @param int|null $options
     *
     * @return static
     */
    public static function createFromIso($iso, $options = null)
=======
     */
    public static function createFromIso(string $iso, ?int $options = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $params = static::parseIso8601($iso);

        $instance = static::createFromArray($params);

        if ($options !== null) {
<<<<<<< HEAD
            $instance->setOptions($options);
=======
            $instance->options = $options;
            $instance->handleChangedParameters();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $instance;
    }

    /**
     * Return whether given interval contains non zero value of any time unit.
<<<<<<< HEAD
     *
     * @param \DateInterval $interval
     *
     * @return bool
     */
    protected static function intervalHasTime(DateInterval $interval)
=======
     */
    protected static function intervalHasTime(DateInterval $interval): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $interval->h || $interval->i || $interval->s || $interval->f;
    }

    /**
     * Return whether given variable is an ISO 8601 specification.
     *
     * Note: Check is very basic, as actual validation will be done later when parsing.
<<<<<<< HEAD
     * We just want to ensure that variable is not any other type of a valid parameter.
     *
     * @param mixed $var
     *
     * @return bool
     */
    protected static function isIso8601($var)
=======
     * We just want to ensure that variable is not any other type of valid parameter.
     */
    protected static function isIso8601(mixed $var): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!\is_string($var)) {
            return false;
        }

        // Match slash but not within a timezone name.
        $part = '[a-z]+(?:[_-][a-z]+)*';

        preg_match("#\b$part/$part\b|(/)#i", $var, $match);

        return isset($match[1]);
    }

    /**
     * Parse given ISO 8601 string into an array of arguments.
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
<<<<<<< HEAD
     *
     * @param string $iso
     *
     * @return array
     */
    protected static function parseIso8601($iso)
=======
     */
    protected static function parseIso8601(string $iso): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $result = [];

        $interval = null;
        $start = null;
        $end = null;
        $dateClass = static::DEFAULT_DATE_CLASS;

        foreach (explode('/', $iso) as $key => $part) {
            if ($key === 0 && preg_match('/^R(\d*|INF)$/', $part, $match)) {
                $parsed = \strlen($match[1]) ? (($match[1] !== 'INF') ? (int) $match[1] : INF) : null;
<<<<<<< HEAD
            } elseif ($interval === null && $parsed = CarbonInterval::make($part)) {
=======
            } elseif ($interval === null && $parsed = self::makeInterval($part)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $interval = $part;
            } elseif ($start === null && $parsed = $dateClass::make($part)) {
                $start = $part;
            } elseif ($end === null && $parsed = $dateClass::make(static::addMissingParts($start ?? '', $part))) {
                $end = $part;
            } else {
                throw new InvalidPeriodParameterException("Invalid ISO 8601 specification: $iso.");
            }

            $result[] = $parsed;
        }

        return $result;
    }

    /**
     * Add missing parts of the target date from the source date.
<<<<<<< HEAD
     *
     * @param string $source
     * @param string $target
     *
     * @return string
     */
    protected static function addMissingParts($source, $target)
=======
     */
    protected static function addMissingParts(string $source, string $target): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $pattern = '/'.preg_replace('/\d+/', '[0-9]+', preg_quote($target, '/')).'$/';

        $result = preg_replace($pattern, $target, $source, 1, $count);

        return $count ? $result : $target;
    }

<<<<<<< HEAD
    /**
     * Register a custom macro.
     *
=======
    private static function makeInterval(mixed $input): ?CarbonInterval
    {
        try {
            return CarbonInterval::make($input);
        } catch (Throwable) {
            return null;
        }
    }

    private static function makeTimezone(mixed $input): ?CarbonTimeZone
    {
        if (!\is_string($input)) {
            return null;
        }

        try {
            return CarbonTimeZone::create($input);
        } catch (Throwable) {
            return null;
        }
    }

    /**
     * Register a custom macro.
     *
     * Pass null macro to remove it.
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @example
     * ```
     * CarbonPeriod::macro('middle', function () {
     *   return $this->getStartDate()->average($this->getEndDate());
     * });
     * echo CarbonPeriod::since('2011-05-12')->until('2011-06-03')->middle();
     * ```
<<<<<<< HEAD
     *
     * @param string          $name
     * @param object|callable $macro
     *
     * @return void
     */
    public static function macro($name, $macro)
=======
     */
    public static function macro(string $name, ?callable $macro): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static::$macros[$name] = $macro;
    }

    /**
     * Register macros from a mixin object.
     *
     * @example
     * ```
     * CarbonPeriod::mixin(new class {
     *   public function addDays() {
     *     return function ($count = 1) {
     *       return $this->setStartDate(
     *         $this->getStartDate()->addDays($count)
     *       )->setEndDate(
     *         $this->getEndDate()->addDays($count)
     *       );
     *     };
     *   }
     *   public function subDays() {
     *     return function ($count = 1) {
     *       return $this->setStartDate(
     *         $this->getStartDate()->subDays($count)
     *       )->setEndDate(
     *         $this->getEndDate()->subDays($count)
     *       );
     *     };
     *   }
     * });
     * echo CarbonPeriod::create('2000-01-01', '2000-02-01')->addDays(5)->subDays(3);
     * ```
     *
<<<<<<< HEAD
     * @param object|string $mixin
     *
     * @throws ReflectionException
     *
     * @return void
     */
    public static function mixin($mixin)
=======
     * @throws ReflectionException
     */
    public static function mixin(object|string $mixin): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static::baseMixin($mixin);
    }

    /**
     * Check if macro is registered.
<<<<<<< HEAD
     *
     * @param string $name
     *
     * @return bool
     */
    public static function hasMacro($name)
=======
     */
    public static function hasMacro(string $name): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return isset(static::$macros[$name]);
    }

    /**
     * Provide static proxy for instance aliases.
<<<<<<< HEAD
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
=======
     */
    public static function __callStatic(string $method, array $parameters): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $date = new static();

        if (static::hasMacro($method)) {
<<<<<<< HEAD
            return static::bindMacroContext(null, function () use (&$method, &$parameters, &$date) {
                return $date->callMacro($method, $parameters);
            });
=======
            return static::bindMacroContext(null, static fn () => $date->callMacro($method, $parameters));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $date->$method(...$parameters);
    }

    /**
     * CarbonPeriod constructor.
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     *
     * @throws InvalidArgumentException
     */
    public function __construct(...$arguments)
    {
<<<<<<< HEAD
        if (is_a($this->dateClass, DateTimeImmutable::class, true)) {
            $this->options = static::IMMUTABLE;
=======
        $raw = null;

        if (isset($arguments['raw'])) {
            $raw = $arguments['raw'];
            $this->isDefaultInterval = $arguments['isDefaultInterval'] ?? false;

            if (isset($arguments['dateClass'])) {
                $this->dateClass = $arguments['dateClass'];
            }

            $arguments = $raw;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        // Parse and assign arguments one by one. First argument may be an ISO 8601 spec,
        // which will be first parsed into parts and then processed the same way.

        $argumentsCount = \count($arguments);

        if ($argumentsCount && static::isIso8601($iso = $arguments[0])) {
            array_splice($arguments, 0, 1, static::parseIso8601($iso));
        }

        if ($argumentsCount === 1) {
<<<<<<< HEAD
            if ($arguments[0] instanceof DatePeriod) {
=======
            if ($arguments[0] instanceof self) {
                $arguments = [
                    $arguments[0]->getStartDate(),
                    $arguments[0]->getEndDate() ?? $arguments[0]->getRecurrences(),
                    $arguments[0]->getDateInterval(),
                    $arguments[0]->getOptions(),
                ];
            } elseif ($arguments[0] instanceof DatePeriod) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $arguments = [
                    $arguments[0]->start,
                    $arguments[0]->end ?: ($arguments[0]->recurrences - 1),
                    $arguments[0]->interval,
                    $arguments[0]->include_start_date ? 0 : static::EXCLUDE_START_DATE,
                ];
<<<<<<< HEAD
            } elseif ($arguments[0] instanceof self) {
                $arguments = [
                    $arguments[0]->getStartDate(),
                    $arguments[0]->getEndDate() ?: $arguments[0]->getRecurrences(),
                    $arguments[0]->getDateInterval(),
                    $arguments[0]->getOptions(),
                ];
            }
        }

        $optionsSet = false;
=======
            }
        }

        if (is_a($this->dateClass, DateTimeImmutable::class, true)) {
            $this->options = static::IMMUTABLE;
        }

        $optionsSet = false;
        $originalArguments = [];
        $sortedArguments = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        foreach ($arguments as $argument) {
            $parsedDate = null;

            if ($argument instanceof DateTimeZone) {
<<<<<<< HEAD
                $this->setTimezone($argument);
            } elseif ($this->dateInterval === null &&
                (
                    (\is_string($argument) && preg_match(
                        '/^(-?\d(\d(?![\/-])|[^\d\/-]([\/-])?)*|P[T\d].*|(?:\h*\d+(?:\.\d+)?\h*[a-z]+)+)$/i',
                        $argument
                    )) ||
                    $argument instanceof DateInterval ||
                    $argument instanceof Closure
                ) &&
                $parsedInterval = @CarbonInterval::make($argument)
            ) {
                $this->setDateInterval($parsedInterval);
            } elseif ($this->startDate === null && $parsedDate = $this->makeDateTime($argument)) {
                $this->setStartDate($parsedDate);
            } elseif ($this->endDate === null && ($parsedDate = $parsedDate ?? $this->makeDateTime($argument))) {
                $this->setEndDate($parsedDate);
            } elseif ($this->recurrences === null && $this->endDate === null && is_numeric($argument)) {
                $this->setRecurrences($argument);
            } elseif (!$optionsSet && (\is_int($argument) || $argument === null)) {
                $optionsSet = true;
                $this->setOptions(((int) $this->options) | ((int) $argument));
=======
                $sortedArguments = $this->configureTimezone($argument, $sortedArguments, $originalArguments);
            } elseif (!isset($sortedArguments['interval']) &&
                (
                    (\is_string($argument) && preg_match(
                        '/^(-?\d(\d(?![\/-])|[^\d\/-]([\/-])?)*|P[T\d].*|(?:\h*\d+(?:\.\d+)?\h*[a-z]+)+)$/i',
                        $argument,
                    )) ||
                    $argument instanceof DateInterval ||
                    $argument instanceof Closure ||
                    $argument instanceof Unit
                ) &&
                $parsedInterval = self::makeInterval($argument)
            ) {
                $sortedArguments['interval'] = $parsedInterval;
            } elseif (!isset($sortedArguments['start']) && $parsedDate = $this->makeDateTime($argument)) {
                $sortedArguments['start'] = $parsedDate;
                $originalArguments['start'] = $argument;
            } elseif (!isset($sortedArguments['end']) && ($parsedDate = $parsedDate ?? $this->makeDateTime($argument))) {
                $sortedArguments['end'] = $parsedDate;
                $originalArguments['end'] = $argument;
            } elseif (!isset($sortedArguments['recurrences']) &&
                !isset($sortedArguments['end']) &&
                (\is_int($argument) || \is_float($argument))
                && $argument >= 0
            ) {
                $sortedArguments['recurrences'] = $argument;
            } elseif (!$optionsSet && (\is_int($argument) || $argument === null)) {
                $optionsSet = true;
                $sortedArguments['options'] = (((int) $this->options) | ((int) $argument));
            } elseif ($parsedTimezone = self::makeTimezone($argument)) {
                $sortedArguments = $this->configureTimezone($parsedTimezone, $sortedArguments, $originalArguments);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            } else {
                throw new InvalidPeriodParameterException('Invalid constructor parameters.');
            }
        }

<<<<<<< HEAD
=======
        if ($raw === null && isset($sortedArguments['start'])) {
            $end = $sortedArguments['end'] ?? max(1, $sortedArguments['recurrences'] ?? 1);

            if (\is_float($end)) {
                $end = $end === INF ? PHP_INT_MAX : (int) round($end);
            }

            $raw = [
                $sortedArguments['start'],
                $sortedArguments['interval'] ?? CarbonInterval::day(),
                $end,
            ];
        }

        $this->setFromAssociativeArray($sortedArguments);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($this->startDate === null) {
            $dateClass = $this->dateClass;
            $this->setStartDate($dateClass::now());
        }

        if ($this->dateInterval === null) {
            $this->setDateInterval(CarbonInterval::day());

            $this->isDefaultInterval = true;
        }

        if ($this->options === null) {
            $this->setOptions(0);
        }

<<<<<<< HEAD
=======
        parent::__construct(
            $this->startDate,
            $this->dateInterval,
            $this->endDate ?? $this->recurrences ?? 1,
            $this->options,
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->constructed = true;
    }

    /**
     * Get a copy of the instance.
<<<<<<< HEAD
     *
     * @return static
     */
    public function copy()
=======
     */
    public function copy(): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return clone $this;
    }

    /**
     * Prepare the instance to be set (self if mutable to be mutated,
     * copy if immutable to generate a new instance).
<<<<<<< HEAD
     *
     * @return static
     */
    protected function copyIfImmutable()
=======
     */
    protected function copyIfImmutable(): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this;
    }

    /**
     * Get the getter for a property allowing both `DatePeriod` snakeCase and camelCase names.
<<<<<<< HEAD
     *
     * @param string $name
     *
     * @return callable|null
     */
    protected function getGetter(string $name)
    {
        switch (strtolower(preg_replace('/[A-Z]/', '_$0', $name))) {
            case 'start':
            case 'start_date':
                return [$this, 'getStartDate'];
            case 'end':
            case 'end_date':
                return [$this, 'getEndDate'];
            case 'interval':
            case 'date_interval':
                return [$this, 'getDateInterval'];
            case 'recurrences':
                return [$this, 'getRecurrences'];
            case 'include_start_date':
                return [$this, 'isStartIncluded'];
            case 'include_end_date':
                return [$this, 'isEndIncluded'];
            case 'current':
                return [$this, 'current'];
            default:
                return null;
        }
=======
     */
    protected function getGetter(string $name): ?callable
    {
        return match (strtolower(preg_replace('/[A-Z]/', '_$0', $name))) {
            'start', 'start_date' => [$this, 'getStartDate'],
            'end', 'end_date' => [$this, 'getEndDate'],
            'interval', 'date_interval' => [$this, 'getDateInterval'],
            'recurrences' => [$this, 'getRecurrences'],
            'include_start_date' => [$this, 'isStartIncluded'],
            'include_end_date' => [$this, 'isEndIncluded'],
            'current' => [$this, 'current'],
            'locale' => [$this, 'locale'],
            'tzname', 'tz_name' => fn () => match (true) {
                $this->timezoneSetting === null => null,
                \is_string($this->timezoneSetting) => $this->timezoneSetting,
                $this->timezoneSetting instanceof DateTimeZone => $this->timezoneSetting->getName(),
                default => CarbonTimeZone::instance($this->timezoneSetting)->getName(),
            },
            default => null,
        };
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
     *
     * @param string $name
     *
     * @return bool|CarbonInterface|CarbonInterval|int|null
     */
    public function get(string $name)
    {
        $getter = $this->getGetter($name);

        if ($getter) {
            return $getter();
        }

        throw new UnknownGetterException($name);
    }

    /**
     * Get a property allowing both `DatePeriod` snakeCase and camelCase names.
     *
     * @param string $name
     *
     * @return bool|CarbonInterface|CarbonInterval|int|null
     */
    public function __get(string $name)
    {
        return $this->get($name);
    }

    /**
     * Check if an attribute exists on the object
     *
     * @param string $name
     *
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return $this->getGetter($name) !== null;
    }

    /**
     * @alias copy
     *
     * Get a copy of the instance.
     *
     * @return static
     */
    public function clone()
    {
        return clone $this;
    }

    /**
     * Set the iteration item class.
     *
     * @param string $dateClass
     *
     * @return static
     */
    public function setDateClass(string $dateClass)
    {
        if (!is_a($dateClass, CarbonInterface::class, true)) {
            throw new NotACarbonClassException($dateClass);
        }

        $self = $this->copyIfImmutable();
        $self->dateClass = $dateClass;

        if (is_a($dateClass, Carbon::class, true)) {
            $self->options = $self->options & ~static::IMMUTABLE;
        } elseif (is_a($dateClass, CarbonImmutable::class, true)) {
            $self->options = $self->options | static::IMMUTABLE;
        }

        return $self;
    }

    /**
     * Returns iteration item date class.
     *
     * @return string
     */
    public function getDateClass(): string
    {
        return $this->dateClass;
    }

    /**
     * Change the period date interval.
     *
<<<<<<< HEAD
     * @param DateInterval|string $interval
=======
     * @param DateInterval|string|int $interval
     * @param Unit|string             $unit     the unit of $interval if it's a number
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidIntervalException
     *
     * @return static
     */
<<<<<<< HEAD
    public function setDateInterval($interval)
    {
        if (!$interval = CarbonInterval::make($interval)) {
=======
    public function setDateInterval(mixed $interval, Unit|string|null $unit = null): static
    {
        if ($interval instanceof Unit) {
            $interval = $interval->interval();
        }

        if ($unit instanceof Unit) {
            $unit = $unit->name;
        }

        if (!$interval = CarbonInterval::make($interval, $unit)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            throw new InvalidIntervalException('Invalid interval.');
        }

        if ($interval->spec() === 'PT0S' && !$interval->f && !$interval->getStep()) {
            throw new InvalidIntervalException('Empty interval is not accepted.');
        }

        $self = $this->copyIfImmutable();
        $self->dateInterval = $interval;

        $self->isDefaultInterval = false;

        $self->handleChangedParameters();

        return $self;
    }

    /**
<<<<<<< HEAD
     * Invert the period date interval.
     *
     * @return static
     */
    public function invertDateInterval()
=======
     * Reset the date interval to the default value.
     *
     * Difference with simply setting interval to 1-day is that P1D will not appear when calling toIso8601String()
     * and also next adding to the interval won't include the default 1-day.
     */
    public function resetDateInterval(): static
    {
        $self = $this->copyIfImmutable();
        $self->setDateInterval(CarbonInterval::day());

        $self->isDefaultInterval = true;

        return $self;
    }

    /**
     * Invert the period date interval.
     */
    public function invertDateInterval(): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->setDateInterval($this->dateInterval->invert());
    }

    /**
     * Set start and end date.
     *
     * @param DateTime|DateTimeInterface|string      $start
     * @param DateTime|DateTimeInterface|string|null $end
     *
     * @return static
     */
<<<<<<< HEAD
    public function setDates($start, $end)
=======
    public function setDates(mixed $start, mixed $end): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->setStartDate($start)->setEndDate($end);
    }

    /**
     * Change the period options.
     *
     * @param int|null $options
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     *
     * @return static
     */
    public function setOptions($options)
    {
        if (!\is_int($options) && $options !== null) {
            throw new InvalidPeriodParameterException('Invalid options.');
        }

        $self = $this->copyIfImmutable();
        $self->options = $options ?: 0;
=======
     * @return static
     */
    public function setOptions(?int $options): static
    {
        $self = $this->copyIfImmutable();
        $self->options = $options ?? 0;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Get the period options.
<<<<<<< HEAD
     *
     * @return int
     */
    public function getOptions()
    {
        return $this->options;
=======
     */
    public function getOptions(): int
    {
        return $this->options ?? 0;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Toggle given options on or off.
     *
     * @param int       $options
     * @param bool|null $state
     *
<<<<<<< HEAD
     * @throws \InvalidArgumentException
     *
     * @return static
     */
    public function toggleOptions($options, $state = null)
    {
=======
     * @throws InvalidArgumentException
     *
     * @return static
     */
    public function toggleOptions(int $options, ?bool $state = null): static
    {
        $self = $this->copyIfImmutable();

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($state === null) {
            $state = ($this->options & $options) !== $options;
        }

<<<<<<< HEAD
        return $this->setOptions(
            $state ?
            $this->options | $options :
            $this->options & ~$options
=======
        return $self->setOptions(
            $state ?
            $this->options | $options :
            $this->options & ~$options,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
     * Toggle EXCLUDE_START_DATE option.
<<<<<<< HEAD
     *
     * @param bool $state
     *
     * @return static
     */
    public function excludeStartDate($state = true)
=======
     */
    public function excludeStartDate(bool $state = true): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toggleOptions(static::EXCLUDE_START_DATE, $state);
    }

    /**
     * Toggle EXCLUDE_END_DATE option.
<<<<<<< HEAD
     *
     * @param bool $state
     *
     * @return static
     */
    public function excludeEndDate($state = true)
=======
     */
    public function excludeEndDate(bool $state = true): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toggleOptions(static::EXCLUDE_END_DATE, $state);
    }

    /**
     * Get the underlying date interval.
<<<<<<< HEAD
     *
     * @return CarbonInterval
     */
    public function getDateInterval()
=======
     */
    public function getDateInterval(): CarbonInterval
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->dateInterval->copy();
    }

    /**
     * Get start date of the period.
     *
     * @param string|null $rounding Optional rounding 'floor', 'ceil', 'round' using the period interval.
<<<<<<< HEAD
     *
     * @return CarbonInterface
     */
    public function getStartDate(string $rounding = null)
=======
     */
    public function getStartDate(?string $rounding = null): CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $date = $this->startDate->avoidMutation();

        return $rounding ? $date->round($this->getDateInterval(), $rounding) : $date;
    }

    /**
     * Get end date of the period.
     *
     * @param string|null $rounding Optional rounding 'floor', 'ceil', 'round' using the period interval.
<<<<<<< HEAD
     *
     * @return CarbonInterface|null
     */
    public function getEndDate(string $rounding = null)
=======
     */
    public function getEndDate(?string $rounding = null): ?CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->endDate) {
            return null;
        }

        $date = $this->endDate->avoidMutation();

        return $rounding ? $date->round($this->getDateInterval(), $rounding) : $date;
    }

    /**
     * Get number of recurrences.
<<<<<<< HEAD
     *
     * @return int|float|null
     */
    public function getRecurrences()
    {
        return $this->recurrences;
=======
     */
    #[ReturnTypeWillChange]
    public function getRecurrences(): int|float|null
    {
        return $this->carbonRecurrences;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Returns true if the start date should be excluded.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isStartExcluded()
=======
     */
    public function isStartExcluded(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ($this->options & static::EXCLUDE_START_DATE) !== 0;
    }

    /**
     * Returns true if the end date should be excluded.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isEndExcluded()
=======
     */
    public function isEndExcluded(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ($this->options & static::EXCLUDE_END_DATE) !== 0;
    }

    /**
     * Returns true if the start date should be included.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isStartIncluded()
=======
     */
    public function isStartIncluded(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return !$this->isStartExcluded();
    }

    /**
     * Returns true if the end date should be included.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function isEndIncluded()
=======
     */
    public function isEndIncluded(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return !$this->isEndExcluded();
    }

    /**
     * Return the start if it's included by option, else return the start + 1 period interval.
<<<<<<< HEAD
     *
     * @return CarbonInterface
     */
    public function getIncludedStartDate()
=======
     */
    public function getIncludedStartDate(): CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $start = $this->getStartDate();

        if ($this->isStartExcluded()) {
            return $start->add($this->getDateInterval());
        }

        return $start;
    }

    /**
     * Return the end if it's included by option, else return the end - 1 period interval.
     * Warning: if the period has no fixed end, this method will iterate the period to calculate it.
<<<<<<< HEAD
     *
     * @return CarbonInterface
     */
    public function getIncludedEndDate()
=======
     */
    public function getIncludedEndDate(): CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $end = $this->getEndDate();

        if (!$end) {
            return $this->calculateEnd();
        }

        if ($this->isEndExcluded()) {
            return $end->sub($this->getDateInterval());
        }

        return $end;
    }

    /**
     * Add a filter to the stack.
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
<<<<<<< HEAD
     *
     * @param callable $callback
     * @param string   $name
     *
     * @return static
     */
    public function addFilter($callback, $name = null)
=======
     */
    public function addFilter(callable|string $callback, ?string $name = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $self = $this->copyIfImmutable();
        $tuple = $self->createFilterTuple(\func_get_args());

        $self->filters[] = $tuple;

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Prepend a filter to the stack.
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
<<<<<<< HEAD
     *
     * @param callable $callback
     * @param string   $name
     *
     * @return static
     */
    public function prependFilter($callback, $name = null)
=======
     */
    public function prependFilter(callable|string $callback, ?string $name = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $self = $this->copyIfImmutable();
        $tuple = $self->createFilterTuple(\func_get_args());

        array_unshift($self->filters, $tuple);

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Remove a filter by instance or name.
<<<<<<< HEAD
     *
     * @param callable|string $filter
     *
     * @return static
     */
    public function removeFilter($filter)
=======
     */
    public function removeFilter(callable|string $filter): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $self = $this->copyIfImmutable();
        $key = \is_callable($filter) ? 0 : 1;

        $self->filters = array_values(array_filter(
            $this->filters,
<<<<<<< HEAD
            function ($tuple) use ($key, $filter) {
                return $tuple[$key] !== $filter;
            }
=======
            static fn ($tuple) => $tuple[$key] !== $filter,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ));

        $self->updateInternalState();

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Return whether given instance or name is in the filter stack.
<<<<<<< HEAD
     *
     * @param callable|string $filter
     *
     * @return bool
     */
    public function hasFilter($filter)
=======
     */
    public function hasFilter(callable|string $filter): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $key = \is_callable($filter) ? 0 : 1;

        foreach ($this->filters as $tuple) {
            if ($tuple[$key] === $filter) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get filters stack.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getFilters()
=======
     */
    public function getFilters(): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->filters;
    }

    /**
     * Set filters stack.
<<<<<<< HEAD
     *
     * @param array $filters
     *
     * @return static
     */
    public function setFilters(array $filters)
=======
     */
    public function setFilters(array $filters): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $self = $this->copyIfImmutable();
        $self->filters = $filters;

        $self->updateInternalState();

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Reset filters stack.
<<<<<<< HEAD
     *
     * @return static
     */
    public function resetFilters()
=======
     */
    public function resetFilters(): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $self = $this->copyIfImmutable();
        $self->filters = [];

        if ($self->endDate !== null) {
            $self->filters[] = [static::END_DATE_FILTER, null];
        }

<<<<<<< HEAD
        if ($self->recurrences !== null) {
=======
        if ($self->carbonRecurrences !== null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $self->filters[] = [static::RECURRENCES_FILTER, null];
        }

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Add a recurrences filter (set maximum number of recurrences).
     *
<<<<<<< HEAD
     * @param int|float|null $recurrences
     *
     * @throws InvalidArgumentException
     *
     * @return static
     */
    public function setRecurrences($recurrences)
    {
        if ((!is_numeric($recurrences) && $recurrences !== null) || $recurrences < 0) {
            throw new InvalidPeriodParameterException('Invalid number of recurrences.');
        }

=======
     * @throws InvalidArgumentException
     */
    public function setRecurrences(int|float|null $recurrences): static
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($recurrences === null) {
            return $this->removeFilter(static::RECURRENCES_FILTER);
        }

<<<<<<< HEAD
        /** @var self $self */
        $self = $this->copyIfImmutable();
        $self->recurrences = $recurrences === INF ? INF : (int) $recurrences;
=======
        if ($recurrences < 0) {
            throw new InvalidPeriodParameterException('Invalid number of recurrences.');
        }

        /** @var self $self */
        $self = $this->copyIfImmutable();
        $self->carbonRecurrences = $recurrences === INF ? INF : (int) $recurrences;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (!$self->hasFilter(static::RECURRENCES_FILTER)) {
            return $self->addFilter(static::RECURRENCES_FILTER);
        }

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Change the period start date.
     *
     * @param DateTime|DateTimeInterface|string $date
     * @param bool|null                         $inclusive
     *
     * @throws InvalidPeriodDateException
     *
     * @return static
     */
<<<<<<< HEAD
    public function setStartDate($date, $inclusive = null)
    {
        if (!$this->isInfiniteDate($date) && !($date = ([$this->dateClass, 'make'])($date))) {
=======
    public function setStartDate(mixed $date, ?bool $inclusive = null): static
    {
        if (!$this->isInfiniteDate($date) && !($date = ([$this->dateClass, 'make'])($date, $this->timezone))) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            throw new InvalidPeriodDateException('Invalid start date.');
        }

        $self = $this->copyIfImmutable();
        $self->startDate = $date;

        if ($inclusive !== null) {
            $self = $self->toggleOptions(static::EXCLUDE_START_DATE, !$inclusive);
        }

        return $self;
    }

    /**
     * Change the period end date.
     *
     * @param DateTime|DateTimeInterface|string|null $date
     * @param bool|null                              $inclusive
     *
     * @throws \InvalidArgumentException
     *
     * @return static
     */
<<<<<<< HEAD
    public function setEndDate($date, $inclusive = null)
    {
        if ($date !== null && !$this->isInfiniteDate($date) && !$date = ([$this->dateClass, 'make'])($date)) {
=======
    public function setEndDate(mixed $date, ?bool $inclusive = null): static
    {
        if ($date !== null && !$this->isInfiniteDate($date) && !$date = ([$this->dateClass, 'make'])($date, $this->timezone)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            throw new InvalidPeriodDateException('Invalid end date.');
        }

        if (!$date) {
            return $this->removeFilter(static::END_DATE_FILTER);
        }

        $self = $this->copyIfImmutable();
        $self->endDate = $date;

        if ($inclusive !== null) {
            $self = $self->toggleOptions(static::EXCLUDE_END_DATE, !$inclusive);
        }

        if (!$self->hasFilter(static::END_DATE_FILTER)) {
            return $self->addFilter(static::END_DATE_FILTER);
        }

        $self->handleChangedParameters();

        return $self;
    }

    /**
     * Check if the current position is valid.
<<<<<<< HEAD
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function valid()
=======
     */
    public function valid(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->validateCurrentDate() === true;
    }

    /**
     * Return the current key.
<<<<<<< HEAD
     *
     * @return int|null
     */
    #[ReturnTypeWillChange]
    public function key()
=======
     */
    public function key(): ?int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->valid()
            ? $this->key
            : null;
    }

    /**
     * Return the current date.
<<<<<<< HEAD
     *
     * @return CarbonInterface|null
     */
    #[ReturnTypeWillChange]
    public function current()
    {
        return $this->valid()
            ? $this->prepareForReturn($this->current)
=======
     */
    public function current(): ?CarbonInterface
    {
        return $this->valid()
            ? $this->prepareForReturn($this->carbonCurrent)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            : null;
    }

    /**
     * Move forward to the next date.
     *
     * @throws RuntimeException
<<<<<<< HEAD
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        if ($this->current === null) {
=======
     */
    public function next(): void
    {
        if ($this->carbonCurrent === null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->rewind();
        }

        if ($this->validationResult !== static::END_ITERATION) {
            $this->key++;

            $this->incrementCurrentDateUntilValid();
        }
    }

    /**
     * Rewind to the start date.
     *
     * Iterating over a date in the UTC timezone avoids bug during backward DST change.
     *
     * @see https://bugs.php.net/bug.php?id=72255
     * @see https://bugs.php.net/bug.php?id=74274
     * @see https://wiki.php.net/rfc/datetime_and_daylight_saving_time
     *
     * @throws RuntimeException
<<<<<<< HEAD
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        $this->key = 0;
        $this->current = ([$this->dateClass, 'make'])($this->startDate);
=======
     */
    public function rewind(): void
    {
        $this->key = 0;
        $this->carbonCurrent = ([$this->dateClass, 'make'])($this->startDate);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $settings = $this->getSettings();

        if ($this->hasLocalTranslator()) {
            $settings['locale'] = $this->getTranslatorLocale();
        }

<<<<<<< HEAD
        $this->current->settings($settings);
        $this->timezone = static::intervalHasTime($this->dateInterval) ? $this->current->getTimezone() : null;

        if ($this->timezone) {
            $this->current = $this->current->utc();
=======
        $this->carbonCurrent->settings($settings);
        $this->timezone = static::intervalHasTime($this->dateInterval) ? $this->carbonCurrent->getTimezone() : null;

        if ($this->timezone) {
            $this->carbonCurrent = $this->carbonCurrent->utc();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->validationResult = null;

        if ($this->isStartExcluded() || $this->validateCurrentDate() === false) {
            $this->incrementCurrentDateUntilValid();
        }
    }

    /**
     * Skip iterations and returns iteration state (false if ended, true if still valid).
     *
     * @param int $count steps number to skip (1 by default)
     *
     * @return bool
     */
<<<<<<< HEAD
    public function skip($count = 1)
=======
    public function skip(int $count = 1): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        for ($i = $count; $this->valid() && $i > 0; $i--) {
            $this->next();
        }

        return $this->valid();
    }

    /**
     * Format the date period as ISO 8601.
<<<<<<< HEAD
     *
     * @return string
     */
    public function toIso8601String()
    {
        $parts = [];

        if ($this->recurrences !== null) {
            $parts[] = 'R'.$this->recurrences;
=======
     */
    public function toIso8601String(): string
    {
        $parts = [];

        if ($this->carbonRecurrences !== null) {
            $parts[] = 'R'.$this->carbonRecurrences;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $parts[] = $this->startDate->toIso8601String();

<<<<<<< HEAD
        $parts[] = $this->dateInterval->spec();
=======
        if (!$this->isDefaultInterval) {
            $parts[] = $this->dateInterval->spec();
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($this->endDate !== null) {
            $parts[] = $this->endDate->toIso8601String();
        }

        return implode('/', $parts);
    }

    /**
     * Convert the date period into a string.
<<<<<<< HEAD
     *
     * @return string
     */
    public function toString()
    {
        $format = $this->localToStringFormat ?? static::$toStringFormat;
=======
     */
    public function toString(): string
    {
        $format = $this->localToStringFormat
            ?? $this->getFactory()->getSettings()['toStringFormat']
            ?? null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($format instanceof Closure) {
            return $format($this);
        }

        $translator = ([$this->dateClass, 'getTranslator'])();

        $parts = [];

        $format = $format ?? (
            !$this->startDate->isStartOfDay() || ($this->endDate && !$this->endDate->isStartOfDay())
                ? 'Y-m-d H:i:s'
                : 'Y-m-d'
        );

<<<<<<< HEAD
        if ($this->recurrences !== null) {
            $parts[] = $this->translate('period_recurrences', [], $this->recurrences, $translator);
=======
        if ($this->carbonRecurrences !== null) {
            $parts[] = $this->translate('period_recurrences', [], $this->carbonRecurrences, $translator);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $parts[] = $this->translate('period_interval', [':interval' => $this->dateInterval->forHumans([
            'join' => true,
        ])], null, $translator);

        $parts[] = $this->translate('period_start_date', [':date' => $this->startDate->rawFormat($format)], null, $translator);

        if ($this->endDate !== null) {
            $parts[] = $this->translate('period_end_date', [':date' => $this->endDate->rawFormat($format)], null, $translator);
        }

        $result = implode(' ', $parts);

        return mb_strtoupper(mb_substr($result, 0, 1)).mb_substr($result, 1);
    }

    /**
     * Format the date period as ISO 8601.
<<<<<<< HEAD
     *
     * @return string
     */
    public function spec()
=======
     */
    public function spec(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toIso8601String();
    }

    /**
     * Cast the current instance into the given class.
     *
     * @param string $className The $className::instance() method will be called to cast the current object.
     *
<<<<<<< HEAD
     * @return DatePeriod
     */
    public function cast(string $className)
=======
     * @return DatePeriod|object
     */
    public function cast(string $className): object
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!method_exists($className, 'instance')) {
            if (is_a($className, DatePeriod::class, true)) {
                return new $className(
                    $this->rawDate($this->getStartDate()),
                    $this->getDateInterval(),
                    $this->getEndDate() ? $this->rawDate($this->getIncludedEndDate()) : $this->getRecurrences(),
<<<<<<< HEAD
                    $this->isStartExcluded() ? DatePeriod::EXCLUDE_START_DATE : 0
=======
                    $this->isStartExcluded() ? DatePeriod::EXCLUDE_START_DATE : 0,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            throw new InvalidCastException("$className has not the instance() method needed to cast the date.");
        }

        return $className::instance($this);
    }

    /**
     * Return native DatePeriod PHP object matching the current instance.
     *
     * @example
     * ```
     * var_dump(CarbonPeriod::create('2021-01-05', '2021-02-15')->toDatePeriod());
     * ```
<<<<<<< HEAD
     *
     * @return DatePeriod
     */
    public function toDatePeriod()
=======
     */
    public function toDatePeriod(): DatePeriod
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->cast(DatePeriod::class);
    }

    /**
     * Return `true` if the period has no custom filter and is guaranteed to be endless.
     *
     * Note that we can't check if a period is endless as soon as it has custom filters
     * because filters can emit `CarbonPeriod::END_ITERATION` to stop the iteration in
     * a way we can't predict without actually iterating the period.
     */
    public function isUnfilteredAndEndLess(): bool
    {
        foreach ($this->filters as $filter) {
            switch ($filter) {
                case [static::RECURRENCES_FILTER, null]:
<<<<<<< HEAD
                    if ($this->recurrences !== null && is_finite($this->recurrences)) {
=======
                    if ($this->carbonRecurrences !== null && is_finite($this->carbonRecurrences)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                        return false;
                    }

                    break;

                case [static::END_DATE_FILTER, null]:
                    if ($this->endDate !== null && !$this->endDate->isEndOfTime()) {
                        return false;
                    }

                    break;

                default:
                    return false;
            }
        }

        return true;
    }

    /**
     * Convert the date period into an array without changing current iteration state.
     *
     * @return CarbonInterface[]
     */
<<<<<<< HEAD
    public function toArray()
=======
    public function toArray(): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($this->isUnfilteredAndEndLess()) {
            throw new EndLessPeriodException("Endless period can't be converted to array nor counted.");
        }

        $state = [
            $this->key,
<<<<<<< HEAD
            $this->current ? $this->current->avoidMutation() : null,
=======
            $this->carbonCurrent ? $this->carbonCurrent->avoidMutation() : null,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->validationResult,
        ];

        $result = iterator_to_array($this);

<<<<<<< HEAD
        [$this->key, $this->current, $this->validationResult] = $state;
=======
        [$this->key, $this->carbonCurrent, $this->validationResult] = $state;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $result;
    }

    /**
     * Count dates in the date period.
<<<<<<< HEAD
     *
     * @return int
     */
    #[ReturnTypeWillChange]
    public function count()
=======
     */
    public function count(): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return \count($this->toArray());
    }

    /**
     * Return the first date in the date period.
<<<<<<< HEAD
     *
     * @return CarbonInterface|null
     */
    public function first()
=======
     */
    public function first(): ?CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($this->isUnfilteredAndEndLess()) {
            foreach ($this as $date) {
                $this->rewind();

                return $date;
            }

            return null;
        }

        return ($this->toArray() ?: [])[0] ?? null;
    }

    /**
     * Return the last date in the date period.
<<<<<<< HEAD
     *
     * @return CarbonInterface|null
     */
    public function last()
=======
     */
    public function last(): ?CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $array = $this->toArray();

        return $array ? $array[\count($array) - 1] : null;
    }

    /**
     * Convert the date period into a string.
<<<<<<< HEAD
     *
     * @return string
     */
    public function __toString()
=======
     */
    public function __toString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toString();
    }

    /**
     * Add aliases for setters.
     *
     * CarbonPeriod::days(3)->hours(5)->invert()
     *     ->sinceNow()->until('2010-01-10')
     *     ->filter(...)
     *     ->count()
     *
     * Note: We use magic method to let static and instance aliases with the same names.
<<<<<<< HEAD
     *
     * @param string $method
     * @param array  $parameters
     *
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return static::bindMacroContext($this, function () use (&$method, &$parameters) {
                return $this->callMacro($method, $parameters);
            });
=======
     */
    public function __call(string $method, array $parameters): mixed
    {
        if (static::hasMacro($method)) {
            return static::bindMacroContext($this, fn () => $this->callMacro($method, $parameters));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $roundedValue = $this->callRoundMethod($method, $parameters);

        if ($roundedValue !== null) {
            return $roundedValue;
        }

<<<<<<< HEAD
        switch ($method) {
            case 'start':
            case 'since':
=======
        $count = \count($parameters);

        switch ($method) {
            case 'start':
            case 'since':
                if ($count === 0) {
                    return $this->getStartDate();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                self::setDefaultParameters($parameters, [
                    [0, 'date', null],
                ]);

                return $this->setStartDate(...$parameters);

            case 'sinceNow':
                return $this->setStartDate(new Carbon(), ...$parameters);

            case 'end':
            case 'until':
<<<<<<< HEAD
=======
                if ($count === 0) {
                    return $this->getEndDate();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                self::setDefaultParameters($parameters, [
                    [0, 'date', null],
                ]);

                return $this->setEndDate(...$parameters);

            case 'untilNow':
                return $this->setEndDate(new Carbon(), ...$parameters);

            case 'dates':
            case 'between':
                self::setDefaultParameters($parameters, [
                    [0, 'start', null],
                    [1, 'end', null],
                ]);

                return $this->setDates(...$parameters);

            case 'recurrences':
            case 'times':
<<<<<<< HEAD
=======
                if ($count === 0) {
                    return $this->getRecurrences();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                self::setDefaultParameters($parameters, [
                    [0, 'recurrences', null],
                ]);

                return $this->setRecurrences(...$parameters);

            case 'options':
<<<<<<< HEAD
=======
                if ($count === 0) {
                    return $this->getOptions();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                self::setDefaultParameters($parameters, [
                    [0, 'options', null],
                ]);

                return $this->setOptions(...$parameters);

            case 'toggle':
                self::setDefaultParameters($parameters, [
                    [0, 'options', null],
                ]);

                return $this->toggleOptions(...$parameters);

            case 'filter':
            case 'push':
                return $this->addFilter(...$parameters);

            case 'prepend':
                return $this->prependFilter(...$parameters);

            case 'filters':
<<<<<<< HEAD
=======
                if ($count === 0) {
                    return $this->getFilters();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                self::setDefaultParameters($parameters, [
                    [0, 'filters', []],
                ]);

                return $this->setFilters(...$parameters);

            case 'interval':
            case 'each':
            case 'every':
            case 'step':
            case 'stepBy':
<<<<<<< HEAD
=======
                if ($count === 0) {
                    return $this->getDateInterval();
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                return $this->setDateInterval(...$parameters);

            case 'invert':
                return $this->invertDateInterval();

            case 'years':
            case 'year':
            case 'months':
            case 'month':
            case 'weeks':
            case 'week':
            case 'days':
            case 'dayz':
            case 'day':
            case 'hours':
            case 'hour':
            case 'minutes':
            case 'minute':
            case 'seconds':
            case 'second':
            case 'milliseconds':
            case 'millisecond':
            case 'microseconds':
            case 'microsecond':
                return $this->setDateInterval((
                    // Override default P1D when instantiating via fluent setters.
                    [$this->isDefaultInterval ? new CarbonInterval('PT0S') : $this->dateInterval, $method]
                )(...$parameters));
        }

        $dateClass = $this->dateClass;

        if ($this->localStrictModeEnabled ?? $dateClass::isStrictModeEnabled()) {
            throw new UnknownMethodException($method);
        }

        return $this;
    }

    /**
     * Set the instance's timezone from a string or object and apply it to start/end.
<<<<<<< HEAD
     *
     * @param \DateTimeZone|string $timezone
     *
     * @return static
     */
    public function setTimezone($timezone)
    {
        $self = $this->copyIfImmutable();
        $self->tzName = $timezone;
        $self->timezone = $timezone;
=======
     */
    public function setTimezone(DateTimeZone|string|int $timezone): static
    {
        $self = $this->copyIfImmutable();
        $self->timezoneSetting = $timezone;
        $self->timezone = CarbonTimeZone::instance($timezone);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($self->startDate) {
            $self = $self->setStartDate($self->startDate->setTimezone($timezone));
        }

        if ($self->endDate) {
            $self = $self->setEndDate($self->endDate->setTimezone($timezone));
        }

        return $self;
    }

    /**
     * Set the instance's timezone from a string or object and add/subtract the offset difference to start/end.
<<<<<<< HEAD
     *
     * @param \DateTimeZone|string $timezone
     *
     * @return static
     */
    public function shiftTimezone($timezone)
    {
        $self = $this->copyIfImmutable();
        $self->tzName = $timezone;
        $self->timezone = $timezone;
=======
     */
    public function shiftTimezone(DateTimeZone|string|int $timezone): static
    {
        $self = $this->copyIfImmutable();
        $self->timezoneSetting = $timezone;
        $self->timezone = CarbonTimeZone::instance($timezone);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($self->startDate) {
            $self = $self->setStartDate($self->startDate->shiftTimezone($timezone));
        }

        if ($self->endDate) {
            $self = $self->setEndDate($self->endDate->shiftTimezone($timezone));
        }

        return $self;
    }

    /**
<<<<<<< HEAD
     * Returns the end is set, else calculated from start an recurrences.
=======
     * Returns the end is set, else calculated from start and recurrences.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param string|null $rounding Optional rounding 'floor', 'ceil', 'round' using the period interval.
     *
     * @return CarbonInterface
     */
<<<<<<< HEAD
    public function calculateEnd(string $rounding = null)
=======
    public function calculateEnd(?string $rounding = null): CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($end = $this->getEndDate($rounding)) {
            return $end;
        }

        if ($this->dateInterval->isEmpty()) {
            return $this->getStartDate($rounding);
        }

        $date = $this->getEndFromRecurrences() ?? $this->iterateUntilEnd();

        if ($date && $rounding) {
            $date = $date->avoidMutation()->round($this->getDateInterval(), $rounding);
        }

        return $date;
    }

<<<<<<< HEAD
    /**
     * @return CarbonInterface|null
     */
    private function getEndFromRecurrences()
    {
        if ($this->recurrences === null) {
            throw new UnreachableException(
                "Could not calculate period end without either explicit end or recurrences.\n".
                "If you're looking for a forever-period, use ->setRecurrences(INF)."
            );
        }

        if ($this->recurrences === INF) {
=======
    private function getEndFromRecurrences(): ?CarbonInterface
    {
        if ($this->carbonRecurrences === null) {
            throw new UnreachableException(
                "Could not calculate period end without either explicit end or recurrences.\n".
                "If you're looking for a forever-period, use ->setRecurrences(INF).",
            );
        }

        if ($this->carbonRecurrences === INF) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $start = $this->getStartDate();

            return $start < $start->avoidMutation()->add($this->getDateInterval())
                ? CarbonImmutable::endOfTime()
                : CarbonImmutable::startOfTime();
        }

        if ($this->filters === [[static::RECURRENCES_FILTER, null]]) {
            return $this->getStartDate()->avoidMutation()->add(
                $this->getDateInterval()->times(
<<<<<<< HEAD
                    $this->recurrences - ($this->isStartExcluded() ? 0 : 1)
                )
=======
                    $this->carbonRecurrences - ($this->isStartExcluded() ? 0 : 1),
                ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        return null;
    }

<<<<<<< HEAD
    /**
     * @return CarbonInterface|null
     */
    private function iterateUntilEnd()
=======
    private function iterateUntilEnd(): ?CarbonInterface
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $attempts = 0;
        $date = null;

        foreach ($this as $date) {
            if (++$attempts > static::END_MAX_ATTEMPTS) {
                throw new UnreachableException(
<<<<<<< HEAD
                    'Could not calculate period end after iterating '.static::END_MAX_ATTEMPTS.' times.'
=======
                    'Could not calculate period end after iterating '.static::END_MAX_ATTEMPTS.' times.',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
        }

        return $date;
    }

    /**
     * Returns true if the current period overlaps the given one (if 1 parameter passed)
     * or the period between 2 dates (if 2 parameters passed).
     *
     * @param CarbonPeriod|\DateTimeInterface|Carbon|CarbonImmutable|string $rangeOrRangeStart
     * @param \DateTimeInterface|Carbon|CarbonImmutable|string|null         $rangeEnd
     *
     * @return bool
     */
<<<<<<< HEAD
    public function overlaps($rangeOrRangeStart, $rangeEnd = null)
=======
    public function overlaps(mixed $rangeOrRangeStart, mixed $rangeEnd = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $range = $rangeEnd ? static::create($rangeOrRangeStart, $rangeEnd) : $rangeOrRangeStart;

        if (!($range instanceof self)) {
            $range = static::create($range);
        }

        [$start, $end] = $this->orderCouple($this->getStartDate(), $this->calculateEnd());
        [$rangeStart, $rangeEnd] = $this->orderCouple($range->getStartDate(), $range->calculateEnd());

        return $end > $rangeStart && $rangeEnd > $start;
    }

    /**
     * Execute a given function on each date of the period.
     *
     * @example
     * ```
     * Carbon::create('2020-11-29')->daysUntil('2020-12-24')->forEach(function (Carbon $date) {
     *   echo $date->diffInDays('2020-12-25')." days before Christmas!\n";
     * });
     * ```
<<<<<<< HEAD
     *
     * @param callable $callback
     */
    public function forEach(callable $callback)
=======
     */
    public function forEach(callable $callback): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        foreach ($this as $date) {
            $callback($date);
        }
    }

    /**
     * Execute a given function on each date of the period and yield the result of this function.
     *
     * @example
     * ```
     * $period = Carbon::create('2020-11-29')->daysUntil('2020-12-24');
     * echo implode("\n", iterator_to_array($period->map(function (Carbon $date) {
     *   return $date->diffInDays('2020-12-25').' days before Christmas!';
     * })));
     * ```
<<<<<<< HEAD
     *
     * @param callable $callback
     *
     * @return \Generator
     */
    public function map(callable $callback)
=======
     */
    public function map(callable $callback): Generator
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        foreach ($this as $date) {
            yield $callback($date);
        }
    }

    /**
     * Determines if the instance is equal to another.
     * Warning: if options differ, instances will never be equal.
     *
<<<<<<< HEAD
     * @param mixed $period
     *
     * @see equalTo()
     *
     * @return bool
     */
    public function eq($period): bool
=======
     * @see equalTo()
     */
    public function eq(mixed $period): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->equalTo($period);
    }

    /**
     * Determines if the instance is equal to another.
     * Warning: if options differ, instances will never be equal.
<<<<<<< HEAD
     *
     * @param mixed $period
     *
     * @return bool
     */
    public function equalTo($period): bool
=======
     */
    public function equalTo(mixed $period): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!($period instanceof self)) {
            $period = self::make($period);
        }

        $end = $this->getEndDate();

        return $period !== null
            && $this->getDateInterval()->eq($period->getDateInterval())
            && $this->getStartDate()->eq($period->getStartDate())
            && ($end ? $end->eq($period->getEndDate()) : $this->getRecurrences() === $period->getRecurrences())
            && ($this->getOptions() & (~static::IMMUTABLE)) === ($period->getOptions() & (~static::IMMUTABLE));
    }

    /**
     * Determines if the instance is not equal to another.
     * Warning: if options differ, instances will never be equal.
     *
<<<<<<< HEAD
     * @param mixed $period
     *
     * @see notEqualTo()
     *
     * @return bool
     */
    public function ne($period): bool
=======
     * @see notEqualTo()
     */
    public function ne(mixed $period): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->notEqualTo($period);
    }

    /**
     * Determines if the instance is not equal to another.
     * Warning: if options differ, instances will never be equal.
<<<<<<< HEAD
     *
     * @param mixed $period
     *
     * @return bool
     */
    public function notEqualTo($period): bool
=======
     */
    public function notEqualTo(mixed $period): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return !$this->eq($period);
    }

    /**
<<<<<<< HEAD
     * Determines if the start date is before an other given date.
     * (Rather start/end are included by options is ignored.)
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function startsBefore($date = null): bool
=======
     * Determines if the start date is before another given date.
     * (Rather start/end are included by options is ignored.)
     */
    public function startsBefore(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getStartDate()->lessThan($this->resolveCarbon($date));
    }

    /**
     * Determines if the start date is before or the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function startsBeforeOrAt($date = null): bool
=======
     */
    public function startsBeforeOrAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getStartDate()->lessThanOrEqualTo($this->resolveCarbon($date));
    }

    /**
<<<<<<< HEAD
     * Determines if the start date is after an other given date.
     * (Rather start/end are included by options is ignored.)
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function startsAfter($date = null): bool
=======
     * Determines if the start date is after another given date.
     * (Rather start/end are included by options is ignored.)
     */
    public function startsAfter(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getStartDate()->greaterThan($this->resolveCarbon($date));
    }

    /**
     * Determines if the start date is after or the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function startsAfterOrAt($date = null): bool
=======
     */
    public function startsAfterOrAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getStartDate()->greaterThanOrEqualTo($this->resolveCarbon($date));
    }

    /**
     * Determines if the start date is the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function startsAt($date = null): bool
=======
     */
    public function startsAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getStartDate()->equalTo($this->resolveCarbon($date));
    }

    /**
<<<<<<< HEAD
     * Determines if the end date is before an other given date.
     * (Rather start/end are included by options is ignored.)
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function endsBefore($date = null): bool
=======
     * Determines if the end date is before another given date.
     * (Rather start/end are included by options is ignored.)
     */
    public function endsBefore(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->calculateEnd()->lessThan($this->resolveCarbon($date));
    }

    /**
     * Determines if the end date is before or the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function endsBeforeOrAt($date = null): bool
=======
     */
    public function endsBeforeOrAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->calculateEnd()->lessThanOrEqualTo($this->resolveCarbon($date));
    }

    /**
<<<<<<< HEAD
     * Determines if the end date is after an other given date.
     * (Rather start/end are included by options is ignored.)
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function endsAfter($date = null): bool
=======
     * Determines if the end date is after another given date.
     * (Rather start/end are included by options is ignored.)
     */
    public function endsAfter(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->calculateEnd()->greaterThan($this->resolveCarbon($date));
    }

    /**
     * Determines if the end date is after or the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function endsAfterOrAt($date = null): bool
=======
     */
    public function endsAfterOrAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->calculateEnd()->greaterThanOrEqualTo($this->resolveCarbon($date));
    }

    /**
     * Determines if the end date is the same as a given date.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @param mixed $date
     *
     * @return bool
     */
    public function endsAt($date = null): bool
=======
     */
    public function endsAt(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->calculateEnd()->equalTo($this->resolveCarbon($date));
    }

    /**
     * Return true if start date is now or later.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isStarted(): bool
    {
        return $this->startsBeforeOrAt();
    }

    /**
     * Return true if end date is now or later.
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isEnded(): bool
    {
        return $this->endsBeforeOrAt();
    }

    /**
     * Return true if now is between start date (included) and end date (excluded).
     * (Rather start/end are included by options is ignored.)
<<<<<<< HEAD
     *
     * @return bool
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isInProgress(): bool
    {
        return $this->isStarted() && !$this->isEnded();
    }

    /**
     * Round the current instance at the given unit with given precision if specified and the given function.
<<<<<<< HEAD
     *
     * @param string                              $unit
     * @param float|int|string|\DateInterval|null $precision
     * @param string                              $function
     *
     * @return static
     */
    public function roundUnit($unit, $precision = 1, $function = 'round')
    {
=======
     */
    public function roundUnit(
        string $unit,
        DateInterval|float|int|string|null $precision = 1,
        callable|string $function = 'round',
    ): static {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $self = $this->copyIfImmutable();
        $self = $self->setStartDate($self->getStartDate()->roundUnit($unit, $precision, $function));

        if ($self->endDate) {
            $self = $self->setEndDate($self->getEndDate()->roundUnit($unit, $precision, $function));
        }

        return $self->setDateInterval($self->getDateInterval()->roundUnit($unit, $precision, $function));
    }

    /**
     * Truncate the current instance at the given unit with given precision if specified.
<<<<<<< HEAD
     *
     * @param string                              $unit
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return static
     */
    public function floorUnit($unit, $precision = 1)
=======
     */
    public function floorUnit(string $unit, DateInterval|float|int|string|null $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->roundUnit($unit, $precision, 'floor');
    }

    /**
     * Ceil the current instance at the given unit with given precision if specified.
<<<<<<< HEAD
     *
     * @param string                              $unit
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return static
     */
    public function ceilUnit($unit, $precision = 1)
=======
     */
    public function ceilUnit(string $unit, DateInterval|float|int|string|null $precision = 1): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->roundUnit($unit, $precision, 'ceil');
    }

    /**
     * Round the current instance second with given precision if specified (else period interval is used).
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     * @param string                              $function
     *
     * @return static
     */
    public function round($precision = null, $function = 'round')
    {
=======
     */
    public function round(
        DateInterval|float|int|string|null $precision = null,
        callable|string $function = 'round',
    ): static {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this->roundWith(
            $precision ?? $this->getDateInterval()->setLocalTranslator(TranslatorImmutable::get('en'))->forHumans(),
            $function
        );
    }

    /**
     * Round the current instance second with given precision if specified (else period interval is used).
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return static
     */
    public function floor($precision = null)
=======
     */
    public function floor(DateInterval|float|int|string|null $precision = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->round($precision, 'floor');
    }

    /**
     * Ceil the current instance second with given precision if specified (else period interval is used).
<<<<<<< HEAD
     *
     * @param float|int|string|\DateInterval|null $precision
     *
     * @return static
     */
    public function ceil($precision = null)
=======
     */
    public function ceil(DateInterval|float|int|string|null $precision = null): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->round($precision, 'ceil');
    }

    /**
     * Specify data which should be serialized to JSON.
     *
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return CarbonInterface[]
     */
<<<<<<< HEAD
    #[ReturnTypeWillChange]
    public function jsonSerialize()
=======
    public function jsonSerialize(): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toArray();
    }

    /**
     * Return true if the given date is between start and end.
<<<<<<< HEAD
     *
     * @param \Carbon\Carbon|\Carbon\CarbonPeriod|\Carbon\CarbonInterval|\DateInterval|\DatePeriod|\DateTimeInterface|string|null $date
     *
     * @return bool
     */
    public function contains($date = null): bool
=======
     */
    public function contains(mixed $date = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $startMethod = 'startsBefore'.($this->isStartIncluded() ? 'OrAt' : '');
        $endMethod = 'endsAfter'.($this->isEndIncluded() ? 'OrAt' : '');

        return $this->$startMethod($date) && $this->$endMethod($date);
    }

    /**
     * Return true if the current period follows a given other period (with no overlap).
     * For instance, [2019-08-01 -> 2019-08-12] follows [2019-07-29 -> 2019-07-31]
     * Note than in this example, follows() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
<<<<<<< HEAD
     *
     * @param \Carbon\CarbonPeriod|\DatePeriod|string $period
     *
     * @return bool
     */
    public function follows($period, ...$arguments): bool
=======
     */
    public function follows(mixed $period, mixed ...$arguments): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $period = $this->resolveCarbonPeriod($period, ...$arguments);

        return $this->getIncludedStartDate()->equalTo($period->getIncludedEndDate()->add($period->getDateInterval()));
    }

    /**
     * Return true if the given other period follows the current one (with no overlap).
     * For instance, [2019-07-29 -> 2019-07-31] is followed by [2019-08-01 -> 2019-08-12]
     * Note than in this example, isFollowedBy() would be false if 2019-08-01 or 2019-07-31 was excluded by options.
<<<<<<< HEAD
     *
     * @param \Carbon\CarbonPeriod|\DatePeriod|string $period
     *
     * @return bool
     */
    public function isFollowedBy($period, ...$arguments): bool
=======
     */
    public function isFollowedBy(mixed $period, mixed ...$arguments): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $period = $this->resolveCarbonPeriod($period, ...$arguments);

        return $period->follows($this);
    }

    /**
     * Return true if the given period either follows or is followed by the current one.
     *
     * @see follows()
     * @see isFollowedBy()
<<<<<<< HEAD
     *
     * @param \Carbon\CarbonPeriod|\DatePeriod|string $period
     *
     * @return bool
     */
    public function isConsecutiveWith($period, ...$arguments): bool
=======
     */
    public function isConsecutiveWith(mixed $period, mixed ...$arguments): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->follows($period, ...$arguments) || $this->isFollowedBy($period, ...$arguments);
    }

<<<<<<< HEAD
    /**
     * Update properties after removing built-in filters.
     *
     * @return void
     */
    protected function updateInternalState()
=======
    public function __debugInfo(): array
    {
        $info = $this->baseDebugInfo();
        unset($info['start'], $info['end'], $info['interval'], $info['include_start_date'], $info['include_end_date']);

        return $info;
    }

    /**
     * Update properties after removing built-in filters.
     */
    protected function updateInternalState(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->hasFilter(static::END_DATE_FILTER)) {
            $this->endDate = null;
        }

        if (!$this->hasFilter(static::RECURRENCES_FILTER)) {
<<<<<<< HEAD
            $this->recurrences = null;
=======
            $this->carbonRecurrences = null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    /**
     * Create a filter tuple from raw parameters.
     *
     * Will create an automatic filter callback for one of Carbon's is* methods.
<<<<<<< HEAD
     *
     * @param array $parameters
     *
     * @return array
     */
    protected function createFilterTuple(array $parameters)
=======
     */
    protected function createFilterTuple(array $parameters): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $method = array_shift($parameters);

        if (!$this->isCarbonPredicateMethod($method)) {
            return [$method, array_shift($parameters)];
        }

<<<<<<< HEAD
        return [function ($date) use ($method, $parameters) {
            return ([$date, $method])(...$parameters);
        }, $method];
=======
        return [static fn ($date) => ([$date, $method])(...$parameters), $method];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Return whether given callable is a string pointing to one of Carbon's is* methods
     * and should be automatically converted to a filter callback.
<<<<<<< HEAD
     *
     * @param callable $callable
     *
     * @return bool
     */
    protected function isCarbonPredicateMethod($callable)
=======
     */
    protected function isCarbonPredicateMethod(callable|string $callable): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return \is_string($callable) && str_starts_with($callable, 'is') &&
            (method_exists($this->dateClass, $callable) || ([$this->dateClass, 'hasMacro'])($callable));
    }

    /**
     * Recurrences filter callback (limits number of recurrences).
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
<<<<<<< HEAD
     *
     * @param \Carbon\Carbon $current
     * @param int            $key
     *
     * @return bool|string
     */
    protected function filterRecurrences($current, $key)
    {
        if ($key < $this->recurrences) {
=======
     */
    protected function filterRecurrences(CarbonInterface $current, int $key): bool|callable
    {
        if ($key < $this->carbonRecurrences) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return true;
        }

        return static::END_ITERATION;
    }

    /**
     * End date filter callback.
     *
<<<<<<< HEAD
     * @param \Carbon\Carbon $current
     *
     * @return bool|string
     */
    protected function filterEndDate($current)
=======
     * @return bool|static::END_ITERATION
     */
    protected function filterEndDate(CarbonInterface $current): bool|callable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->isEndExcluded() && $current == $this->endDate) {
            return true;
        }

        if ($this->dateInterval->invert ? $current > $this->endDate : $current < $this->endDate) {
            return true;
        }

        return static::END_ITERATION;
    }

    /**
     * End iteration filter callback.
     *
<<<<<<< HEAD
     * @return string
     */
    protected function endIteration()
=======
     * @return static::END_ITERATION
     */
    protected function endIteration(): callable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return static::END_ITERATION;
    }

    /**
     * Handle change of the parameters.
     */
<<<<<<< HEAD
    protected function handleChangedParameters()
=======
    protected function handleChangedParameters(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (($this->getOptions() & static::IMMUTABLE) && $this->dateClass === Carbon::class) {
            $this->dateClass = CarbonImmutable::class;
        } elseif (!($this->getOptions() & static::IMMUTABLE) && $this->dateClass === CarbonImmutable::class) {
            $this->dateClass = Carbon::class;
        }

        $this->validationResult = null;
    }

    /**
     * Validate current date and stop iteration when necessary.
     *
     * Returns true when current date is valid, false if it is not, or static::END_ITERATION
     * when iteration should be stopped.
     *
<<<<<<< HEAD
     * @return bool|string
     */
    protected function validateCurrentDate()
    {
        if ($this->current === null) {
=======
     * @return bool|static::END_ITERATION
     */
    protected function validateCurrentDate(): bool|callable
    {
        if ($this->carbonCurrent === null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->rewind();
        }

        // Check after the first rewind to avoid repeating the initial validation.
        return $this->validationResult ?? ($this->validationResult = $this->checkFilters());
    }

    /**
     * Check whether current value and key pass all the filters.
     *
<<<<<<< HEAD
     * @return bool|string
     */
    protected function checkFilters()
    {
        $current = $this->prepareForReturn($this->current);

        foreach ($this->filters as $tuple) {
            $result = \call_user_func(
                $tuple[0],
                $current->avoidMutation(),
                $this->key,
                $this
            );
=======
     * @return bool|static::END_ITERATION
     */
    protected function checkFilters(): bool|callable
    {
        $current = $this->prepareForReturn($this->carbonCurrent);

        foreach ($this->filters as $tuple) {
            $result = \call_user_func($tuple[0], $current->avoidMutation(), $this->key, $this);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            if ($result === static::END_ITERATION) {
                return static::END_ITERATION;
            }

            if (!$result) {
                return false;
            }
        }

        return true;
    }

    /**
     * Prepare given date to be returned to the external logic.
     *
     * @param CarbonInterface $date
     *
     * @return CarbonInterface
     */
    protected function prepareForReturn(CarbonInterface $date)
    {
        $date = ([$this->dateClass, 'make'])($date);

        if ($this->timezone) {
<<<<<<< HEAD
            $date = $date->setTimezone($this->timezone);
=======
            return $date->setTimezone($this->timezone);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $date;
    }

    /**
     * Keep incrementing the current date until a valid date is found or the iteration is ended.
     *
     * @throws RuntimeException
<<<<<<< HEAD
     *
     * @return void
     */
    protected function incrementCurrentDateUntilValid()
=======
     */
    protected function incrementCurrentDateUntilValid(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $attempts = 0;

        do {
<<<<<<< HEAD
            $this->current = $this->current->add($this->dateInterval);
=======
            $this->carbonCurrent = $this->carbonCurrent->add($this->dateInterval);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $this->validationResult = null;

            if (++$attempts > static::NEXT_MAX_ATTEMPTS) {
                throw new UnreachableException('Could not find next valid date.');
            }
        } while ($this->validateCurrentDate() === false);
    }

    /**
     * Call given macro.
<<<<<<< HEAD
     *
     * @param string $name
     * @param array  $parameters
     *
     * @return mixed
     */
    protected function callMacro($name, $parameters)
=======
     */
    protected function callMacro(string $name, array $parameters): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $macro = static::$macros[$name];

        if ($macro instanceof Closure) {
            $boundMacro = @$macro->bindTo($this, static::class) ?: @$macro->bindTo(null, static::class);

            return ($boundMacro ?: $macro)(...$parameters);
        }

        return $macro(...$parameters);
    }

    /**
     * Return the Carbon instance passed through, a now instance in the same timezone
     * if null given or parse the input if string given.
     *
     * @param \Carbon\Carbon|\Carbon\CarbonPeriod|\Carbon\CarbonInterval|\DateInterval|\DatePeriod|\DateTimeInterface|string|null $date
     *
     * @return \Carbon\CarbonInterface
     */
    protected function resolveCarbon($date = null)
    {
        return $this->getStartDate()->nowWithSameTz()->carbonize($date);
    }

    /**
     * Resolve passed arguments or DatePeriod to a CarbonPeriod object.
<<<<<<< HEAD
     *
     * @param mixed $period
     * @param mixed ...$arguments
     *
     * @return static
     */
    protected function resolveCarbonPeriod($period, ...$arguments)
=======
     */
    protected function resolveCarbonPeriod(mixed $period, mixed ...$arguments): self
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($period instanceof self) {
            return $period;
        }

        return $period instanceof DatePeriod
            ? static::instance($period)
            : static::create($period, ...$arguments);
    }

    private function orderCouple($first, $second): array
    {
        return $first > $second ? [$second, $first] : [$first, $second];
    }

    private function makeDateTime($value): ?DateTimeInterface
    {
        if ($value instanceof DateTimeInterface) {
            return $value;
        }

<<<<<<< HEAD
=======
        if ($value instanceof WeekDay || $value instanceof Month) {
            $dateClass = $this->dateClass;

            return new $dateClass($value, $this->timezoneSetting);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (\is_string($value)) {
            $value = trim($value);

            if (!preg_match('/^P[\dT]/', $value) &&
                !preg_match('/^R\d/', $value) &&
                preg_match('/[a-z\d]/i', $value)
            ) {
                $dateClass = $this->dateClass;

<<<<<<< HEAD
                return $dateClass::parse($value, $this->tzName);
=======
                return $dateClass::parse($value, $this->timezoneSetting);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }
        }

        return null;
    }

    private function isInfiniteDate($date): bool
    {
        return $date instanceof CarbonInterface && ($date->isEndOfTime() || $date->isStartOfTime());
    }

    private function rawDate($date): ?DateTimeInterface
    {
        if ($date === false || $date === null) {
            return null;
        }

        if ($date instanceof CarbonInterface) {
            return $date->isMutable()
                ? $date->toDateTime()
                : $date->toDateTimeImmutable();
        }

        if (\in_array(\get_class($date), [DateTime::class, DateTimeImmutable::class], true)) {
            return $date;
        }

        $class = $date instanceof DateTime ? DateTime::class : DateTimeImmutable::class;

        return new $class($date->format('Y-m-d H:i:s.u'), $date->getTimezone());
    }

    private static function setDefaultParameters(array &$parameters, array $defaults): void
    {
        foreach ($defaults as [$index, $name, $value]) {
            if (!\array_key_exists($index, $parameters) && !\array_key_exists($name, $parameters)) {
                $parameters[$index] = $value;
            }
        }
    }
<<<<<<< HEAD
=======

    private function setFromAssociativeArray(array $parameters): void
    {
        if (isset($parameters['start'])) {
            $this->setStartDate($parameters['start']);
        }

        if (isset($parameters['start'])) {
            $this->setStartDate($parameters['start']);
        }

        if (isset($parameters['end'])) {
            $this->setEndDate($parameters['end']);
        }

        if (isset($parameters['recurrences'])) {
            $this->setRecurrences($parameters['recurrences']);
        }

        if (isset($parameters['interval'])) {
            $this->setDateInterval($parameters['interval']);
        }

        if (isset($parameters['options'])) {
            $this->setOptions($parameters['options']);
        }
    }

    private function configureTimezone(DateTimeZone $timezone, array $sortedArguments, array $originalArguments): array
    {
        $this->setTimezone($timezone);

        if (\is_string($originalArguments['start'] ?? null)) {
            $sortedArguments['start'] = $this->makeDateTime($originalArguments['start']);
        }

        if (\is_string($originalArguments['end'] ?? null)) {
            $sortedArguments['end'] = $this->makeDateTime($originalArguments['end']);
        }

        return $sortedArguments;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\LogicException;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class ProgressIndicator
{
    private const FORMATS = [
        'normal' => ' %indicator% %message%',
        'normal_no_ansi' => ' %message%',

        'verbose' => ' %indicator% %message% (%elapsed:6s%)',
        'verbose_no_ansi' => ' %message% (%elapsed:6s%)',

        'very_verbose' => ' %indicator% %message% (%elapsed:6s%, %memory:6s%)',
        'very_verbose_no_ansi' => ' %message% (%elapsed:6s%, %memory:6s%)',
    ];

<<<<<<< HEAD
    private OutputInterface $output;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private int $startTime;
    private ?string $format = null;
    private ?string $message = null;
    private array $indicatorValues;
    private int $indicatorCurrent;
<<<<<<< HEAD
    private int $indicatorChangeInterval;
    private float $indicatorUpdateTime;
    private bool $started = false;
=======
    private string $finishedIndicatorValue;
    private float $indicatorUpdateTime;
    private bool $started = false;
    private bool $finished = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @var array<string, callable>
     */
    private static array $formatters;

    /**
     * @param int        $indicatorChangeInterval Change interval in milliseconds
     * @param array|null $indicatorValues         Animated indicator characters
     */
<<<<<<< HEAD
    public function __construct(OutputInterface $output, ?string $format = null, int $indicatorChangeInterval = 100, ?array $indicatorValues = null)
    {
        $this->output = $output;

        $format ??= $this->determineBestFormat();
        $indicatorValues ??= ['-', '\\', '|', '/'];
        $indicatorValues = array_values($indicatorValues);
=======
    public function __construct(
        private OutputInterface $output,
        ?string $format = null,
        private int $indicatorChangeInterval = 100,
        ?array $indicatorValues = null,
        ?string $finishedIndicatorValue = null,
    ) {
        $format ??= $this->determineBestFormat();
        $indicatorValues ??= ['-', '\\', '|', '/'];
        $indicatorValues = array_values($indicatorValues);
        $finishedIndicatorValue ??= '✔';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (2 > \count($indicatorValues)) {
            throw new InvalidArgumentException('Must have at least 2 indicator value characters.');
        }

        $this->format = self::getFormatDefinition($format);
<<<<<<< HEAD
        $this->indicatorChangeInterval = $indicatorChangeInterval;
        $this->indicatorValues = $indicatorValues;
=======
        $this->indicatorValues = $indicatorValues;
        $this->finishedIndicatorValue = $finishedIndicatorValue;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->startTime = time();
    }

    /**
     * Sets the current indicator message.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setMessage(?string $message)
=======
     */
    public function setMessage(?string $message): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->message = $message;

        $this->display();
    }

    /**
     * Starts the indicator output.
<<<<<<< HEAD
     *
     * @return void
     */
    public function start(string $message)
=======
     */
    public function start(string $message): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($this->started) {
            throw new LogicException('Progress indicator already started.');
        }

        $this->message = $message;
        $this->started = true;
<<<<<<< HEAD
=======
        $this->finished = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->startTime = time();
        $this->indicatorUpdateTime = $this->getCurrentTimeInMilliseconds() + $this->indicatorChangeInterval;
        $this->indicatorCurrent = 0;

        $this->display();
    }

    /**
     * Advances the indicator.
<<<<<<< HEAD
     *
     * @return void
     */
    public function advance()
=======
     */
    public function advance(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->started) {
            throw new LogicException('Progress indicator has not yet been started.');
        }

        if (!$this->output->isDecorated()) {
            return;
        }

        $currentTime = $this->getCurrentTimeInMilliseconds();

        if ($currentTime < $this->indicatorUpdateTime) {
            return;
        }

        $this->indicatorUpdateTime = $currentTime + $this->indicatorChangeInterval;
        ++$this->indicatorCurrent;

        $this->display();
    }

    /**
     * Finish the indicator with message.
     *
<<<<<<< HEAD
     * @return void
     */
    public function finish(string $message)
    {
=======
     * @param ?string $finishedIndicator
     */
    public function finish(string $message/* , ?string $finishedIndicator = null */): void
    {
        $finishedIndicator = 1 < \func_num_args() ? func_get_arg(1) : null;
        if (null !== $finishedIndicator && !\is_string($finishedIndicator)) {
            throw new \TypeError(\sprintf('Argument 2 passed to "%s()" must be of the type string or null, "%s" given.', __METHOD__, get_debug_type($finishedIndicator)));
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (!$this->started) {
            throw new LogicException('Progress indicator has not yet been started.');
        }

<<<<<<< HEAD
=======
        if (null !== $finishedIndicator) {
            $this->finishedIndicatorValue = $finishedIndicator;
        }

        $this->finished = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->message = $message;
        $this->display();
        $this->output->writeln('');
        $this->started = false;
    }

    /**
     * Gets the format for a given name.
     */
    public static function getFormatDefinition(string $name): ?string
    {
        return self::FORMATS[$name] ?? null;
    }

    /**
     * Sets a placeholder formatter for a given name.
     *
     * This method also allow you to override an existing placeholder.
<<<<<<< HEAD
     *
     * @return void
     */
    public static function setPlaceholderFormatterDefinition(string $name, callable $callable)
=======
     */
    public static function setPlaceholderFormatterDefinition(string $name, callable $callable): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        self::$formatters ??= self::initPlaceholderFormatters();

        self::$formatters[$name] = $callable;
    }

    /**
     * Gets the placeholder formatter for a given name (including the delimiter char like %).
     */
    public static function getPlaceholderFormatterDefinition(string $name): ?callable
    {
        self::$formatters ??= self::initPlaceholderFormatters();

        return self::$formatters[$name] ?? null;
    }

    private function display(): void
    {
        if (OutputInterface::VERBOSITY_QUIET === $this->output->getVerbosity()) {
            return;
        }

<<<<<<< HEAD
        $this->overwrite(preg_replace_callback("{%([a-z\-_]+)(?:\:([^%]+))?%}i", function ($matches) {
=======
        $this->overwrite(preg_replace_callback('{%([a-z\-_]+)(?:\:([^%]+))?%}i', function ($matches) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            if ($formatter = self::getPlaceholderFormatterDefinition($matches[1])) {
                return $formatter($this);
            }

            return $matches[0];
        }, $this->format ?? ''));
    }

    private function determineBestFormat(): string
    {
        return match ($this->output->getVerbosity()) {
            // OutputInterface::VERBOSITY_QUIET: display is disabled anyway
            OutputInterface::VERBOSITY_VERBOSE => $this->output->isDecorated() ? 'verbose' : 'verbose_no_ansi',
            OutputInterface::VERBOSITY_VERY_VERBOSE,
            OutputInterface::VERBOSITY_DEBUG => $this->output->isDecorated() ? 'very_verbose' : 'very_verbose_no_ansi',
            default => $this->output->isDecorated() ? 'normal' : 'normal_no_ansi',
        };
    }

    /**
     * Overwrites a previous message to the output.
     */
    private function overwrite(string $message): void
    {
        if ($this->output->isDecorated()) {
            $this->output->write("\x0D\x1B[2K");
            $this->output->write($message);
        } else {
            $this->output->writeln($message);
        }
    }

    private function getCurrentTimeInMilliseconds(): float
    {
        return round(microtime(true) * 1000);
    }

    /**
     * @return array<string, \Closure>
     */
    private static function initPlaceholderFormatters(): array
    {
        return [
<<<<<<< HEAD
            'indicator' => fn (self $indicator) => $indicator->indicatorValues[$indicator->indicatorCurrent % \count($indicator->indicatorValues)],
=======
            'indicator' => fn (self $indicator) => $indicator->finished ? $indicator->finishedIndicatorValue : $indicator->indicatorValues[$indicator->indicatorCurrent % \count($indicator->indicatorValues)],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'message' => fn (self $indicator) => $indicator->message,
            'elapsed' => fn (self $indicator) => Helper::formatTime(time() - $indicator->startTime, 2),
            'memory' => fn () => Helper::formatMemory(memory_get_usage(true)),
        ];
    }
}

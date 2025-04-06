<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

use const PHP_EOL;
use PHPUnit\Event\NoPreviousThrowableException;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Throwable
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
    private readonly string $message;
    private readonly string $description;
    private readonly string $stackTrace;
    private readonly ?Throwable $previous;

    /**
     * @psalm-param class-string $className
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Throwable
{
    /**
     * @var class-string
     */
    private string $className;
    private string $message;
    private string $description;
    private string $stackTrace;
    private ?Throwable $previous;

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $className, string $message, string $description, string $stackTrace, ?self $previous)
    {
        $this->className   = $className;
        $this->message     = $message;
        $this->description = $description;
        $this->stackTrace  = $stackTrace;
        $this->previous    = $previous;
    }

    /**
     * @throws NoPreviousThrowableException
     */
    public function asString(): string
    {
        $buffer = $this->description();

        if (!empty($this->stackTrace())) {
            $buffer .= PHP_EOL . $this->stackTrace();
        }

        if ($this->hasPrevious()) {
            $buffer .= PHP_EOL . 'Caused by' . PHP_EOL . $this->previous()->asString();
        }

        return $buffer;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function className(): string
    {
        return $this->className;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function stackTrace(): string
    {
        return $this->stackTrace;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->previous
=======
     * @phpstan-assert-if-true !null $this->previous
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasPrevious(): bool
    {
        return $this->previous !== null;
    }

    /**
     * @throws NoPreviousThrowableException
     */
    public function previous(): self
    {
        if ($this->previous === null) {
            throw new NoPreviousThrowableException;
        }

        return $this->previous;
    }
}

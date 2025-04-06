<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use function sprintf;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class PartialMockObjectCreated implements Event
{
    private readonly Telemetry\Info $telemetryInfo;

    /**
     * @psalm-var class-string
     */
    private readonly string $className;

    /**
     * @psalm-var list<string>
     */
    private readonly array $methodNames;

    /**
     * @psalm-param class-string $className
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PartialMockObjectCreated implements Event
{
    private Telemetry\Info $telemetryInfo;

    /**
     * @var class-string
     */
    private string $className;

    /**
     * @var list<string>
     */
    private array $methodNames;

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(Telemetry\Info $telemetryInfo, string $className, string ...$methodNames)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->className     = $className;
        $this->methodNames   = $methodNames;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
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

    /**
<<<<<<< HEAD
     * @psalm-return list<string>
=======
     * @return list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function methodNames(): array
    {
        return $this->methodNames;
    }

    public function asString(): string
    {
        return sprintf(
            'Partial Mock Object Created (%s)',
            $this->className,
        );
    }
}

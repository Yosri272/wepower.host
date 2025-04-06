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
final class TestStubCreated implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestStubCreated implements Event
{
    private Telemetry\Info $telemetryInfo;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @var class-string
     */
<<<<<<< HEAD
    private readonly string $className;

    /**
     * @psalm-param class-string $className
=======
    private string $className;

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(Telemetry\Info $telemetryInfo, string $className)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->className     = $className;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

    /**
     * @return class-string
     */
    public function className(): string
    {
        return $this->className;
    }

    public function asString(): string
    {
        return sprintf(
            'Test Stub Created (%s)',
            $this->className,
        );
    }
}

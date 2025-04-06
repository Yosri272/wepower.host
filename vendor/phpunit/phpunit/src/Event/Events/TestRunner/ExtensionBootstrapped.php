<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestRunner;

use function sprintf;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionBootstrapped implements Event
{
    private readonly Telemetry\Info $telemetryInfo;

    /**
     * @psalm-var class-string
     */
    private readonly string $className;

    /**
     * @psalm-var array<string, string>
     */
    private readonly array $parameters;

    /**
     * @psalm-param class-string $className
     * @psalm-param array<string, string> $parameters
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExtensionBootstrapped implements Event
{
    private Telemetry\Info $telemetryInfo;

    /**
     * @var class-string
     */
    private string $className;

    /**
     * @var array<string, string>
     */
    private array $parameters;

    /**
     * @param class-string          $className
     * @param array<string, string> $parameters
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(Telemetry\Info $telemetryInfo, string $className, array $parameters)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->className     = $className;
        $this->parameters    = $parameters;
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
     * @psalm-return array<string, string>
=======
     * @return array<string, string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function parameters(): array
    {
        return $this->parameters;
    }

    public function asString(): string
    {
        return sprintf(
            'Extension Bootstrapped (%s)',
            $this->className,
        );
    }
}

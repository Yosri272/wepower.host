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
final class MockObjectFromWsdlCreated implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
    private readonly string $wsdlFile;

    /**
     * @psalm-var class-string
     */
    private readonly string $originalClassName;

    /**
     * @psalm-var class-string
     */
    private readonly string $mockClassName;

    /**
     * @psalm-var list<string>
     */
    private readonly array $methods;
    private readonly bool $callOriginalConstructor;
    private readonly array $options;

    /**
     * @psalm-param class-string $originalClassName
     * @psalm-param class-string $mockClassName
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MockObjectFromWsdlCreated implements Event
{
    private Telemetry\Info $telemetryInfo;
    private string $wsdlFile;

    /**
     * @var class-string
     */
    private string $originalClassName;

    /**
     * @var class-string
     */
    private string $mockClassName;

    /**
     * @var list<string>
     */
    private array $methods;
    private bool $callOriginalConstructor;

    /**
     * @var list<mixed>
     */
    private array $options;

    /**
     * @param class-string $originalClassName
     * @param class-string $mockClassName
     * @param list<string> $methods
     * @param list<mixed>  $options
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(Telemetry\Info $telemetryInfo, string $wsdlFile, string $originalClassName, string $mockClassName, array $methods, bool $callOriginalConstructor, array $options)
    {
        $this->telemetryInfo           = $telemetryInfo;
        $this->wsdlFile                = $wsdlFile;
        $this->originalClassName       = $originalClassName;
        $this->mockClassName           = $mockClassName;
        $this->methods                 = $methods;
        $this->callOriginalConstructor = $callOriginalConstructor;
        $this->options                 = $options;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

    public function wsdlFile(): string
    {
        return $this->wsdlFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function originalClassName(): string
    {
        return $this->originalClassName;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function mockClassName(): string
    {
        return $this->mockClassName;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<string>
=======
     * @return list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function methods(): array
    {
        return $this->methods;
    }

    public function callOriginalConstructor(): bool
    {
        return $this->callOriginalConstructor;
    }

<<<<<<< HEAD
=======
    /**
     * @return list<mixed>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function options(): array
    {
        return $this->options;
    }

    public function asString(): string
    {
        return sprintf(
            'Mock Object Created (%s)',
            $this->wsdlFile,
        );
    }
}

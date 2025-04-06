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
use PHPUnit\Event\Code\ClassMethod;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry\Info;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DataProviderMethodCalled implements Event
{
    private readonly Info $telemetryInfo;
    private readonly ClassMethod $testMethod;
    private readonly ClassMethod $dataProviderMethod;
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataProviderMethodCalled implements Event
{
    private Info $telemetryInfo;
    private ClassMethod $testMethod;
    private ClassMethod $dataProviderMethod;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(Info $telemetryInfo, ClassMethod $testMethod, ClassMethod $dataProviderMethod)
    {
        $this->telemetryInfo      = $telemetryInfo;
        $this->testMethod         = $testMethod;
        $this->dataProviderMethod = $dataProviderMethod;
    }

    public function telemetryInfo(): Info
    {
        return $this->telemetryInfo;
    }

    public function testMethod(): ClassMethod
    {
        return $this->testMethod;
    }

    public function dataProviderMethod(): ClassMethod
    {
        return $this->dataProviderMethod;
    }

    public function asString(): string
    {
        return sprintf(
            'Data Provider Method Called (%s::%s for test method %s::%s)',
            $this->dataProviderMethod->className(),
            $this->dataProviderMethod->methodName(),
            $this->testMethod->className(),
            $this->testMethod->methodName(),
        );
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Generator;

<<<<<<< HEAD
use function call_user_func;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function class_exists;
use PHPUnit\Framework\MockObject\ConfigurableMethod;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockClass implements MockType
{
    private readonly string $classCode;

    /**
     * @psalm-var class-string
     */
    private readonly string $mockName;

    /**
     * @psalm-var list<ConfigurableMethod>
     */
    private readonly array $configurableMethods;

    /**
     * @psalm-param class-string $mockName
     * @psalm-param list<ConfigurableMethod> $configurableMethods
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class MockClass implements MockType
{
    private string $classCode;

    /**
     * @var class-string
     */
    private string $mockName;

    /**
     * @var list<ConfigurableMethod>
     */
    private array $configurableMethods;

    /**
     * @param class-string             $mockName
     * @param list<ConfigurableMethod> $configurableMethods
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $classCode, string $mockName, array $configurableMethods)
    {
        $this->classCode           = $classCode;
        $this->mockName            = $mockName;
        $this->configurableMethods = $configurableMethods;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function generate(): string
    {
        if (!class_exists($this->mockName, false)) {
            eval($this->classCode);
<<<<<<< HEAD

            call_user_func(
                [
                    $this->mockName,
                    '__phpunit_initConfigurableMethods',
                ],
                ...$this->configurableMethods,
            );
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $this->mockName;
    }

    public function classCode(): string
    {
        return $this->classCode;
    }
<<<<<<< HEAD
=======

    /**
     * @return list<ConfigurableMethod>
     */
    public function configurableMethods(): array
    {
        return $this->configurableMethods;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

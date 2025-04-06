<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

use SebastianBergmann\Type\Type;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethod
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;

    /**
     * @psalm-var array<int, mixed>
     */
    private readonly array $defaultParameterValues;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $numberOfParameters;
    private readonly Type $returnType;

    /**
     * @psalm-param non-empty-string $name
     * @psalm-param array<int, mixed> $defaultParameterValues
     * @psalm-param non-negative-int $numberOfParameters
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConfigurableMethod
{
    /**
     * @var non-empty-string
     */
    private string $name;

    /**
     * @var array<int, mixed>
     */
    private array $defaultParameterValues;

    /**
     * @var non-negative-int
     */
    private int $numberOfParameters;
    private Type $returnType;

    /**
     * @param non-empty-string  $name
     * @param array<int, mixed> $defaultParameterValues
     * @param non-negative-int  $numberOfParameters
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $name, array $defaultParameterValues, int $numberOfParameters, Type $returnType)
    {
        $this->name                   = $name;
        $this->defaultParameterValues = $defaultParameterValues;
        $this->numberOfParameters     = $numberOfParameters;
        $this->returnType             = $returnType;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<int, mixed>
=======
     * @return array<int, mixed>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function defaultParameterValues(): array
    {
        return $this->defaultParameterValues;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function numberOfParameters(): int
    {
        return $this->numberOfParameters;
    }

    public function mayReturn(mixed $value): bool
    {
        return $this->returnType->isAssignable(Type::fromValue($value, false));
    }

    public function returnTypeDeclaration(): string
    {
        return $this->returnType->asString();
    }
}

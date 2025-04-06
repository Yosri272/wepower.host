<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

use function strtolower;

<<<<<<< HEAD
final class SimpleType extends Type
{
=======
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for this library
 */
final class SimpleType extends Type
{
    /**
     * @var non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private string $name;
    private bool $allowsNull;
    private mixed $value;

<<<<<<< HEAD
=======
    /**
     * @param non-empty-string $name
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function __construct(string $name, bool $nullable, mixed $value = null)
    {
        $this->name       = $this->normalize($name);
        $this->allowsNull = $nullable;
        $this->value      = $value;
    }

    public function isAssignable(Type $other): bool
    {
        if ($this->allowsNull && $other instanceof NullType) {
            return true;
        }

        if ($this->name === 'bool' && $other->name() === 'true') {
            return true;
        }

        if ($this->name === 'bool' && $other->name() === 'false') {
            return true;
        }

        if ($other instanceof self) {
            return $this->name === $other->name;
        }

        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function name(): string
    {
        return $this->name;
    }

    public function allowsNull(): bool
    {
        return $this->allowsNull;
    }

    public function value(): mixed
    {
        return $this->value;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true SimpleType $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isSimple(): bool
    {
        return true;
    }

<<<<<<< HEAD
=======
    /**
     * @param non-empty-string $name
     *
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function normalize(string $name): string
    {
        $name = strtolower($name);

        return match ($name) {
            'boolean' => 'bool',
            'real', 'double' => 'float',
            'integer' => 'int',
            '[]'      => 'array',
            default   => $name,
        };
    }
}

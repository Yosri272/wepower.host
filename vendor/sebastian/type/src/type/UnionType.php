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

<<<<<<< HEAD
=======
use function array_is_list;
use function assert;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function count;
use function implode;
use function sort;

<<<<<<< HEAD
final class UnionType extends Type
{
    /**
     * @psalm-var non-empty-list<Type>
=======
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for this library
 */
final class UnionType extends Type
{
    /**
     * @var non-empty-list<Type>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $types;

    /**
     * @throws RuntimeException
     */
    public function __construct(Type ...$types)
    {
        $this->ensureMinimumOfTwoTypes(...$types);
        $this->ensureOnlyValidTypes(...$types);

<<<<<<< HEAD
=======
        assert(array_is_list($types) && !empty($types));

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->types = $types;
    }

    public function isAssignable(Type $other): bool
    {
        foreach ($this->types as $type) {
            if ($type->isAssignable($other)) {
                return true;
            }
        }

        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function asString(): string
    {
        return $this->name();
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function name(): string
    {
        $types = [];

        foreach ($this->types as $type) {
            if ($type->isIntersection()) {
                $types[] = '(' . $type->name() . ')';

                continue;
            }

            $types[] = $type->name();
        }

        sort($types);

<<<<<<< HEAD
        return implode('|', $types);
=======
        $name = implode('|', $types);

        /** @phpstan-ignore empty.variable */
        assert(!empty($name));

        return $name;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function allowsNull(): bool
    {
        foreach ($this->types as $type) {
            if ($type instanceof NullType) {
                return true;
            }
        }

        return false;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true UnionType $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isUnion(): bool
    {
        return true;
    }

    public function containsIntersectionTypes(): bool
    {
        foreach ($this->types as $type) {
            if ($type->isIntersection()) {
                return true;
            }
        }

        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-list<Type>
=======
     * @return non-empty-list<Type>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function types(): array
    {
        return $this->types;
    }

    /**
     * @throws RuntimeException
     */
    private function ensureMinimumOfTwoTypes(Type ...$types): void
    {
        if (count($types) < 2) {
            throw new RuntimeException(
<<<<<<< HEAD
                'A union type must be composed of at least two types'
=======
                'A union type must be composed of at least two types',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
    }

    /**
     * @throws RuntimeException
     */
    private function ensureOnlyValidTypes(Type ...$types): void
    {
        foreach ($types as $type) {
            if ($type instanceof UnknownType) {
                throw new RuntimeException(
<<<<<<< HEAD
                    'A union type must not be composed of an unknown type'
=======
                    'A union type must not be composed of an unknown type',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if ($type instanceof VoidType) {
                throw new RuntimeException(
<<<<<<< HEAD
                    'A union type must not be composed of a void type'
=======
                    'A union type must not be composed of a void type',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
        }
    }
}

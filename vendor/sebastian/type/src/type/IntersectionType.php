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
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function assert;
use function count;
use function implode;
use function in_array;
use function sort;

<<<<<<< HEAD
final class IntersectionType extends Type
{
    /**
     * @psalm-var non-empty-list<Type>
=======
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for this library
 */
final class IntersectionType extends Type
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
        $this->ensureNoDuplicateTypes(...$types);

<<<<<<< HEAD
=======
        assert(array_is_list($types) && !empty($types));

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->types = $types;
    }

    public function isAssignable(Type $other): bool
    {
        return $other->isObject();
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
            $types[] = $type->name();
        }

        sort($types);

        return implode('&', $types);
    }

    public function allowsNull(): bool
    {
        return false;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true IntersectionType $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isIntersection(): bool
    {
        return true;
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
                'An intersection type must be composed of at least two types'
=======
                'An intersection type must be composed of at least two types',
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
            if (!$type->isObject()) {
                throw new RuntimeException(
<<<<<<< HEAD
                    'An intersection type can only be composed of interfaces and classes'
=======
                    'An intersection type can only be composed of interfaces and classes',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
        }
    }

    /**
     * @throws RuntimeException
     */
    private function ensureNoDuplicateTypes(Type ...$types): void
    {
        $names = [];

        foreach ($types as $type) {
            assert($type instanceof ObjectType);

            $classQualifiedName = $type->className()->qualifiedName();

            if (in_array($classQualifiedName, $names, true)) {
                throw new RuntimeException('An intersection type must not contain duplicate types');
            }

            $names[] = $classQualifiedName;
        }
    }
}

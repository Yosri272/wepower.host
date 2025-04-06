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

use function assert;
use ReflectionFunction;
use ReflectionIntersectionType;
use ReflectionMethod;
use ReflectionNamedType;
<<<<<<< HEAD
use ReflectionType;
use ReflectionUnionType;

final class ReflectionMapper
{
    /**
     * @psalm-return list<Parameter>
     */
    public function fromParameterTypes(ReflectionFunction|ReflectionMethod $functionOrMethod): array
    {
        $parameters = [];

        foreach ($functionOrMethod->getParameters() as $parameter) {
=======
use ReflectionProperty;
use ReflectionType;
use ReflectionUnionType;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for this library
 */
final class ReflectionMapper
{
    /**
     * @return list<Parameter>
     */
    public function fromParameterTypes(ReflectionFunction|ReflectionMethod $reflector): array
    {
        $parameters = [];

        foreach ($reflector->getParameters() as $parameter) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $name = $parameter->getName();

            assert($name !== '');

            if (!$parameter->hasType()) {
                $parameters[] = new Parameter($name, new UnknownType);

                continue;
            }

            $type = $parameter->getType();

            if ($type instanceof ReflectionNamedType) {
                $parameters[] = new Parameter(
                    $name,
<<<<<<< HEAD
                    $this->mapNamedType($type, $functionOrMethod)
=======
                    $this->mapNamedType($type, $reflector),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                continue;
            }

            if ($type instanceof ReflectionUnionType) {
                $parameters[] = new Parameter(
                    $name,
<<<<<<< HEAD
                    $this->mapUnionType($type, $functionOrMethod)
=======
                    $this->mapUnionType($type, $reflector),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                continue;
            }

            if ($type instanceof ReflectionIntersectionType) {
                $parameters[] = new Parameter(
                    $name,
<<<<<<< HEAD
                    $this->mapIntersectionType($type, $functionOrMethod)
=======
                    $this->mapIntersectionType($type, $reflector),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
        }

        return $parameters;
    }

<<<<<<< HEAD
    public function fromReturnType(ReflectionFunction|ReflectionMethod $functionOrMethod): Type
    {
        if (!$this->hasReturnType($functionOrMethod)) {
            return new UnknownType;
        }

        $returnType = $this->returnType($functionOrMethod);
=======
    public function fromReturnType(ReflectionFunction|ReflectionMethod $reflector): Type
    {
        if (!$this->hasReturnType($reflector)) {
            return new UnknownType;
        }

        $returnType = $this->returnType($reflector);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        assert($returnType instanceof ReflectionNamedType || $returnType instanceof ReflectionUnionType || $returnType instanceof ReflectionIntersectionType);

        if ($returnType instanceof ReflectionNamedType) {
<<<<<<< HEAD
            return $this->mapNamedType($returnType, $functionOrMethod);
        }

        if ($returnType instanceof ReflectionUnionType) {
            return $this->mapUnionType($returnType, $functionOrMethod);
        }

        if ($returnType instanceof ReflectionIntersectionType) {
            return $this->mapIntersectionType($returnType, $functionOrMethod);
        }
    }

    private function mapNamedType(ReflectionNamedType $type, ReflectionFunction|ReflectionMethod $functionOrMethod): Type
    {
        if ($functionOrMethod instanceof ReflectionMethod && $type->getName() === 'self') {
            return ObjectType::fromName(
                $functionOrMethod->getDeclaringClass()->getName(),
                $type->allowsNull()
            );
        }

        if ($functionOrMethod instanceof ReflectionMethod && $type->getName() === 'static') {
            return new StaticType(
                TypeName::fromReflection($functionOrMethod->getDeclaringClass()),
                $type->allowsNull()
=======
            return $this->mapNamedType($returnType, $reflector);
        }

        if ($returnType instanceof ReflectionUnionType) {
            return $this->mapUnionType($returnType, $reflector);
        }

        if ($returnType instanceof ReflectionIntersectionType) {
            return $this->mapIntersectionType($returnType, $reflector);
        }
    }

    public function fromPropertyType(ReflectionProperty $reflector): Type
    {
        if (!$reflector->hasType()) {
            return new UnknownType;
        }

        $propertyType = $reflector->getType();

        assert($propertyType instanceof ReflectionNamedType || $propertyType instanceof ReflectionUnionType || $propertyType instanceof ReflectionIntersectionType);

        if ($propertyType instanceof ReflectionNamedType) {
            return $this->mapNamedType($propertyType, $reflector);
        }

        if ($propertyType instanceof ReflectionUnionType) {
            return $this->mapUnionType($propertyType, $reflector);
        }

        if ($propertyType instanceof ReflectionIntersectionType) {
            return $this->mapIntersectionType($propertyType, $reflector);
        }
    }

    private function mapNamedType(ReflectionNamedType $type, ReflectionFunction|ReflectionMethod|ReflectionProperty $reflector): Type
    {
        $classScope = !$reflector instanceof ReflectionFunction;

        if ($classScope && $type->getName() === 'self') {
            return ObjectType::fromName(
                $reflector->getDeclaringClass()->getName(),
                $type->allowsNull(),
            );
        }

        if ($classScope && $type->getName() === 'static') {
            return new StaticType(
                TypeName::fromReflection($reflector->getDeclaringClass()),
                $type->allowsNull(),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        if ($type->getName() === 'mixed') {
            return new MixedType;
        }

<<<<<<< HEAD
        if ($functionOrMethod instanceof ReflectionMethod && $type->getName() === 'parent') {
            return ObjectType::fromName(
                $functionOrMethod->getDeclaringClass()->getParentClass()->getName(),
                $type->allowsNull()
=======
        if ($classScope && $type->getName() === 'parent') {
            return ObjectType::fromName(
                $reflector->getDeclaringClass()->getParentClass()->getName(),
                $type->allowsNull(),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        return Type::fromName(
            $type->getName(),
<<<<<<< HEAD
            $type->allowsNull()
        );
    }

    private function mapUnionType(ReflectionUnionType $type, ReflectionFunction|ReflectionMethod $functionOrMethod): Type
=======
            $type->allowsNull(),
        );
    }

    private function mapUnionType(ReflectionUnionType $type, ReflectionFunction|ReflectionMethod|ReflectionProperty $reflector): Type
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $types = [];

        foreach ($type->getTypes() as $_type) {
<<<<<<< HEAD
            assert($_type instanceof ReflectionNamedType || $_type instanceof ReflectionIntersectionType);

            if ($_type instanceof ReflectionNamedType) {
                $types[] = $this->mapNamedType($_type, $functionOrMethod);
=======
            if ($_type instanceof ReflectionNamedType) {
                $types[] = $this->mapNamedType($_type, $reflector);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                continue;
            }

<<<<<<< HEAD
            $types[] = $this->mapIntersectionType($_type, $functionOrMethod);
=======
            $types[] = $this->mapIntersectionType($_type, $reflector);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return new UnionType(...$types);
    }

<<<<<<< HEAD
    private function mapIntersectionType(ReflectionIntersectionType $type, ReflectionFunction|ReflectionMethod $functionOrMethod): Type
=======
    private function mapIntersectionType(ReflectionIntersectionType $type, ReflectionFunction|ReflectionMethod|ReflectionProperty $reflector): Type
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $types = [];

        foreach ($type->getTypes() as $_type) {
            assert($_type instanceof ReflectionNamedType);

<<<<<<< HEAD
            $types[] = $this->mapNamedType($_type, $functionOrMethod);
=======
            $types[] = $this->mapNamedType($_type, $reflector);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return new IntersectionType(...$types);
    }

<<<<<<< HEAD
    private function hasReturnType(ReflectionFunction|ReflectionMethod $functionOrMethod): bool
    {
        if ($functionOrMethod->hasReturnType()) {
            return true;
        }

        return $functionOrMethod->hasTentativeReturnType();
    }

    private function returnType(ReflectionFunction|ReflectionMethod $functionOrMethod): ?ReflectionType
    {
        if ($functionOrMethod->hasReturnType()) {
            return $functionOrMethod->getReturnType();
        }

        return $functionOrMethod->getTentativeReturnType();
=======
    private function hasReturnType(ReflectionFunction|ReflectionMethod $reflector): bool
    {
        if ($reflector->hasReturnType()) {
            return true;
        }

        return $reflector->hasTentativeReturnType();
    }

    private function returnType(ReflectionFunction|ReflectionMethod $reflector): ?ReflectionType
    {
        if ($reflector->hasReturnType()) {
            return $reflector->getReturnType();
        }

        return $reflector->getTentativeReturnType();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}

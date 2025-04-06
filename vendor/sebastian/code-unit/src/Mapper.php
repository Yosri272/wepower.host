<?php declare(strict_types=1);
/*
 * This file is part of sebastian/code-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeUnit;

use function array_keys;
use function array_merge;
use function array_unique;
use function array_values;
use function class_exists;
use function explode;
use function function_exists;
use function interface_exists;
use function ksort;
use function method_exists;
use function sort;
use function sprintf;
use function str_contains;
use function trait_exists;
use ReflectionClass;
use ReflectionFunction;
use ReflectionMethod;

final class Mapper
{
    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<int>>
=======
     * @return array<string,list<int>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function codeUnitsToSourceLines(CodeUnitCollection $codeUnits): array
    {
        $result = [];

        foreach ($codeUnits as $codeUnit) {
            $sourceFileName = $codeUnit->sourceFileName();

            if (!isset($result[$sourceFileName])) {
                $result[$sourceFileName] = [];
            }

            $result[$sourceFileName] = array_merge($result[$sourceFileName], $codeUnit->sourceLines());
        }

        foreach (array_keys($result) as $sourceFileName) {
            $result[$sourceFileName] = array_values(array_unique($result[$sourceFileName]));

            sort($result[$sourceFileName]);
        }

        ksort($result);

        return $result;
    }

    /**
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public function stringToCodeUnits(string $unit): CodeUnitCollection
    {
        if (str_contains($unit, '::')) {
            [$firstPart, $secondPart] = explode('::', $unit);

            if ($this->isUserDefinedFunction($secondPart)) {
                return CodeUnitCollection::fromList(CodeUnit::forFunction($secondPart));
            }

            if ($this->isUserDefinedMethod($firstPart, $secondPart)) {
                return CodeUnitCollection::fromList(CodeUnit::forClassMethod($firstPart, $secondPart));
            }

            if ($this->isUserDefinedInterface($firstPart)) {
                return CodeUnitCollection::fromList(CodeUnit::forInterfaceMethod($firstPart, $secondPart));
            }

            if ($this->isUserDefinedTrait($firstPart)) {
                return CodeUnitCollection::fromList(CodeUnit::forTraitMethod($firstPart, $secondPart));
            }
        } else {
            if ($this->isUserDefinedClass($unit)) {
<<<<<<< HEAD
                $units = [CodeUnit::forClass($unit)];

                foreach ($this->reflectorForClass($unit)->getTraits() as $trait) {
                    if (!$trait->isUserDefined()) {
                        // @codeCoverageIgnoreStart
                        continue;
                        // @codeCoverageIgnoreEnd
                    }

                    $units[] = CodeUnit::forTrait($trait->getName());
                }

                return CodeUnitCollection::fromList(...$units);
=======
                return CodeUnitCollection::fromList(
                    ...array_merge(
                        [CodeUnit::forClass($unit)],
                        $this->traits(new ReflectionClass($unit)),
                    ),
                );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            if ($this->isUserDefinedInterface($unit)) {
                return CodeUnitCollection::fromList(CodeUnit::forInterface($unit));
            }

            if ($this->isUserDefinedTrait($unit)) {
                return CodeUnitCollection::fromList(CodeUnit::forTrait($unit));
            }

            if ($this->isUserDefinedFunction($unit)) {
                return CodeUnitCollection::fromList(CodeUnit::forFunction($unit));
            }
        }

        throw new InvalidCodeUnitException(
            sprintf(
                '"%s" is not a valid code unit',
<<<<<<< HEAD
                $unit
            )
=======
                $unit,
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     *
     * @throws ReflectionException
     */
    private function reflectorForClass(string $className): ReflectionClass
    {
        try {
            return new ReflectionClass($className);
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @throws ReflectionException
=======
     * @phpstan-assert-if-true callable-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function isUserDefinedFunction(string $functionName): bool
    {
        if (!function_exists($functionName)) {
            return false;
        }

<<<<<<< HEAD
        try {
            return (new ReflectionFunction($functionName))->isUserDefined();
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @throws ReflectionException
=======
        return (new ReflectionFunction($functionName))->isUserDefined();
    }

    /**
     * @phpstan-assert-if-true class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function isUserDefinedClass(string $className): bool
    {
        if (!class_exists($className)) {
            return false;
        }

<<<<<<< HEAD
        try {
            return (new ReflectionClass($className))->isUserDefined();
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @throws ReflectionException
=======
        return (new ReflectionClass($className))->isUserDefined();
    }

    /**
     * @phpstan-assert-if-true interface-string $interfaceName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function isUserDefinedInterface(string $interfaceName): bool
    {
        if (!interface_exists($interfaceName)) {
            return false;
        }

<<<<<<< HEAD
        try {
            return (new ReflectionClass($interfaceName))->isUserDefined();
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @throws ReflectionException
=======
        return (new ReflectionClass($interfaceName))->isUserDefined();
    }

    /**
     * @phpstan-assert-if-true trait-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function isUserDefinedTrait(string $traitName): bool
    {
        if (!trait_exists($traitName)) {
            return false;
        }

<<<<<<< HEAD
        try {
            return (new ReflectionClass($traitName))->isUserDefined();
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @throws ReflectionException
=======
        return (new ReflectionClass($traitName))->isUserDefined();
    }

    /**
     * @phpstan-assert-if-true class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function isUserDefinedMethod(string $className, string $methodName): bool
    {
        if (!class_exists($className)) {
<<<<<<< HEAD
            // @codeCoverageIgnoreStart
            return false;
            // @codeCoverageIgnoreEnd
        }

        if (!method_exists($className, $methodName)) {
            // @codeCoverageIgnoreStart
            return false;
            // @codeCoverageIgnoreEnd
        }

        try {
            return (new ReflectionMethod($className, $methodName))->isUserDefined();
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
=======
            return false;
        }

        if (!method_exists($className, $methodName)) {
            return false;
        }

        return (new ReflectionMethod($className, $methodName))->isUserDefined();
    }

    /**
     * @param ReflectionClass<object> $class
     *
     * @return list<TraitUnit>
     */
    private function traits(ReflectionClass $class): array
    {
        $result = [];

        foreach ($class->getTraits() as $trait) {
            if (!$trait->isUserDefined()) {
                // @codeCoverageIgnoreStart
                continue;
                // @codeCoverageIgnoreEnd
            }

            $result[] = CodeUnit::forTrait($trait->getName());

            $result = array_merge($result, $this->traits($trait));
        }

        return $result;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}

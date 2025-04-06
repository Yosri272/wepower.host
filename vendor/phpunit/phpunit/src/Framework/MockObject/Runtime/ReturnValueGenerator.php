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

use function array_keys;
use function array_map;
use function explode;
use function in_array;
use function interface_exists;
use function sprintf;
use function str_contains;
use function str_ends_with;
use function str_starts_with;
use function substr;
use PHPUnit\Framework\MockObject\Generator\Generator;
use ReflectionClass;
<<<<<<< HEAD
=======
use ReflectionObject;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use stdClass;
use Throwable;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueGenerator
{
    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     * @psalm-param class-string $stubClassName
     *
     * @throws Exception
     */
    public function generate(string $className, string $methodName, string $stubClassName, string $returnType): mixed
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws Exception
     */
    public function generate(string $className, string $methodName, StubInternal $testStub, string $returnType): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $intersection = false;
        $union        = false;

        if (str_contains($returnType, '|')) {
            $types = explode('|', $returnType);
            $union = true;

            foreach (array_keys($types) as $key) {
                if (str_starts_with($types[$key], '(') && str_ends_with($types[$key], ')')) {
                    $types[$key] = substr($types[$key], 1, -1);
                }
            }
        } elseif (str_contains($returnType, '&')) {
            $types        = explode('&', $returnType);
            $intersection = true;
        } else {
            $types = [$returnType];
        }

        if (!$intersection) {
            $lowerTypes = array_map('strtolower', $types);

            if (in_array('', $lowerTypes, true) ||
                in_array('null', $lowerTypes, true) ||
                in_array('mixed', $lowerTypes, true) ||
                in_array('void', $lowerTypes, true)) {
                return null;
            }

            if (in_array('true', $lowerTypes, true)) {
                return true;
            }

            if (in_array('false', $lowerTypes, true) ||
                in_array('bool', $lowerTypes, true)) {
                return false;
            }

            if (in_array('float', $lowerTypes, true)) {
                return 0.0;
            }

            if (in_array('int', $lowerTypes, true)) {
                return 0;
            }

            if (in_array('string', $lowerTypes, true)) {
                return '';
            }

            if (in_array('array', $lowerTypes, true)) {
                return [];
            }

            if (in_array('static', $lowerTypes, true)) {
<<<<<<< HEAD
                return $this->newInstanceOf($stubClassName, $className, $methodName);
=======
                return $this->newInstanceOf($testStub, $className, $methodName);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            if (in_array('object', $lowerTypes, true)) {
                return new stdClass;
            }

            if (in_array('callable', $lowerTypes, true) ||
                in_array('closure', $lowerTypes, true)) {
                return static function (): void
                {
                };
            }

            if (in_array('traversable', $lowerTypes, true) ||
                in_array('generator', $lowerTypes, true) ||
                in_array('iterable', $lowerTypes, true)) {
                $generator = static function (): \Generator
                {
                    yield from [];
                };

                return $generator();
            }

            if (!$union) {
                return $this->testDoubleFor($returnType, $className, $methodName);
            }
        }

        if ($union) {
            foreach ($types as $type) {
                if (str_contains($type, '&')) {
                    $_types = explode('&', $type);

                    if ($this->onlyInterfaces($_types)) {
                        return $this->testDoubleForIntersectionOfInterfaces($_types, $className, $methodName);
                    }
                }
            }
        }

        if ($intersection && $this->onlyInterfaces($types)) {
            return $this->testDoubleForIntersectionOfInterfaces($types, $className, $methodName);
        }

        $reason = '';

        if ($union) {
            $reason = ' because the declared return type is a union';
        } elseif ($intersection) {
            $reason = ' because the declared return type is an intersection';
        }

        throw new RuntimeException(
            sprintf(
                'Return value for %s::%s() cannot be generated%s, please configure a return value for this method',
                $className,
                $methodName,
                $reason,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-list<string> $types
=======
     * @param non-empty-list<string> $types
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function onlyInterfaces(array $types): bool
    {
        foreach ($types as $type) {
            if (!interface_exists($type)) {
                return false;
            }
        }

        return true;
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $stubClassName
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
     * @throws RuntimeException
     */
    private function newInstanceOf(string $stubClassName, string $className, string $methodName): Stub
    {
        try {
            return (new ReflectionClass($stubClassName))->newInstanceWithoutConstructor();
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws RuntimeException
     */
    private function newInstanceOf(StubInternal $testStub, string $className, string $methodName): Stub
    {
        try {
            $object    = (new ReflectionClass($testStub::class))->newInstanceWithoutConstructor();
            $reflector = new ReflectionObject($object);

            $reflector->getProperty('__phpunit_state')->setValue(
                $object,
                new TestDoubleState(
                    $testStub->__phpunit_state()->configurableMethods(),
                    $testStub->__phpunit_state()->generateReturnValues(),
                ),
            );

            return $object;
            // @codeCoverageIgnoreStart
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        } catch (Throwable $t) {
            throw new RuntimeException(
                sprintf(
                    'Return value for %s::%s() cannot be generated: %s',
                    $className,
                    $methodName,
                    $t->getMessage(),
                ),
            );
<<<<<<< HEAD
=======
            // @codeCoverageIgnoreEnd
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $type
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $type
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws RuntimeException
     */
    private function testDoubleFor(string $type, string $className, string $methodName): Stub
    {
        try {
<<<<<<< HEAD
            return (new Generator)->testDouble($type, false, [], [], '', false);
=======
            return (new Generator)->testDouble($type, false, false, [], [], '', false);
            // @codeCoverageIgnoreStart
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        } catch (Throwable $t) {
            throw new RuntimeException(
                sprintf(
                    'Return value for %s::%s() cannot be generated: %s',
                    $className,
                    $methodName,
                    $t->getMessage(),
                ),
            );
<<<<<<< HEAD
=======
            // @codeCoverageIgnoreEnd
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-list<string> $types
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param non-empty-list<string> $types
     * @param class-string           $className
     * @param non-empty-string       $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws RuntimeException
     */
    private function testDoubleForIntersectionOfInterfaces(array $types, string $className, string $methodName): Stub
    {
        try {
            return (new Generator)->testDoubleForInterfaceIntersection($types, false);
<<<<<<< HEAD
=======
            // @codeCoverageIgnoreStart
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        } catch (Throwable $t) {
            throw new RuntimeException(
                sprintf(
                    'Return value for %s::%s() cannot be generated: %s',
                    $className,
                    $methodName,
                    $t->getMessage(),
                ),
            );
<<<<<<< HEAD
=======
            // @codeCoverageIgnoreEnd
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }
}

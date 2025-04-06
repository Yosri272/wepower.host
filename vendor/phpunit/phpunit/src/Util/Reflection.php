<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use function array_keys;
use function array_merge;
use function array_reverse;
<<<<<<< HEAD
=======
use function assert;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Reflection
{
    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array{file: non-empty-string, line: non-negative-int}
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Reflection
{
    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @return array{file: non-empty-string, line: non-negative-int}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function sourceLocationFor(string $className, string $methodName): array
    {
        try {
            $reflector = new ReflectionMethod($className, $methodName);

            $file = $reflector->getFileName();
            $line = $reflector->getStartLine();
        } catch (ReflectionException) {
            $file = 'unknown';
            $line = 0;
        }

<<<<<<< HEAD
=======
        assert($file !== false && $file !== '');
        assert($line !== false && $line >= 0);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return [
            'file' => $file,
            'line' => $line,
        ];
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<ReflectionMethod>
     */
    public static function publicMethodsInTestClass(ReflectionClass $class): array
=======
     * @param ReflectionClass<TestCase> $class
     *
     * @return list<ReflectionMethod>
     */
    public static function publicMethodsDeclaredDirectlyInTestClass(ReflectionClass $class): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return self::filterAndSortMethods($class, ReflectionMethod::IS_PUBLIC, true);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<ReflectionMethod>
     */
    public static function methodsInTestClass(ReflectionClass $class): array
=======
     * @param ReflectionClass<TestCase> $class
     *
     * @return list<ReflectionMethod>
     */
    public static function methodsDeclaredDirectlyInTestClass(ReflectionClass $class): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return self::filterAndSortMethods($class, null, false);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<ReflectionMethod>
=======
     * @param ReflectionClass<TestCase> $class
     *
     * @return list<ReflectionMethod>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private static function filterAndSortMethods(ReflectionClass $class, ?int $filter, bool $sortHighestToLowest): array
    {
        $methodsByClass = [];

        foreach ($class->getMethods($filter) as $method) {
            $declaringClassName = $method->getDeclaringClass()->getName();

            if ($declaringClassName === TestCase::class) {
                continue;
            }

            if ($declaringClassName === Assert::class) {
                continue;
            }

            if (!isset($methodsByClass[$declaringClassName])) {
                $methodsByClass[$declaringClassName] = [];
            }

            $methodsByClass[$declaringClassName][] = $method;
        }

        $classNames = array_keys($methodsByClass);

        if ($sortHighestToLowest) {
            $classNames = array_reverse($classNames);
        }

        $methods = [];

        foreach ($classNames as $className) {
            $methods = array_merge($methods, $methodsByClass[$className]);
        }

        return $methods;
    }
}

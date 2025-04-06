<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

<<<<<<< HEAD
=======
use function array_combine;
use function array_intersect_key;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function class_exists;
use function count;
use function file_get_contents;
use function interface_exists;
use function is_bool;
use ArrayAccess;
use Countable;
use Generator;
use PHPUnit\Event;
use PHPUnit\Framework\Constraint\ArrayHasKey;
use PHPUnit\Framework\Constraint\Callback;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\Count;
use PHPUnit\Framework\Constraint\DirectoryExists;
use PHPUnit\Framework\Constraint\FileExists;
use PHPUnit\Framework\Constraint\GreaterThan;
use PHPUnit\Framework\Constraint\IsAnything;
use PHPUnit\Framework\Constraint\IsEmpty;
use PHPUnit\Framework\Constraint\IsEqual;
use PHPUnit\Framework\Constraint\IsEqualCanonicalizing;
use PHPUnit\Framework\Constraint\IsEqualIgnoringCase;
use PHPUnit\Framework\Constraint\IsEqualWithDelta;
use PHPUnit\Framework\Constraint\IsFalse;
use PHPUnit\Framework\Constraint\IsFinite;
use PHPUnit\Framework\Constraint\IsIdentical;
use PHPUnit\Framework\Constraint\IsInfinite;
use PHPUnit\Framework\Constraint\IsInstanceOf;
use PHPUnit\Framework\Constraint\IsJson;
use PHPUnit\Framework\Constraint\IsList;
use PHPUnit\Framework\Constraint\IsNan;
use PHPUnit\Framework\Constraint\IsNull;
use PHPUnit\Framework\Constraint\IsReadable;
use PHPUnit\Framework\Constraint\IsTrue;
use PHPUnit\Framework\Constraint\IsType;
use PHPUnit\Framework\Constraint\IsWritable;
use PHPUnit\Framework\Constraint\JsonMatches;
use PHPUnit\Framework\Constraint\LessThan;
use PHPUnit\Framework\Constraint\LogicalAnd;
use PHPUnit\Framework\Constraint\LogicalNot;
use PHPUnit\Framework\Constraint\LogicalOr;
use PHPUnit\Framework\Constraint\LogicalXor;
use PHPUnit\Framework\Constraint\ObjectEquals;
use PHPUnit\Framework\Constraint\ObjectHasProperty;
use PHPUnit\Framework\Constraint\RegularExpression;
use PHPUnit\Framework\Constraint\SameSize;
use PHPUnit\Framework\Constraint\StringContains;
use PHPUnit\Framework\Constraint\StringEndsWith;
use PHPUnit\Framework\Constraint\StringEqualsStringIgnoringLineEndings;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;
use PHPUnit\Framework\Constraint\StringStartsWith;
use PHPUnit\Framework\Constraint\TraversableContainsEqual;
use PHPUnit\Framework\Constraint\TraversableContainsIdentical;
use PHPUnit\Framework\Constraint\TraversableContainsOnly;
use PHPUnit\Util\Xml\Loader as XmlLoader;
use PHPUnit\Util\Xml\XmlException;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Assert
{
    private static int $count = 0;

    /**
<<<<<<< HEAD
     * Asserts that an array has a specified key.
=======
     * Asserts that two arrays are equal while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
    final public static function assertArrayHasKey(int|string $key, array|ArrayAccess $array, string $message = ''): void
    {
        $constraint = new ArrayHasKey($key);

        static::assertThat($array, $constraint, $message);
=======
    final public static function assertArrayIsEqualToArrayOnlyConsideringListOfKeys(array $expected, array $actual, array $keysToBeConsidered, string $message = ''): void
    {
        $filteredExpected = [];

        foreach ($keysToBeConsidered as $key) {
            if (isset($expected[$key])) {
                $filteredExpected[$key] = $expected[$key];
            }
        }

        $filteredActual = [];

        foreach ($keysToBeConsidered as $key) {
            if (isset($actual[$key])) {
                $filteredActual[$key] = $actual[$key];
            }
        }

        self::assertEquals($filteredExpected, $filteredActual, $message);
    }

    /**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayIsEqualToArrayIgnoringListOfKeys(array $expected, array $actual, array $keysToBeIgnored, string $message = ''): void
    {
        foreach ($keysToBeIgnored as $key) {
            unset($expected[$key], $actual[$key]);
        }

        self::assertEquals($expected, $actual, $message);
    }

    /**
     * Asserts that two arrays are identical while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayIsIdenticalToArrayOnlyConsideringListOfKeys(array $expected, array $actual, array $keysToBeConsidered, string $message = ''): void
    {
        $keysToBeConsidered = array_combine($keysToBeConsidered, $keysToBeConsidered);
        $expected           = array_intersect_key($expected, $keysToBeConsidered);
        $actual             = array_intersect_key($actual, $keysToBeConsidered);

        self::assertSame($expected, $actual, $message);
    }

    /**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayIsIdenticalToArrayIgnoringListOfKeys(array $expected, array $actual, array $keysToBeIgnored, string $message = ''): void
    {
        foreach ($keysToBeIgnored as $key) {
            unset($expected[$key], $actual[$key]);
        }

        self::assertSame($expected, $actual, $message);
    }

    /**
     * Asserts that an array has a specified key.
     *
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayHasKey(mixed $key, array|ArrayAccess $array, string $message = ''): void
    {
        $constraint = new ArrayHasKey($key);

        self::assertThat($array, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that an array does not have a specified key.
     *
<<<<<<< HEAD
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayNotHasKey(int|string $key, array|ArrayAccess $array, string $message = ''): void
=======
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertArrayNotHasKey(mixed $key, array|ArrayAccess $array, string $message = ''): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $constraint = new LogicalNot(
            new ArrayHasKey($key),
        );

<<<<<<< HEAD
        static::assertThat($array, $constraint, $message);
    }

    /**
=======
        self::assertThat($array, $constraint, $message);
    }

    /**
     * @phpstan-assert list<mixed> $array
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ExpectationFailedException
     */
    final public static function assertIsList(mixed $array, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $array,
            new IsList,
            $message,
        );
    }

    /**
     * Asserts that a haystack contains a needle.
     *
<<<<<<< HEAD
=======
     * @param iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertContains(mixed $needle, iterable $haystack, string $message = ''): void
    {
        $constraint = new TraversableContainsIdentical($needle);

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
    }

    /**
=======
        self::assertThat($haystack, $constraint, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ExpectationFailedException
     */
    final public static function assertContainsEquals(mixed $needle, iterable $haystack, string $message = ''): void
    {
        $constraint = new TraversableContainsEqual($needle);

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a haystack does not contain a needle.
     *
<<<<<<< HEAD
=======
     * @param iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertNotContains(mixed $needle, iterable $haystack, string $message = ''): void
    {
        $constraint = new LogicalNot(
            new TraversableContainsIdentical($needle),
        );

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
    }

    /**
=======
        self::assertThat($haystack, $constraint, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ExpectationFailedException
     */
    final public static function assertNotContainsEquals(mixed $needle, iterable $haystack, string $message = ''): void
    {
        $constraint = new LogicalNot(new TraversableContainsEqual($needle));

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a haystack contains only values of a given type.
     *
<<<<<<< HEAD
     * @throws Exception
     * @throws ExpectationFailedException
=======
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6055
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = ''): void
    {
        if ($isNativeType === null) {
            $isNativeType = self::isNativeType($type);
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $haystack,
            new TraversableContainsOnly(
                $type,
                $isNativeType,
            ),
            $message,
        );
    }

    /**
<<<<<<< HEAD
     * Asserts that a haystack contains only instances of a given class name.
=======
     * Asserts that a haystack contains only values of type array.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyArray(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Array->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type bool.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyBool(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Bool->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type callable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyCallable(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Callable->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type float.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyFloat(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Float->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type int.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyInt(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Int->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type iterable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyIterable(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Iterable->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type null.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyNull(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Null->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type numeric.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyNumeric(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Numeric->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type object.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyObject(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Object->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyResource(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Resource->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type closed resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyClosedResource(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::ClosedResource->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type scalar.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyScalar(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::Scalar->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only values of type string.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyString(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new TraversableContainsOnly(
                NativeType::String->value,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack contains only instances of a specified interface or class name.
     *
     * @param class-string    $className
     * @param iterable<mixed> $haystack
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $haystack,
            new TraversableContainsOnly(
                $className,
                false,
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
<<<<<<< HEAD
     * @throws Exception
     * @throws ExpectationFailedException
=======
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6055
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = ''): void
    {
        if ($isNativeType === null) {
            $isNativeType = self::isNativeType($type);
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    $type,
                    $isNativeType,
                ),
            ),
            $message,
        );
    }

    /**
<<<<<<< HEAD
     * Asserts the number of elements of an array, Countable or Traversable.
     *
=======
     * Asserts that a haystack does not contain only values of type array.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyArray(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Array->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type bool.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyBool(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Bool->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type callable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyCallable(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Callable->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type float.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyFloat(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Float->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type int.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyInt(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Int->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type iterable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyIterable(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Iterable->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type null.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyNull(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Null->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type numeric.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyNumeric(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Numeric->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type object.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyObject(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Object->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyResource(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Resource->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type closed resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyClosedResource(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::ClosedResource->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type scalar.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyScalar(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::Scalar->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only values of type string.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyString(iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    NativeType::String->value,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a haystack does not contain only instances of a specified interface or class name.
     *
     * @param class-string    $className
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */
    final public static function assertContainsNotOnlyInstancesOf(string $className, iterable $haystack, string $message = ''): void
    {
        self::assertThat(
            $haystack,
            new LogicalNot(
                new TraversableContainsOnly(
                    $className,
                    false,
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    final public static function assertCount(int $expectedCount, Countable|iterable $haystack, string $message = ''): void
    {
        if ($haystack instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$haystack');
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $haystack,
            new Count($expectedCount),
            $message,
        );
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
<<<<<<< HEAD
=======
     * @param Countable|iterable<mixed> $haystack
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    final public static function assertNotCount(int $expectedCount, Countable|iterable $haystack, string $message = ''): void
    {
        if ($haystack instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$haystack');
        }

        $constraint = new LogicalNot(
            new Count($expectedCount),
        );

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertEquals(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new IsEqual($expected);

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertEqualsCanonicalizing(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new IsEqualCanonicalizing($expected);

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertEqualsIgnoringCase(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new IsEqualIgnoringCase($expected);

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertEqualsWithDelta(mixed $expected, mixed $actual, float $delta, string $message = ''): void
    {
        $constraint = new IsEqualWithDelta(
            $expected,
            $delta,
        );

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNotEquals(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new LogicalNot(
            new IsEqual($expected),
        );

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNotEqualsCanonicalizing(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new LogicalNot(
            new IsEqualCanonicalizing($expected),
        );

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNotEqualsIgnoringCase(mixed $expected, mixed $actual, string $message = ''): void
    {
        $constraint = new LogicalNot(
            new IsEqualIgnoringCase($expected),
        );

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNotEqualsWithDelta(mixed $expected, mixed $actual, float $delta, string $message = ''): void
    {
        $constraint = new LogicalNot(
            new IsEqualWithDelta(
                $expected,
                $delta,
            ),
        );

<<<<<<< HEAD
        static::assertThat($actual, $constraint, $message);
=======
        self::assertThat($actual, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertObjectEquals(object $expected, object $actual, string $method = 'equals', string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
            $actual,
            static::objectEquals($expected, $method),
=======
        self::assertThat(
            $actual,
            self::objectEquals($expected, $method),
            $message,
        );
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertObjectNotEquals(object $expected, object $actual, string $method = 'equals', string $message = ''): void
    {
        self::assertThat(
            $actual,
            self::logicalNot(
                self::objectEquals($expected, $method),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $message,
        );
    }

    /**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     *
<<<<<<< HEAD
     * @psalm-assert empty $actual
=======
     * @phpstan-assert empty $actual
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertEmpty(mixed $actual, string $message = ''): void
    {
        if ($actual instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$actual');
        }

<<<<<<< HEAD
        static::assertThat($actual, static::isEmpty(), $message);
=======
        self::assertThat($actual, self::isEmpty(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     *
<<<<<<< HEAD
     * @psalm-assert !empty $actual
=======
     * @phpstan-assert !empty $actual
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertNotEmpty(mixed $actual, string $message = ''): void
    {
        if ($actual instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$actual');
        }

<<<<<<< HEAD
        static::assertThat($actual, static::logicalNot(static::isEmpty()), $message);
=======
        self::assertThat($actual, self::logicalNot(self::isEmpty()), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
    final public static function assertGreaterThan(mixed $expected, mixed $actual, string $message = ''): void
    {
        static::assertThat($actual, static::greaterThan($expected), $message);
=======
    final public static function assertGreaterThan(mixed $minimum, mixed $actual, string $message = ''): void
    {
        self::assertThat($actual, self::greaterThan($minimum), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
    final public static function assertGreaterThanOrEqual(mixed $expected, mixed $actual, string $message = ''): void
    {
        static::assertThat(
            $actual,
            static::greaterThanOrEqual($expected),
=======
    final public static function assertGreaterThanOrEqual(mixed $minimum, mixed $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            self::greaterThanOrEqual($minimum),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $message,
        );
    }

    /**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
    final public static function assertLessThan(mixed $expected, mixed $actual, string $message = ''): void
    {
        static::assertThat($actual, static::lessThan($expected), $message);
=======
    final public static function assertLessThan(mixed $maximum, mixed $actual, string $message = ''): void
    {
        self::assertThat($actual, self::lessThan($maximum), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     */
<<<<<<< HEAD
    final public static function assertLessThanOrEqual(mixed $expected, mixed $actual, string $message = ''): void
    {
        static::assertThat($actual, static::lessThanOrEqual($expected), $message);
=======
    final public static function assertLessThanOrEqual(mixed $maximum, mixed $actual, string $message = ''): void
    {
        self::assertThat($actual, self::lessThanOrEqual($maximum), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileEquals(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);

        $constraint = new IsEqual(file_get_contents($expected));

        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);

        $constraint = new IsEqual(file_get_contents($expected));

        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new IsEqualCanonicalizing(
            file_get_contents($expected),
        );

<<<<<<< HEAD
        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);

        $constraint = new IsEqualIgnoringCase(file_get_contents($expected));

        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);

        $constraint = new IsEqualIgnoringCase(file_get_contents($expected));

        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileNotEquals(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqual(file_get_contents($expected)),
        );

<<<<<<< HEAD
        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqualCanonicalizing(file_get_contents($expected)),
        );

<<<<<<< HEAD
        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expected, $message);
        static::assertFileExists($actual, $message);
=======
        self::assertFileExists($expected, $message);
        self::assertFileExists($actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqualIgnoringCase(file_get_contents($expected)),
        );

<<<<<<< HEAD
        static::assertThat(file_get_contents($actual), $constraint, $message);
=======
        self::assertThat(file_get_contents($actual), $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);

        $constraint = new IsEqual(file_get_contents($expectedFile));

        static::assertThat($actualString, $constraint, $message);
=======
        self::assertFileExists($expectedFile, $message);

        $constraint = new IsEqual(file_get_contents($expectedFile));

        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);

        $constraint = new IsEqualCanonicalizing(file_get_contents($expectedFile));

        static::assertThat($actualString, $constraint, $message);
=======
        self::assertFileExists($expectedFile, $message);

        $constraint = new IsEqualCanonicalizing(file_get_contents($expectedFile));

        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);

        $constraint = new IsEqualIgnoringCase(file_get_contents($expectedFile));

        static::assertThat($actualString, $constraint, $message);
=======
        self::assertFileExists($expectedFile, $message);

        $constraint = new IsEqualIgnoringCase(file_get_contents($expectedFile));

        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
=======
        self::assertFileExists($expectedFile, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqual(file_get_contents($expectedFile)),
        );

<<<<<<< HEAD
        static::assertThat($actualString, $constraint, $message);
=======
        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
=======
        self::assertFileExists($expectedFile, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqualCanonicalizing(file_get_contents($expectedFile)),
        );

<<<<<<< HEAD
        static::assertThat($actualString, $constraint, $message);
=======
        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
=======
        self::assertFileExists($expectedFile, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $constraint = new LogicalNot(
            new IsEqualIgnoringCase(file_get_contents($expectedFile)),
        );

<<<<<<< HEAD
        static::assertThat($actualString, $constraint, $message);
=======
        self::assertThat($actualString, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertIsReadable(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new IsReadable, $message);
=======
        self::assertThat($filename, new IsReadable, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertIsNotReadable(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new LogicalNot(new IsReadable), $message);
=======
        self::assertThat($filename, new LogicalNot(new IsReadable), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertIsWritable(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new IsWritable, $message);
=======
        self::assertThat($filename, new IsWritable, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertIsNotWritable(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new LogicalNot(new IsWritable), $message);
=======
        self::assertThat($filename, new LogicalNot(new IsWritable), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryExists(string $directory, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($directory, new DirectoryExists, $message);
=======
        self::assertThat($directory, new DirectoryExists, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryDoesNotExist(string $directory, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($directory, new LogicalNot(new DirectoryExists), $message);
=======
        self::assertThat($directory, new LogicalNot(new DirectoryExists), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryIsReadable(string $directory, string $message = ''): void
    {
        self::assertDirectoryExists($directory, $message);
        self::assertIsReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryIsNotReadable(string $directory, string $message = ''): void
    {
        self::assertDirectoryExists($directory, $message);
        self::assertIsNotReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryIsWritable(string $directory, string $message = ''): void
    {
        self::assertDirectoryExists($directory, $message);
        self::assertIsWritable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDirectoryIsNotWritable(string $directory, string $message = ''): void
    {
        self::assertDirectoryExists($directory, $message);
        self::assertIsNotWritable($directory, $message);
    }

    /**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileExists(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new FileExists, $message);
=======
        self::assertThat($filename, new FileExists, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileDoesNotExist(string $filename, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($filename, new LogicalNot(new FileExists), $message);
=======
        self::assertThat($filename, new LogicalNot(new FileExists), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileIsReadable(string $file, string $message = ''): void
    {
        self::assertFileExists($file, $message);
        self::assertIsReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileIsNotReadable(string $file, string $message = ''): void
    {
        self::assertFileExists($file, $message);
        self::assertIsNotReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileIsWritable(string $file, string $message = ''): void
    {
        self::assertFileExists($file, $message);
        self::assertIsWritable($file, $message);
    }

    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileIsNotWritable(string $file, string $message = ''): void
    {
        self::assertFileExists($file, $message);
        self::assertIsNotWritable($file, $message);
    }

    /**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert true $condition
     */
    final public static function assertTrue(mixed $condition, string $message = ''): void
    {
        static::assertThat($condition, static::isTrue(), $message);
=======
     * @phpstan-assert true $condition
     */
    final public static function assertTrue(mixed $condition, string $message = ''): void
    {
        self::assertThat($condition, self::isTrue(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !true $condition
     */
    final public static function assertNotTrue(mixed $condition, string $message = ''): void
    {
        static::assertThat($condition, static::logicalNot(static::isTrue()), $message);
=======
     * @phpstan-assert !true $condition
     */
    final public static function assertNotTrue(mixed $condition, string $message = ''): void
    {
        self::assertThat($condition, self::logicalNot(self::isTrue()), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert false $condition
     */
    final public static function assertFalse(mixed $condition, string $message = ''): void
    {
        static::assertThat($condition, static::isFalse(), $message);
=======
     * @phpstan-assert false $condition
     */
    final public static function assertFalse(mixed $condition, string $message = ''): void
    {
        self::assertThat($condition, self::isFalse(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !false $condition
     */
    final public static function assertNotFalse(mixed $condition, string $message = ''): void
    {
        static::assertThat($condition, static::logicalNot(static::isFalse()), $message);
=======
     * @phpstan-assert !false $condition
     */
    final public static function assertNotFalse(mixed $condition, string $message = ''): void
    {
        self::assertThat($condition, self::logicalNot(self::isFalse()), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert null $actual
     */
    final public static function assertNull(mixed $actual, string $message = ''): void
    {
        static::assertThat($actual, static::isNull(), $message);
=======
     * @phpstan-assert null $actual
     */
    final public static function assertNull(mixed $actual, string $message = ''): void
    {
        self::assertThat($actual, self::isNull(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !null $actual
     */
    final public static function assertNotNull(mixed $actual, string $message = ''): void
    {
        static::assertThat($actual, static::logicalNot(static::isNull()), $message);
=======
     * @phpstan-assert !null $actual
     */
    final public static function assertNotNull(mixed $actual, string $message = ''): void
    {
        self::assertThat($actual, self::logicalNot(self::isNull()), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFinite(mixed $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($actual, static::isFinite(), $message);
=======
        self::assertThat($actual, self::isFinite(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertInfinite(mixed $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($actual, static::isInfinite(), $message);
=======
        self::assertThat($actual, self::isInfinite(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNan(mixed $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($actual, static::isNan(), $message);
=======
        self::assertThat($actual, self::isNan(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that an object has a specified property.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertObjectHasProperty(string $propertyName, object $object, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $object,
            new ObjectHasProperty($propertyName),
            $message,
        );
    }

    /**
     * Asserts that an object does not have a specified property.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertObjectNotHasProperty(string $propertyName, object $object, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $object,
            new LogicalNot(
                new ObjectHasProperty($propertyName),
            ),
            $message,
        );
    }

    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
<<<<<<< HEAD
     * @throws ExpectationFailedException
     *
     * @psalm-template ExpectedType
     *
     * @psalm-param ExpectedType $expected
     *
     * @psalm-assert =ExpectedType $actual
     */
    final public static function assertSame(mixed $expected, mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @template ExpectedType
     *
     * @param ExpectedType $expected
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert =ExpectedType $actual
     */
    final public static function assertSame(mixed $expected, mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsIdentical($expected),
            $message,
        );
    }

    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertNotSame(mixed $expected, mixed $actual, string $message = ''): void
    {
        if (is_bool($expected) && is_bool($actual)) {
<<<<<<< HEAD
            static::assertNotEquals($expected, $actual, $message);
        }

        static::assertThat(
=======
            self::assertNotEquals($expected, $actual, $message);
        }

        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(
                new IsIdentical($expected),
            ),
            $message,
        );
    }

    /**
     * Asserts that a variable is of a given type.
     *
<<<<<<< HEAD
=======
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws UnknownClassOrInterfaceException
     *
<<<<<<< HEAD
     * @psalm-template ExpectedType of object
     *
     * @psalm-param class-string<ExpectedType> $expected
     *
     * @psalm-assert =ExpectedType $actual
=======
     * @phpstan-assert =ExpectedType $actual
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertInstanceOf(string $expected, mixed $actual, string $message = ''): void
    {
        if (!class_exists($expected) && !interface_exists($expected)) {
            throw new UnknownClassOrInterfaceException($expected);
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsInstanceOf($expected),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of a given type.
     *
<<<<<<< HEAD
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @psalm-template ExpectedType of object
     *
     * @psalm-param class-string<ExpectedType> $expected
     *
     * @psalm-assert !ExpectedType $actual
=======
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !ExpectedType $actual
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function assertNotInstanceOf(string $expected, mixed $actual, string $message = ''): void
    {
        if (!class_exists($expected) && !interface_exists($expected)) {
            throw new UnknownClassOrInterfaceException($expected);
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(
                new IsInstanceOf($expected),
            ),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert array $actual
     */
    final public static function assertIsArray(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert array<mixed> $actual
     */
    final public static function assertIsArray(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_ARRAY),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert bool $actual
     */
    final public static function assertIsBool(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert bool $actual
     */
    final public static function assertIsBool(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_BOOL),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert float $actual
     */
    final public static function assertIsFloat(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert float $actual
     */
    final public static function assertIsFloat(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_FLOAT),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert int $actual
     */
    final public static function assertIsInt(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert int $actual
     */
    final public static function assertIsInt(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_INT),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert numeric $actual
     */
    final public static function assertIsNumeric(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert numeric $actual
     */
    final public static function assertIsNumeric(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_NUMERIC),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert object $actual
     */
    final public static function assertIsObject(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert object $actual
     */
    final public static function assertIsObject(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_OBJECT),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert resource $actual
     */
    final public static function assertIsResource(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert resource $actual
     */
    final public static function assertIsResource(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_RESOURCE),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert resource $actual
     */
    final public static function assertIsClosedResource(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert resource $actual
     */
    final public static function assertIsClosedResource(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_CLOSED_RESOURCE),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert string $actual
     */
    final public static function assertIsString(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert string $actual
     */
    final public static function assertIsString(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_STRING),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert scalar $actual
     */
    final public static function assertIsScalar(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert scalar $actual
     */
    final public static function assertIsScalar(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_SCALAR),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert callable $actual
     */
    final public static function assertIsCallable(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert callable $actual
     */
    final public static function assertIsCallable(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_CALLABLE),
            $message,
        );
    }

    /**
     * Asserts that a variable is of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert iterable $actual
     */
    final public static function assertIsIterable(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert iterable<mixed> $actual
     */
    final public static function assertIsIterable(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new IsType(IsType::TYPE_ITERABLE),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !array $actual
     */
    final public static function assertIsNotArray(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !array<mixed> $actual
     */
    final public static function assertIsNotArray(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_ARRAY)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !bool $actual
     */
    final public static function assertIsNotBool(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !bool $actual
     */
    final public static function assertIsNotBool(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_BOOL)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !float $actual
     */
    final public static function assertIsNotFloat(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !float $actual
     */
    final public static function assertIsNotFloat(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_FLOAT)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !int $actual
     */
    final public static function assertIsNotInt(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !int $actual
     */
    final public static function assertIsNotInt(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_INT)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !numeric $actual
     */
    final public static function assertIsNotNumeric(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !numeric $actual
     */
    final public static function assertIsNotNumeric(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_NUMERIC)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !object $actual
     */
    final public static function assertIsNotObject(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !object $actual
     */
    final public static function assertIsNotObject(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_OBJECT)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !resource $actual
     */
    final public static function assertIsNotResource(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !resource $actual
     */
    final public static function assertIsNotResource(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_RESOURCE)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !resource $actual
     */
    final public static function assertIsNotClosedResource(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !resource $actual
     */
    final public static function assertIsNotClosedResource(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_CLOSED_RESOURCE)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !string $actual
     */
    final public static function assertIsNotString(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !string $actual
     */
    final public static function assertIsNotString(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_STRING)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !scalar $actual
     */
    final public static function assertIsNotScalar(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !scalar $actual
     */
    final public static function assertIsNotScalar(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_SCALAR)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !callable $actual
     */
    final public static function assertIsNotCallable(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !callable $actual
     */
    final public static function assertIsNotCallable(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_CALLABLE)),
            $message,
        );
    }

    /**
     * Asserts that a variable is not of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
<<<<<<< HEAD
     * @psalm-assert !iterable $actual
     */
    final public static function assertIsNotIterable(mixed $actual, string $message = ''): void
    {
        static::assertThat(
=======
     * @phpstan-assert !iterable<mixed> $actual
     */
    final public static function assertIsNotIterable(mixed $actual, string $message = ''): void
    {
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(new IsType(IsType::TYPE_ITERABLE)),
            $message,
        );
    }

    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertMatchesRegularExpression(string $pattern, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($string, new RegularExpression($pattern), $message);
=======
        self::assertThat($string, new RegularExpression($pattern), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $string,
            new LogicalNot(
                new RegularExpression($pattern),
            ),
            $message,
        );
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
<<<<<<< HEAD
=======
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    final public static function assertSameSize(Countable|iterable $expected, Countable|iterable $actual, string $message = ''): void
    {
        if ($expected instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$expected');
        }

        if ($actual instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$actual');
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new SameSize($expected),
            $message,
        );
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
<<<<<<< HEAD
=======
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */
    final public static function assertNotSameSize(Countable|iterable $expected, Countable|iterable $actual, string $message = ''): void
    {
        if ($expected instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$expected');
        }

        if ($actual instanceof Generator) {
            throw GeneratorNotSupportedException::fromParameterName('$actual');
        }

<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actual,
            new LogicalNot(
                new SameSize($expected),
            ),
            $message,
        );
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertStringContainsStringIgnoringLineEndings(string $needle, string $haystack, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($haystack, new StringContains($needle, false, true), $message);
=======
        self::assertThat($haystack, new StringContains($needle, false, true), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two strings are equal except for line endings.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringEqualsStringIgnoringLineEndings(string $expected, string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($actual, new StringEqualsStringIgnoringLineEndings($expected), $message);
=======
        self::assertThat($actual, new StringEqualsStringIgnoringLineEndings($expected), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileMatchesFormat(string $format, string $actualFile, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($actualFile, $message);

        static::assertThat(
=======
        self::assertFileExists($actualFile, $message);

        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            file_get_contents($actualFile),
            new StringMatchesFormatDescription($format),
            $message,
        );
    }

    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertFileMatchesFormatFile(string $formatFile, string $actualFile, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($formatFile, $message);
        static::assertFileExists($actualFile, $message);

        static::assertThat(
            file_get_contents($actualFile),
            new StringMatchesFormatDescription(file_get_contents($formatFile)),
=======
        self::assertFileExists($formatFile, $message);
        self::assertFileExists($actualFile, $message);

        $formatDescription = file_get_contents($formatFile);

        self::assertIsString($formatDescription);

        self::assertThat(
            file_get_contents($actualFile),
            new StringMatchesFormatDescription($formatDescription),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $message,
        );
    }

    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringMatchesFormat(string $format, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($string, new StringMatchesFormatDescription($format), $message);
=======
        self::assertThat($string, new StringMatchesFormatDescription($format), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5472
     */
    final public static function assertStringNotMatchesFormat(string $format, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        Event\Facade::emitter()->testTriggeredPhpunitDeprecation(
            null,
            'assertStringNotMatchesFormat() is deprecated and will be removed in PHPUnit 12 without replacement.',
        );

        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $string,
            new LogicalNot(
                new StringMatchesFormatDescription($format),
            ),
            $message,
        );
    }

    /**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($formatFile, $message);

        static::assertThat(
            $string,
            new StringMatchesFormatDescription(
                file_get_contents($formatFile),
=======
        self::assertFileExists($formatFile, $message);

        $formatDescription = file_get_contents($formatFile);

        self::assertIsString($formatDescription);

        self::assertThat(
            $string,
            new StringMatchesFormatDescription(
                $formatDescription,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ),
            $message,
        );
    }

    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5472
     */
    final public static function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($formatFile, $message);

        static::assertThat(
            $string,
            new LogicalNot(
                new StringMatchesFormatDescription(
                    file_get_contents($formatFile),
=======
        Event\Facade::emitter()->testTriggeredPhpunitDeprecation(
            null,
            'assertStringNotMatchesFormatFile() is deprecated and will be removed in PHPUnit 12 without replacement.',
        );

        self::assertFileExists($formatFile, $message);

        $formatDescription = file_get_contents($formatFile);

        self::assertIsString($formatDescription);

        self::assertThat(
            $string,
            new LogicalNot(
                new StringMatchesFormatDescription(
                    $formatDescription,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                ),
            ),
            $message,
        );
    }

    /**
     * Asserts that a string starts with a given prefix.
     *
<<<<<<< HEAD
     * @psalm-param non-empty-string $prefix
=======
     * @param non-empty-string $prefix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    final public static function assertStringStartsWith(string $prefix, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($string, new StringStartsWith($prefix), $message);
=======
        self::assertThat($string, new StringStartsWith($prefix), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string starts not with a given prefix.
     *
<<<<<<< HEAD
     * @psalm-param non-empty-string $prefix
=======
     * @param non-empty-string $prefix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    final public static function assertStringStartsNotWith(string $prefix, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $string,
            new LogicalNot(
                new StringStartsWith($prefix),
            ),
            $message,
        );
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertStringContainsString(string $needle, string $haystack, string $message = ''): void
    {
        $constraint = new StringContains($needle);

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''): void
    {
        $constraint = new StringContains($needle, true);

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertStringNotContainsString(string $needle, string $haystack, string $message = ''): void
    {
        $constraint = new LogicalNot(new StringContains($needle));

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws ExpectationFailedException
     */
    final public static function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''): void
    {
        $constraint = new LogicalNot(new StringContains($needle, true));

<<<<<<< HEAD
        static::assertThat($haystack, $constraint, $message);
=======
        self::assertThat($haystack, $constraint, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string ends with a given suffix.
     *
<<<<<<< HEAD
     * @psalm-param non-empty-string $suffix
=======
     * @param non-empty-string $suffix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    final public static function assertStringEndsWith(string $suffix, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($string, new StringEndsWith($suffix), $message);
=======
        self::assertThat($string, new StringEndsWith($suffix), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string ends not with a given suffix.
     *
<<<<<<< HEAD
     * @psalm-param non-empty-string $suffix
=======
     * @param non-empty-string $suffix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    final public static function assertStringEndsNotWith(string $suffix, string $string, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat(
=======
        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $string,
            new LogicalNot(
                new StringEndsWith($suffix),
            ),
            $message,
        );
    }

    /**
     * Asserts that two XML files are equal.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    final public static function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        $expected = (new XmlLoader)->loadFile($expectedFile);
        $actual   = (new XmlLoader)->loadFile($actualFile);

<<<<<<< HEAD
        static::assertEquals($expected, $actual, $message);
=======
        self::assertEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two XML files are not equal.
     *
     * @throws \PHPUnit\Util\Exception
     * @throws ExpectationFailedException
     */
    final public static function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        $expected = (new XmlLoader)->loadFile($expectedFile);
        $actual   = (new XmlLoader)->loadFile($actualFile);

<<<<<<< HEAD
        static::assertNotEquals($expected, $actual, $message);
=======
        self::assertNotEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    final public static function assertXmlStringEqualsXmlFile(string $expectedFile, string $actualXml, string $message = ''): void
    {
        $expected = (new XmlLoader)->loadFile($expectedFile);
        $actual   = (new XmlLoader)->load($actualXml);

<<<<<<< HEAD
        static::assertEquals($expected, $actual, $message);
=======
        self::assertEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    final public static function assertXmlStringNotEqualsXmlFile(string $expectedFile, string $actualXml, string $message = ''): void
    {
        $expected = (new XmlLoader)->loadFile($expectedFile);
        $actual   = (new XmlLoader)->load($actualXml);

<<<<<<< HEAD
        static::assertNotEquals($expected, $actual, $message);
=======
        self::assertNotEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    final public static function assertXmlStringEqualsXmlString(string $expectedXml, string $actualXml, string $message = ''): void
    {
        $expected = (new XmlLoader)->load($expectedXml);
        $actual   = (new XmlLoader)->load($actualXml);

<<<<<<< HEAD
        static::assertEquals($expected, $actual, $message);
=======
        self::assertEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */
    final public static function assertXmlStringNotEqualsXmlString(string $expectedXml, string $actualXml, string $message = ''): void
    {
        $expected = (new XmlLoader)->load($expectedXml);
        $actual   = (new XmlLoader)->load($actualXml);

<<<<<<< HEAD
        static::assertNotEquals($expected, $actual, $message);
=======
        self::assertNotEquals($expected, $actual, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertThat(mixed $value, Constraint $constraint, string $message = ''): void
    {
        self::$count += count($constraint);

<<<<<<< HEAD
        $hasFailed = true;

        try {
            $constraint->evaluate($value, $message);

            $hasFailed = false;
        } finally {
            if ($hasFailed) {
                Event\Facade::emitter()->testAssertionFailed(
                    $value,
                    $constraint,
                    $message,
                );
            } else {
                Event\Facade::emitter()->testAssertionSucceeded(
                    $value,
                    $constraint,
                    $message,
                );
            }
        }
=======
        $constraint->evaluate($value, $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJson(string $actual, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertThat($actual, static::isJson(), $message);
=======
        self::assertThat($actual, self::isJson(), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        static::assertThat($actualJson, new JsonMatches($expectedJson), $message);
=======
        self::assertJson($expectedJson, $message);
        self::assertJson($actualJson, $message);

        self::assertThat($actualJson, new JsonMatches($expectedJson), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonStringNotEqualsJsonString(string $expectedJson, string $actualJson, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        static::assertThat(
=======
        self::assertJson($expectedJson, $message);
        self::assertJson($actualJson, $message);

        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actualJson,
            new LogicalNot(
                new JsonMatches($expectedJson),
            ),
            $message,
        );
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
        $expectedJson = file_get_contents($expectedFile);

        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        static::assertThat($actualJson, new JsonMatches($expectedJson), $message);
=======
        self::assertFileExists($expectedFile, $message);

        $expectedJson = file_get_contents($expectedFile);

        self::assertIsString($expectedJson);
        self::assertJson($expectedJson, $message);
        self::assertJson($actualJson, $message);

        self::assertThat($actualJson, new JsonMatches($expectedJson), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
        $expectedJson = file_get_contents($expectedFile);

        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        static::assertThat(
=======
        self::assertFileExists($expectedFile, $message);

        $expectedJson = file_get_contents($expectedFile);

        self::assertIsString($expectedJson);
        self::assertJson($expectedJson, $message);
        self::assertJson($actualJson, $message);

        self::assertThat(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $actualJson,
            new LogicalNot(
                new JsonMatches($expectedJson),
            ),
            $message,
        );
    }

    /**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
        static::assertFileExists($actualFile, $message);

        $actualJson   = file_get_contents($actualFile);
        $expectedJson = file_get_contents($expectedFile);

        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        $constraintExpected = new JsonMatches(
            $expectedJson,
        );

        $constraintActual = new JsonMatches($actualJson);

        static::assertThat($expectedJson, $constraintActual, $message);
        static::assertThat($actualJson, $constraintExpected, $message);
=======
        self::assertFileExists($expectedFile, $message);

        $expectedJson = file_get_contents($expectedFile);

        self::assertIsString($expectedJson);
        self::assertJson($expectedJson, $message);

        self::assertFileExists($actualFile, $message);

        $actualJson = file_get_contents($actualFile);

        self::assertIsString($actualJson);
        self::assertJson($actualJson, $message);

        self::assertThat($actualJson, new JsonMatches($expectedJson), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     */
    final public static function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
<<<<<<< HEAD
        static::assertFileExists($expectedFile, $message);
        static::assertFileExists($actualFile, $message);

        $actualJson   = file_get_contents($actualFile);
        $expectedJson = file_get_contents($expectedFile);

        static::assertJson($expectedJson, $message);
        static::assertJson($actualJson, $message);

        $constraintExpected = new JsonMatches(
            $expectedJson,
        );

        $constraintActual = new JsonMatches($actualJson);

        static::assertThat($expectedJson, new LogicalNot($constraintActual), $message);
        static::assertThat($actualJson, new LogicalNot($constraintExpected), $message);
=======
        self::assertFileExists($expectedFile, $message);

        $expectedJson = file_get_contents($expectedFile);

        self::assertIsString($expectedJson);
        self::assertJson($expectedJson, $message);

        self::assertFileExists($actualFile, $message);

        $actualJson = file_get_contents($actualFile);

        self::assertIsString($actualJson);
        self::assertJson($actualJson, $message);

        self::assertThat($actualJson, LogicalNot(new JsonMatches($expectedJson)), $message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @throws Exception
     */
    final public static function logicalAnd(mixed ...$constraints): LogicalAnd
    {
        return LogicalAnd::fromConstraints(...$constraints);
    }

    final public static function logicalOr(mixed ...$constraints): LogicalOr
    {
        return LogicalOr::fromConstraints(...$constraints);
    }

    final public static function logicalNot(Constraint $constraint): LogicalNot
    {
        return new LogicalNot($constraint);
    }

    final public static function logicalXor(mixed ...$constraints): LogicalXor
    {
        return LogicalXor::fromConstraints(...$constraints);
    }

    final public static function anything(): IsAnything
    {
        return new IsAnything;
    }

    final public static function isTrue(): IsTrue
    {
        return new IsTrue;
    }

    /**
<<<<<<< HEAD
     * @psalm-template CallbackInput of mixed
     *
     * @psalm-param callable(CallbackInput $callback): bool $callback
     *
     * @psalm-return Callback<CallbackInput>
=======
     * @template CallbackInput of mixed
     *
     * @param callable(CallbackInput $callback): bool $callback
     *
     * @return Callback<CallbackInput>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function callback(callable $callback): Callback
    {
        return new Callback($callback);
    }

    final public static function isFalse(): IsFalse
    {
        return new IsFalse;
    }

    final public static function isJson(): IsJson
    {
        return new IsJson;
    }

    final public static function isNull(): IsNull
    {
        return new IsNull;
    }

    final public static function isFinite(): IsFinite
    {
        return new IsFinite;
    }

    final public static function isInfinite(): IsInfinite
    {
        return new IsInfinite;
    }

    final public static function isNan(): IsNan
    {
        return new IsNan;
    }

    final public static function containsEqual(mixed $value): TraversableContainsEqual
    {
        return new TraversableContainsEqual($value);
    }

    final public static function containsIdentical(mixed $value): TraversableContainsIdentical
    {
        return new TraversableContainsIdentical($value);
    }

    /**
<<<<<<< HEAD
     * @throws Exception
=======
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     *
     * @throws Exception
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6055
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function containsOnly(string $type): TraversableContainsOnly
    {
        return new TraversableContainsOnly($type);
    }

<<<<<<< HEAD
    /**
=======
    final public static function containsOnlyArray(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Array->value);
    }

    final public static function containsOnlyBool(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Bool->value);
    }

    final public static function containsOnlyCallable(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Callable->value);
    }

    final public static function containsOnlyFloat(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Float->value);
    }

    final public static function containsOnlyInt(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Int->value);
    }

    final public static function containsOnlyIterable(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Iterable->value);
    }

    final public static function containsOnlyNull(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Null->value);
    }

    final public static function containsOnlyNumeric(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Numeric->value);
    }

    final public static function containsOnlyObject(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Object->value);
    }

    final public static function containsOnlyResource(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Resource->value);
    }

    final public static function containsOnlyClosedResource(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::ClosedResource->value);
    }

    final public static function containsOnlyScalar(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::Scalar->value);
    }

    final public static function containsOnlyString(): TraversableContainsOnly
    {
        return new TraversableContainsOnly(NativeType::String->value);
    }

    /**
     * @param class-string $className
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws Exception
     */
    final public static function containsOnlyInstancesOf(string $className): TraversableContainsOnly
    {
        return new TraversableContainsOnly($className, false);
    }

<<<<<<< HEAD
    final public static function arrayHasKey(int|string $key): ArrayHasKey
=======
    final public static function arrayHasKey(mixed $key): ArrayHasKey
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new ArrayHasKey($key);
    }

    final public static function isList(): IsList
    {
        return new IsList;
    }

    final public static function equalTo(mixed $value): IsEqual
    {
<<<<<<< HEAD
        return new IsEqual($value, 0.0, false, false);
=======
        return new IsEqual($value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    final public static function equalToCanonicalizing(mixed $value): IsEqualCanonicalizing
    {
        return new IsEqualCanonicalizing($value);
    }

    final public static function equalToIgnoringCase(mixed $value): IsEqualIgnoringCase
    {
        return new IsEqualIgnoringCase($value);
    }

    final public static function equalToWithDelta(mixed $value, float $delta): IsEqualWithDelta
    {
        return new IsEqualWithDelta($value, $delta);
    }

    final public static function isEmpty(): IsEmpty
    {
        return new IsEmpty;
    }

    final public static function isWritable(): IsWritable
    {
        return new IsWritable;
    }

    final public static function isReadable(): IsReadable
    {
        return new IsReadable;
    }

    final public static function directoryExists(): DirectoryExists
    {
        return new DirectoryExists;
    }

    final public static function fileExists(): FileExists
    {
        return new FileExists;
    }

    final public static function greaterThan(mixed $value): GreaterThan
    {
        return new GreaterThan($value);
    }

    final public static function greaterThanOrEqual(mixed $value): LogicalOr
    {
<<<<<<< HEAD
        return static::logicalOr(
=======
        return self::logicalOr(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            new IsEqual($value),
            new GreaterThan($value),
        );
    }

    final public static function identicalTo(mixed $value): IsIdentical
    {
        return new IsIdentical($value);
    }

    /**
     * @throws UnknownClassOrInterfaceException
     */
    final public static function isInstanceOf(string $className): IsInstanceOf
    {
        return new IsInstanceOf($className);
    }

<<<<<<< HEAD
    /**
     * @psalm-param 'array'|'boolean'|'bool'|'double'|'float'|'integer'|'int'|'null'|'numeric'|'object'|'real'|'resource'|'resource (closed)'|'string'|'scalar'|'callable'|'iterable' $type
     *
     * @throws Exception
=======
    final public static function isArray(): IsType
    {
        return new IsType(NativeType::Array->value);
    }

    final public static function isBool(): IsType
    {
        return new IsType(NativeType::Bool->value);
    }

    final public static function isCallable(): IsType
    {
        return new IsType(NativeType::Callable->value);
    }

    final public static function isFloat(): IsType
    {
        return new IsType(NativeType::Float->value);
    }

    final public static function isInt(): IsType
    {
        return new IsType(NativeType::Int->value);
    }

    final public static function isIterable(): IsType
    {
        return new IsType(NativeType::Iterable->value);
    }

    final public static function isNumeric(): IsType
    {
        return new IsType(NativeType::Numeric->value);
    }

    final public static function isObject(): IsType
    {
        return new IsType(NativeType::Object->value);
    }

    final public static function isResource(): IsType
    {
        return new IsType(NativeType::Resource->value);
    }

    final public static function isClosedResource(): IsType
    {
        return new IsType(NativeType::ClosedResource->value);
    }

    final public static function isScalar(): IsType
    {
        return new IsType(NativeType::Scalar->value);
    }

    final public static function isString(): IsType
    {
        return new IsType(NativeType::String->value);
    }

    /**
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource (closed)'|'resource'|'scalar'|'string' $type
     *
     * @throws Exception
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6052
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    final public static function isType(string $type): IsType
    {
        return new IsType($type);
    }

    final public static function lessThan(mixed $value): LessThan
    {
        return new LessThan($value);
    }

    final public static function lessThanOrEqual(mixed $value): LogicalOr
    {
<<<<<<< HEAD
        return static::logicalOr(
=======
        return self::logicalOr(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            new IsEqual($value),
            new LessThan($value),
        );
    }

    final public static function matchesRegularExpression(string $pattern): RegularExpression
    {
        return new RegularExpression($pattern);
    }

    final public static function matches(string $string): StringMatchesFormatDescription
    {
        return new StringMatchesFormatDescription($string);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $prefix
=======
     * @param non-empty-string $prefix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     */
    final public static function stringStartsWith(string $prefix): StringStartsWith
    {
        return new StringStartsWith($prefix);
    }

    final public static function stringContains(string $string, bool $case = true): StringContains
    {
        return new StringContains($string, $case);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $suffix
=======
     * @param non-empty-string $suffix
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     */
    final public static function stringEndsWith(string $suffix): StringEndsWith
    {
        return new StringEndsWith($suffix);
    }

    final public static function stringEqualsStringIgnoringLineEndings(string $string): StringEqualsStringIgnoringLineEndings
    {
        return new StringEqualsStringIgnoringLineEndings($string);
    }

    final public static function countOf(int $count): Count
    {
        return new Count($count);
    }

    final public static function objectEquals(object $object, string $method = 'equals'): ObjectEquals
    {
        return new ObjectEquals($object, $method);
    }

    /**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     */
    final public static function fail(string $message = ''): never
    {
        self::$count++;

        throw new AssertionFailedError($message);
    }

    /**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     */
    final public static function markTestIncomplete(string $message = ''): never
    {
        throw new IncompleteTestError($message);
    }

    /**
     * Mark the test as skipped.
     *
     * @throws SkippedWithMessageException
     */
    final public static function markTestSkipped(string $message = ''): never
    {
        throw new SkippedWithMessageException($message);
    }

    /**
     * Return the current assertion count.
     */
    final public static function getCount(): int
    {
        return self::$count;
    }

    /**
     * Reset the assertion counter.
     */
    final public static function resetCount(): void
    {
        self::$count = 0;
    }

    private static function isNativeType(string $type): bool
    {
        return match ($type) {
            'numeric', 'integer', 'int', 'iterable', 'float', 'string', 'boolean', 'bool', 'null', 'array', 'object', 'resource', 'scalar' => true,
            default => false,
        };
    }
}

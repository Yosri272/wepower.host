<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

<<<<<<< HEAD
use function array_unshift;
use function assert;
use function class_exists;
use PHPUnit\Metadata\Parser\Registry;
=======
use function assert;
use function class_exists;
use PHPUnit\Framework\TestCase;
use PHPUnit\Metadata\After;
use PHPUnit\Metadata\AfterClass;
use PHPUnit\Metadata\Before;
use PHPUnit\Metadata\BeforeClass;
use PHPUnit\Metadata\Parser\Registry;
use PHPUnit\Metadata\PostCondition;
use PHPUnit\Metadata\PreCondition;
use PHPUnit\Runner\HookMethod;
use PHPUnit\Runner\HookMethodCollection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Util\Reflection;
use ReflectionClass;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HookMethods
{
    /**
<<<<<<< HEAD
     * @psalm-var array<class-string, array{beforeClass: list<non-empty-string>, before: list<non-empty-string>, preCondition: list<non-empty-string>, postCondition: list<non-empty-string>, after: list<non-empty-string>, afterClass: list<non-empty-string>}>
=======
     * @var array<class-string, array{beforeClass: HookMethodCollection, before: HookMethodCollection, preCondition: HookMethodCollection, postCondition: HookMethodCollection, after: HookMethodCollection, afterClass: HookMethodCollection}>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private static array $hookMethods = [];

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     *
     * @psalm-return array{beforeClass: list<non-empty-string>, before: list<non-empty-string>, preCondition: list<non-empty-string>, postCondition: list<non-empty-string>, after: list<non-empty-string>, afterClass: list<non-empty-string>}
=======
     * @param class-string<TestCase> $className
     *
     * @return array{beforeClass: HookMethodCollection, before: HookMethodCollection, preCondition: HookMethodCollection, postCondition: HookMethodCollection, after: HookMethodCollection, afterClass: HookMethodCollection}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hookMethods(string $className): array
    {
        if (!class_exists($className)) {
            return self::emptyHookMethodsArray();
        }

        if (isset(self::$hookMethods[$className])) {
            return self::$hookMethods[$className];
        }

        self::$hookMethods[$className] = self::emptyHookMethodsArray();

<<<<<<< HEAD
        foreach (Reflection::methodsInTestClass(new ReflectionClass($className)) as $method) {
=======
        foreach (Reflection::methodsDeclaredDirectlyInTestClass(new ReflectionClass($className)) as $method) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $methodName = $method->getName();

            assert(!empty($methodName));

            $metadata = Registry::parser()->forMethod($className, $methodName);

            if ($method->isStatic()) {
                if ($metadata->isBeforeClass()->isNotEmpty()) {
<<<<<<< HEAD
                    array_unshift(
                        self::$hookMethods[$className]['beforeClass'],
                        $methodName,
=======
                    $beforeClass = $metadata->isBeforeClass()->asArray()[0];
                    assert($beforeClass instanceof BeforeClass);

                    self::$hookMethods[$className]['beforeClass']->add(
                        new HookMethod($methodName, $beforeClass->priority()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    );
                }

                if ($metadata->isAfterClass()->isNotEmpty()) {
<<<<<<< HEAD
                    self::$hookMethods[$className]['afterClass'][] = $methodName;
=======
                    $afterClass = $metadata->isAfterClass()->asArray()[0];
                    assert($afterClass instanceof AfterClass);

                    self::$hookMethods[$className]['afterClass']->add(
                        new HookMethod($methodName, $afterClass->priority()),
                    );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                }
            }

            if ($metadata->isBefore()->isNotEmpty()) {
<<<<<<< HEAD
                array_unshift(
                    self::$hookMethods[$className]['before'],
                    $methodName,
=======
                $before = $metadata->isBefore()->asArray()[0];
                assert($before instanceof Before);

                self::$hookMethods[$className]['before']->add(
                    new HookMethod($methodName, $before->priority()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if ($metadata->isPreCondition()->isNotEmpty()) {
<<<<<<< HEAD
                array_unshift(
                    self::$hookMethods[$className]['preCondition'],
                    $methodName,
=======
                $preCondition = $metadata->isPreCondition()->asArray()[0];
                assert($preCondition instanceof PreCondition);

                self::$hookMethods[$className]['preCondition']->add(
                    new HookMethod($methodName, $preCondition->priority()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if ($metadata->isPostCondition()->isNotEmpty()) {
<<<<<<< HEAD
                self::$hookMethods[$className]['postCondition'][] = $methodName;
            }

            if ($metadata->isAfter()->isNotEmpty()) {
                self::$hookMethods[$className]['after'][] = $methodName;
=======
                $postCondition = $metadata->isPostCondition()->asArray()[0];
                assert($postCondition instanceof PostCondition);

                self::$hookMethods[$className]['postCondition']->add(
                    new HookMethod($methodName, $postCondition->priority()),
                );
            }

            if ($metadata->isAfter()->isNotEmpty()) {
                $after = $metadata->isAfter()->asArray()[0];
                assert($after instanceof After);

                self::$hookMethods[$className]['after']->add(
                    new HookMethod($methodName, $after->priority()),
                );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }
        }

        return self::$hookMethods[$className];
    }

    /**
<<<<<<< HEAD
     * @psalm-return array{beforeClass: list<non-empty-string>, before: list<non-empty-string>, preCondition: list<non-empty-string>, postCondition: list<non-empty-string>, after: list<non-empty-string>, afterClass: list<non-empty-string>}
=======
     * @return array{beforeClass: HookMethodCollection, before: HookMethodCollection, preCondition: HookMethodCollection, postCondition: HookMethodCollection, after: HookMethodCollection, afterClass: HookMethodCollection}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function emptyHookMethodsArray(): array
    {
        return [
<<<<<<< HEAD
            'beforeClass'   => ['setUpBeforeClass'],
            'before'        => ['setUp'],
            'preCondition'  => ['assertPreConditions'],
            'postCondition' => ['assertPostConditions'],
            'after'         => ['tearDown'],
            'afterClass'    => ['tearDownAfterClass'],
=======
            'beforeClass'   => HookMethodCollection::defaultBeforeClass(),
            'before'        => HookMethodCollection::defaultBefore(),
            'preCondition'  => HookMethodCollection::defaultPreCondition(),
            'postCondition' => HookMethodCollection::defaultPostCondition(),
            'after'         => HookMethodCollection::defaultAfter(),
            'afterClass'    => HookMethodCollection::defaultAfterClass(),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}

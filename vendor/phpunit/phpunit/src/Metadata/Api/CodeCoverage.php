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
use function array_unique;
use function array_values;
use function assert;
=======
use function assert;
use function class_exists;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function count;
use function interface_exists;
use function sprintf;
use function str_starts_with;
<<<<<<< HEAD
use PHPUnit\Framework\CodeCoverageException;
use PHPUnit\Framework\InvalidCoversTargetException;
use PHPUnit\Framework\TestSuite;
=======
use function trait_exists;
use PHPUnit\Framework\CodeCoverageException;
use PHPUnit\Framework\InvalidCoversTargetException;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Metadata\Covers;
use PHPUnit\Metadata\CoversClass;
use PHPUnit\Metadata\CoversDefaultClass;
use PHPUnit\Metadata\CoversFunction;
<<<<<<< HEAD
use PHPUnit\Metadata\IgnoreClassForCodeCoverage;
use PHPUnit\Metadata\IgnoreFunctionForCodeCoverage;
use PHPUnit\Metadata\IgnoreMethodForCodeCoverage;
=======
use PHPUnit\Metadata\CoversMethod;
use PHPUnit\Metadata\CoversTrait;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Metadata\Parser\Registry;
use PHPUnit\Metadata\Uses;
use PHPUnit\Metadata\UsesClass;
use PHPUnit\Metadata\UsesDefaultClass;
use PHPUnit\Metadata\UsesFunction;
<<<<<<< HEAD
use RecursiveIteratorIterator;
=======
use PHPUnit\Metadata\UsesMethod;
use PHPUnit\Metadata\UsesTrait;
use ReflectionClass;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use SebastianBergmann\CodeUnit\CodeUnitCollection;
use SebastianBergmann\CodeUnit\Exception as CodeUnitException;
use SebastianBergmann\CodeUnit\InvalidCodeUnitException;
use SebastianBergmann\CodeUnit\Mapper;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverage
{
    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array<string,list<int>>|false
     *
     * @throws CodeCoverageException
=======
     * @var array<class-string, non-empty-list<class-string>>
     */
    private array $withParents = [];

    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws CodeCoverageException
     *
     * @return array<string,list<int>>|false
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function linesToBeCovered(string $className, string $methodName): array|false
    {
        if (!$this->shouldCodeCoverageBeCollectedFor($className, $methodName)) {
            return false;
        }

        $metadataForClass = Registry::parser()->forClass($className);
        $classShortcut    = null;

        if ($metadataForClass->isCoversDefaultClass()->isNotEmpty()) {
            if (count($metadataForClass->isCoversDefaultClass()) > 1) {
                throw new CodeCoverageException(
                    sprintf(
                        'More than one @coversDefaultClass annotation for class or interface "%s"',
                        $className,
                    ),
                );
            }

            $metadata = $metadataForClass->isCoversDefaultClass()->asArray()[0];

            assert($metadata instanceof CoversDefaultClass);

            $classShortcut = $metadata->className();
        }

        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
<<<<<<< HEAD
            if (!$metadata->isCoversClass() && !$metadata->isCoversFunction() && !$metadata->isCovers()) {
                continue;
            }

            assert($metadata instanceof CoversClass || $metadata instanceof CoversFunction || $metadata instanceof Covers);

            if ($metadata->isCoversClass() || $metadata->isCoversFunction()) {
=======
            if (!$metadata->isCoversClass() && !$metadata->isCoversTrait() && !$metadata->isCoversMethod() && !$metadata->isCoversFunction() && !$metadata->isCovers()) {
                continue;
            }

            /** @phpstan-ignore booleanOr.alwaysTrue */
            assert($metadata instanceof CoversClass || $metadata instanceof CoversTrait || $metadata instanceof CoversMethod || $metadata instanceof CoversFunction || $metadata instanceof Covers);

            if ($metadata->isCoversClass() || $metadata->isCoversTrait() || $metadata->isCoversMethod() || $metadata->isCoversFunction()) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $codeUnits = $codeUnits->mergeWith($this->mapToCodeUnits($metadata));
            } elseif ($metadata->isCovers()) {
                assert($metadata instanceof Covers);

                $target = $metadata->target();

                if (interface_exists($target)) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            'Trying to @cover interface "%s".',
                            $target,
                        ),
                    );
                }

                if ($classShortcut !== null && str_starts_with($target, '::')) {
                    $target = $classShortcut . $target;
                }

                try {
                    $codeUnits = $codeUnits->mergeWith($mapper->stringToCodeUnits($target));
                } catch (InvalidCodeUnitException $e) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            '"@covers %s" is invalid',
                            $target,
                        ),
                        $e->getCode(),
                        $e,
                    );
                }
            }
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     *
     * @psalm-return array<string,list<int>>
     *
     * @throws CodeCoverageException
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
     *
     * @throws CodeCoverageException
     *
     * @return array<string,list<int>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function linesToBeUsed(string $className, string $methodName): array
    {
        $metadataForClass = Registry::parser()->forClass($className);
        $classShortcut    = null;

        if ($metadataForClass->isUsesDefaultClass()->isNotEmpty()) {
            if (count($metadataForClass->isUsesDefaultClass()) > 1) {
                throw new CodeCoverageException(
                    sprintf(
                        'More than one @usesDefaultClass annotation for class or interface "%s"',
                        $className,
                    ),
                );
            }

            $metadata = $metadataForClass->isUsesDefaultClass()->asArray()[0];

            assert($metadata instanceof UsesDefaultClass);

            $classShortcut = $metadata->className();
        }

        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
<<<<<<< HEAD
            if (!$metadata->isUsesClass() && !$metadata->isUsesFunction() && !$metadata->isUses()) {
                continue;
            }

            assert($metadata instanceof UsesClass || $metadata instanceof UsesFunction || $metadata instanceof Uses);

            if ($metadata->isUsesClass() || $metadata->isUsesFunction()) {
=======
            if (!$metadata->isUsesClass() && !$metadata->isUsesTrait() && !$metadata->isUsesMethod() && !$metadata->isUsesFunction() && !$metadata->isUses()) {
                continue;
            }

            /** @phpstan-ignore booleanOr.alwaysTrue */
            assert($metadata instanceof UsesClass || $metadata instanceof UsesTrait || $metadata instanceof UsesMethod || $metadata instanceof UsesFunction || $metadata instanceof Uses);

            if ($metadata->isUsesClass() || $metadata->isUsesTrait() || $metadata->isUsesMethod() || $metadata->isUsesFunction()) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $codeUnits = $codeUnits->mergeWith($this->mapToCodeUnits($metadata));
            } elseif ($metadata->isUses()) {
                assert($metadata instanceof Uses);

                $target = $metadata->target();

                if ($classShortcut !== null && str_starts_with($target, '::')) {
                    $target = $classShortcut . $target;
                }

                try {
                    $codeUnits = $codeUnits->mergeWith($mapper->stringToCodeUnits($target));
                } catch (InvalidCodeUnitException $e) {
                    throw new InvalidCoversTargetException(
                        sprintf(
                            '"@uses %s" is invalid',
                            $target,
                        ),
                        $e->getCode(),
                        $e,
                    );
                }
            }
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<int>>
     */
    public function linesToBeIgnored(TestSuite $testSuite): array
    {
        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach ($this->testCaseClassesIn($testSuite) as $testCaseClassName) {
            $codeUnits = $codeUnits->mergeWith(
                $this->codeUnitsIgnoredBy($testCaseClassName),
            );
        }

        return $mapper->codeUnitsToSourceLines($codeUnits);
    }

    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function shouldCodeCoverageBeCollectedFor(string $className, string $methodName): bool
    {
        $metadataForClass  = Registry::parser()->forClass($className);
        $metadataForMethod = Registry::parser()->forMethod($className, $methodName);

        if ($metadataForMethod->isCoversNothing()->isNotEmpty()) {
            return false;
        }

        if ($metadataForMethod->isCovers()->isNotEmpty() ||
            $metadataForMethod->isCoversClass()->isNotEmpty() ||
            $metadataForMethod->isCoversFunction()->isNotEmpty()) {
            return true;
        }

        if ($metadataForClass->isCoversNothing()->isNotEmpty()) {
            return false;
        }

        return true;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<class-string>
     */
    private function testCaseClassesIn(TestSuite $testSuite): array
    {
        $classNames = [];

        foreach (new RecursiveIteratorIterator($testSuite) as $test) {
            $classNames[] = $test::class;
        }

        return array_values(array_unique($classNames));
    }

    /**
     * @psalm-param class-string $className
     */
    private function codeUnitsIgnoredBy(string $className): CodeUnitCollection
    {
        $codeUnits = CodeUnitCollection::fromList();
        $mapper    = new Mapper;

        foreach (Registry::parser()->forClass($className) as $metadata) {
            if ($metadata instanceof IgnoreClassForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits($metadata->className()),
                );
            }

            if ($metadata instanceof IgnoreMethodForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits($metadata->className() . '::' . $metadata->methodName()),
                );
            }

            if ($metadata instanceof IgnoreFunctionForCodeCoverage) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits('::' . $metadata->functionName()),
                );
            }
        }

        return $codeUnits;
    }

    /**
     * @throws InvalidCoversTargetException
     */
    private function mapToCodeUnits(CoversClass|CoversFunction|UsesClass|UsesFunction $metadata): CodeUnitCollection
    {
        $mapper = new Mapper;

        try {
            return $mapper->stringToCodeUnits($metadata->asStringForCodeUnitMapper());
        } catch (CodeUnitException $e) {
            if ($metadata->isCoversClass() || $metadata->isUsesClass()) {
                if (interface_exists($metadata->className())) {
                    $type = 'Interface';
                } else {
                    $type = 'Class';
                }
            } else {
                $type = 'Function';
            }

            throw new InvalidCoversTargetException(
                sprintf(
                    '%s "%s" is not a valid target for code coverage',
                    $type,
=======
     * @throws InvalidCoversTargetException
     */
    private function mapToCodeUnits(CoversClass|CoversFunction|CoversMethod|CoversTrait|UsesClass|UsesFunction|UsesMethod|UsesTrait $metadata): CodeUnitCollection
    {
        $mapper = new Mapper;
        $names  = $this->names($metadata);

        try {
            if (count($names) === 1) {
                return $mapper->stringToCodeUnits($names[0]);
            }

            $codeUnits = CodeUnitCollection::fromList();

            foreach ($names as $name) {
                $codeUnits = $codeUnits->mergeWith(
                    $mapper->stringToCodeUnits($name),
                );
            }

            return $codeUnits;
        } catch (CodeUnitException $e) {
            throw new InvalidCoversTargetException(
                sprintf(
                    '%s is not a valid target for code coverage',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    $metadata->asStringForCodeUnitMapper(),
                ),
                $e->getCode(),
                $e,
            );
        }
    }
<<<<<<< HEAD
=======

    /**
     * @throws InvalidCoversTargetException
     *
     * @return non-empty-list<non-empty-string>
     */
    private function names(CoversClass|CoversFunction|CoversMethod|CoversTrait|UsesClass|UsesFunction|UsesMethod|UsesTrait $metadata): array
    {
        $name  = $metadata->asStringForCodeUnitMapper();
        $names = [$name];

        if ($metadata->isCoversClass() || $metadata->isUsesClass()) {
            if (isset($this->withParents[$name])) {
                return $this->withParents[$name];
            }

            if (interface_exists($name)) {
                throw new InvalidCoversTargetException(
                    sprintf(
                        'Interface "%s" is not a valid target for code coverage',
                        $name,
                    ),
                );
            }

            if (!(class_exists($name) || trait_exists($name))) {
                throw new InvalidCoversTargetException(
                    sprintf(
                        '"%s" is not a valid target for code coverage',
                        $name,
                    ),
                );
            }

            assert(class_exists($names[0]) || trait_exists($names[0]));

            $reflector = new ReflectionClass($name);

            while ($reflector = $reflector->getParentClass()) {
                if (!$reflector->isUserDefined()) {
                    break;
                }

                $names[] = $reflector->getName();
            }

            $this->withParents[$name] = $names;
        }

        return $names;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

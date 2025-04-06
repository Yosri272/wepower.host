<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event;

<<<<<<< HEAD
use PHPUnit\Event\Code\ClassMethod;
use PHPUnit\Event\Code\ComparisonFailure;
=======
use function assert;
use PHPUnit\Event\Code\ClassMethod;
use PHPUnit\Event\Code\ComparisonFailure;
use PHPUnit\Event\Code\IssueTrigger\IssueTrigger;
use PHPUnit\Event\Code\NoTestCaseObjectOnCallStackException;
use PHPUnit\Event\Code\TestMethod;
use PHPUnit\Event\Code\TestMethodBuilder;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Event\Code\Throwable;
use PHPUnit\Event\Test\DataProviderMethodCalled;
use PHPUnit\Event\Test\DataProviderMethodFinished;
use PHPUnit\Event\TestSuite\Filtered as TestSuiteFiltered;
use PHPUnit\Event\TestSuite\Finished as TestSuiteFinished;
use PHPUnit\Event\TestSuite\Loaded as TestSuiteLoaded;
use PHPUnit\Event\TestSuite\Skipped as TestSuiteSkipped;
use PHPUnit\Event\TestSuite\Sorted as TestSuiteSorted;
use PHPUnit\Event\TestSuite\Started as TestSuiteStarted;
use PHPUnit\Event\TestSuite\TestSuite;
<<<<<<< HEAD
use PHPUnit\Framework\Constraint;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\Util\Exporter;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DispatchingEmitter implements Emitter
{
    private readonly Dispatcher $dispatcher;
    private readonly Telemetry\System $system;
    private readonly Telemetry\Snapshot $startSnapshot;
    private Telemetry\Snapshot $previousSnapshot;
<<<<<<< HEAD
    private bool $exportObjects = false;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(Dispatcher $dispatcher, Telemetry\System $system)
    {
        $this->dispatcher = $dispatcher;
        $this->system     = $system;

        $this->startSnapshot    = $system->snapshot();
        $this->previousSnapshot = $this->startSnapshot;
    }

    /**
<<<<<<< HEAD
     * @deprecated
     */
    public function exportObjects(): void
    {
        $this->exportObjects = true;
    }

    /**
     * @deprecated
     */
    public function exportsObjects(): bool
    {
        return $this->exportObjects;
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function applicationStarted(): void
    {
        $this->dispatcher->dispatch(
            new Application\Started(
                $this->telemetryInfo(),
                new Runtime\Runtime,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerStarted(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\Started(
                $this->telemetryInfo(),
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerConfigured(Configuration $configuration): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\Configured(
                $this->telemetryInfo(),
                $configuration,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerBootstrapFinished(string $filename): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\BootstrapFinished(
                $this->telemetryInfo(),
                $filename,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerLoadedExtensionFromPhar(string $filename, string $name, string $version): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ExtensionLoadedFromPhar(
                $this->telemetryInfo(),
                $filename,
                $name,
                $version,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param array<string, string> $parameters
=======
     * @param class-string          $className
     * @param array<string, string> $parameters
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerBootstrappedExtension(string $className, array $parameters): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ExtensionBootstrapped(
                $this->telemetryInfo(),
                $className,
                $parameters,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function dataProviderMethodCalled(ClassMethod $testMethod, ClassMethod $dataProviderMethod): void
    {
        $this->dispatcher->dispatch(
            new DataProviderMethodCalled(
                $this->telemetryInfo(),
                $testMethod,
                $dataProviderMethod,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function dataProviderMethodFinished(ClassMethod $testMethod, ClassMethod ...$calledMethods): void
    {
        $this->dispatcher->dispatch(
            new DataProviderMethodFinished(
                $this->telemetryInfo(),
                $testMethod,
                ...$calledMethods,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteLoaded(TestSuite $testSuite): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteLoaded(
                $this->telemetryInfo(),
                $testSuite,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteFiltered(TestSuite $testSuite): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteFiltered(
                $this->telemetryInfo(),
                $testSuite,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteSorted(int $executionOrder, int $executionOrderDefects, bool $resolveDependencies): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteSorted(
                $this->telemetryInfo(),
                $executionOrder,
                $executionOrderDefects,
                $resolveDependencies,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerEventFacadeSealed(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\EventFacadeSealed(
                $this->telemetryInfo(),
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionStarted(TestSuite $testSuite): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ExecutionStarted(
                $this->telemetryInfo(),
                $testSuite,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerDisabledGarbageCollection(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\GarbageCollectionDisabled($this->telemetryInfo()),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerTriggeredGarbageCollection(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\GarbageCollectionTriggered($this->telemetryInfo()),
        );
    }

<<<<<<< HEAD
=======
    public function testRunnerStartedChildProcess(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ChildProcessStarted($this->telemetryInfo()),
        );
    }

    public function testRunnerFinishedChildProcess(string $stdout, string $stderr): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ChildProcessFinished(
                $this->telemetryInfo(),
                $stdout,
                $stderr,
            ),
        );
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteSkipped(TestSuite $testSuite, string $message): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteSkipped(
                $this->telemetryInfo(),
                $testSuite,
                $message,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteStarted(TestSuite $testSuite): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteStarted(
                $this->telemetryInfo(),
                $testSuite,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreparationStarted(Code\Test $test): void
    {
        $this->dispatcher->dispatch(
            new Test\PreparationStarted(
                $this->telemetryInfo(),
                $test,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPreparationFailed(Code\Test $test): void
    {
        $this->dispatcher->dispatch(
            new Test\PreparationFailed(
                $this->telemetryInfo(),
                $test,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testBeforeFirstTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function beforeFirstTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\BeforeFirstTestMethodCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testBeforeFirstTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
=======
    public function beforeFirstTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\BeforeFirstTestMethodErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testBeforeFirstTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function beforeFirstTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\BeforeFirstTestMethodFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testBeforeTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function beforeTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\BeforeTestMethodCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testBeforeTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function beforeTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\BeforeTestMethodErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function beforeTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\BeforeTestMethodFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testPreConditionCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function preConditionCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\PreConditionCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testPreConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function preConditionErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\PreConditionErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function preConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\PreConditionFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPrepared(Code\Test $test): void
    {
        $this->dispatcher->dispatch(
            new Test\Prepared(
                $this->telemetryInfo(),
                $test,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRegisteredComparator(string $className): void
    {
        $this->dispatcher->dispatch(
            new Test\ComparatorRegistered(
                $this->telemetryInfo(),
                $className,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     *
     * @deprecated
     */
    public function testAssertionSucceeded(mixed $value, Constraint\Constraint $constraint, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\AssertionSucceeded(
                $this->telemetryInfo(),
                Exporter::export($value, $this->exportObjects),
                $constraint->toString($this->exportObjects),
                $constraint->count(),
                $message,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     *
     * @deprecated
     */
    public function testAssertionFailed(mixed $value, Constraint\Constraint $constraint, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\AssertionFailed(
                $this->telemetryInfo(),
                Exporter::export($value, $this->exportObjects),
                $constraint->toString($this->exportObjects),
                $constraint->count(),
                $message,
            ),
        );
    }

    /**
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObject(string $className): void
    {
        $this->dispatcher->dispatch(
            new Test\MockObjectCreated(
                $this->telemetryInfo(),
                $className,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<class-string> $interfaces
=======
     * @param list<class-string> $interfaces
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObjectForIntersectionOfInterfaces(array $interfaces): void
    {
        $this->dispatcher->dispatch(
            new Test\MockObjectForIntersectionOfInterfacesCreated(
                $this->telemetryInfo(),
                $interfaces,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param trait-string $traitName
=======
     * @param trait-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObjectForTrait(string $traitName): void
    {
        $this->dispatcher->dispatch(
            new Test\MockObjectForTraitCreated(
                $this->telemetryInfo(),
                $traitName,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObjectForAbstractClass(string $className): void
    {
        $this->dispatcher->dispatch(
            new Test\MockObjectForAbstractClassCreated(
                $this->telemetryInfo(),
                $className,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $originalClassName
     * @psalm-param class-string $mockClassName
=======
     * @param class-string $originalClassName
     * @param class-string $mockClassName
     * @param list<string> $methods
     * @param list<mixed>  $options
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedMockObjectFromWsdl(string $wsdlFile, string $originalClassName, string $mockClassName, array $methods, bool $callOriginalConstructor, array $options): void
    {
        $this->dispatcher->dispatch(
            new Test\MockObjectFromWsdlCreated(
                $this->telemetryInfo(),
                $wsdlFile,
                $originalClassName,
                $mockClassName,
                $methods,
                $callOriginalConstructor,
                $options,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedPartialMockObject(string $className, string ...$methodNames): void
    {
        $this->dispatcher->dispatch(
            new Test\PartialMockObjectCreated(
                $this->telemetryInfo(),
                $className,
                ...$methodNames,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
     * @param list<mixed>  $constructorArguments
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedTestProxy(string $className, array $constructorArguments): void
    {
        $this->dispatcher->dispatch(
            new Test\TestProxyCreated(
                $this->telemetryInfo(),
                $className,
<<<<<<< HEAD
                Exporter::export($constructorArguments, $this->exportObjects),
=======
                Exporter::export($constructorArguments),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedStub(string $className): void
    {
        $this->dispatcher->dispatch(
            new Test\TestStubCreated(
                $this->telemetryInfo(),
                $className,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<class-string> $interfaces
=======
     * @param list<class-string> $interfaces
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testCreatedStubForIntersectionOfInterfaces(array $interfaces): void
    {
        $this->dispatcher->dispatch(
            new Test\TestStubForIntersectionOfInterfacesCreated(
                $this->telemetryInfo(),
                $interfaces,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testErrored(Code\Test $test, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\Errored(
                $this->telemetryInfo(),
                $test,
                $throwable,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testFailed(Code\Test $test, Throwable $throwable, ?ComparisonFailure $comparisonFailure): void
    {
        $this->dispatcher->dispatch(
            new Test\Failed(
                $this->telemetryInfo(),
                $test,
                $throwable,
                $comparisonFailure,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPassed(Code\Test $test): void
    {
        $this->dispatcher->dispatch(
            new Test\Passed(
                $this->telemetryInfo(),
                $test,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testConsideredRisky(Code\Test $test, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\ConsideredRisky(
                $this->telemetryInfo(),
                $test,
                $message,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testMarkedAsIncomplete(Code\Test $test, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\MarkedIncomplete(
                $this->telemetryInfo(),
                $test,
                $throwable,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSkipped(Code\Test $test, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\Skipped(
                $this->telemetryInfo(),
                $test,
                $message,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitDeprecation(Code\Test $test, string $message): void
    {
=======
     * @param non-empty-string $message
     *
     * @throws InvalidArgumentException
     * @throws NoTestCaseObjectOnCallStackException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitDeprecation(?Code\Test $test, string $message): void
    {
        if ($test === null) {
            $test = TestMethodBuilder::fromCallStack();
        }

        if ($test->isTestMethod()) {
            assert($test instanceof TestMethod);

            if ($test->metadata()->isIgnorePhpunitDeprecations()->isNotEmpty()) {
                return;
            }
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->dispatcher->dispatch(
            new Test\PhpunitDeprecationTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testTriggeredPhpDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest): void
=======
    public function testTriggeredPhpDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, IssueTrigger $trigger): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\PhpDeprecationTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
                $ignoredByTest,
<<<<<<< HEAD
=======
                $trigger,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     * @param non-empty-string $stackTrace
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testTriggeredDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest): void
=======
    public function testTriggeredDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, IssueTrigger $trigger, string $stackTrace): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\DeprecationTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
                $ignoredByTest,
<<<<<<< HEAD
=======
                $trigger,
                $stackTrace,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredError(Code\Test $test, string $message, string $file, int $line, bool $suppressed): void
    {
        $this->dispatcher->dispatch(
            new Test\ErrorTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredNotice(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void
    {
        $this->dispatcher->dispatch(
            new Test\NoticeTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpNotice(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void
    {
        $this->dispatcher->dispatch(
            new Test\PhpNoticeTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredWarning(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void
    {
        $this->dispatcher->dispatch(
            new Test\WarningTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpWarning(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void
    {
        $this->dispatcher->dispatch(
            new Test\PhpWarningTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
                $file,
                $line,
                $suppressed,
                $ignoredByBaseline,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitError(Code\Test $test, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\PhpunitErrorTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testTriggeredPhpunitWarning(Code\Test $test, string $message): void
    {
        $this->dispatcher->dispatch(
            new Test\PhpunitWarningTriggered(
                $this->telemetryInfo(),
                $test,
                $message,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $output
=======
     * @param non-empty-string $output
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testPrintedUnexpectedOutput(string $output): void
    {
        $this->dispatcher->dispatch(
            new Test\PrintedUnexpectedOutput(
                $this->telemetryInfo(),
                $output,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testFinished(Code\Test $test, int $numberOfAssertionsPerformed): void
    {
        $this->dispatcher->dispatch(
            new Test\Finished(
                $this->telemetryInfo(),
                $test,
                $numberOfAssertionsPerformed,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testPostConditionCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function postConditionCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\PostConditionCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testPostConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function postConditionErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\PostConditionErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function postConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\PostConditionFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testAfterTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function afterTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\AfterTestMethodCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testAfterTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function afterTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\AfterTestMethodErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function afterTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\AfterTestMethodFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testAfterLastTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
=======
    public function afterLastTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\AfterLastTestMethodCalled(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
            ),
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
=======
     * @param class-string $testClassName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testAfterLastTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
=======
    public function afterLastTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void
    {
        $this->dispatcher->dispatch(
            new Test\AfterLastTestMethodErrored(
                $this->telemetryInfo(),
                $testClassName,
                $calledMethod,
                $throwable,
            ),
        );
    }

    /**
     * @param class-string $testClassName
     *
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function afterLastTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new Test\AfterLastTestMethodFinished(
                $this->telemetryInfo(),
                $testClassName,
                ...$calledMethods,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testSuiteFinished(TestSuite $testSuite): void
    {
        $this->dispatcher->dispatch(
            new TestSuiteFinished(
                $this->telemetryInfo(),
                $testSuite,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testRunnerTriggeredDeprecation(string $message): void
=======
    public function testRunnerTriggeredPhpunitDeprecation(string $message): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new TestRunner\DeprecationTriggered(
                $this->telemetryInfo(),
                $message,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
<<<<<<< HEAD
    public function testRunnerTriggeredWarning(string $message): void
=======
    public function testRunnerTriggeredPhpunitWarning(string $message): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->dispatcher->dispatch(
            new TestRunner\WarningTriggered(
                $this->telemetryInfo(),
                $message,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerEnabledGarbageCollection(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\GarbageCollectionEnabled($this->telemetryInfo()),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionAborted(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ExecutionAborted($this->telemetryInfo()),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerExecutionFinished(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\ExecutionFinished($this->telemetryInfo()),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function testRunnerFinished(): void
    {
        $this->dispatcher->dispatch(
            new TestRunner\Finished($this->telemetryInfo()),
        );
    }

    /**
     * @throws InvalidArgumentException
     * @throws UnknownEventTypeException
     */
    public function applicationFinished(int $shellExitCode): void
    {
        $this->dispatcher->dispatch(
            new Application\Finished(
                $this->telemetryInfo(),
                $shellExitCode,
            ),
        );
    }

    /**
     * @throws InvalidArgumentException
     */
    private function telemetryInfo(): Telemetry\Info
    {
        $current = $this->system->snapshot();

        $info = new Telemetry\Info(
            $current,
            $current->time()->duration($this->startSnapshot->time()),
            $current->memoryUsage()->diff($this->startSnapshot->memoryUsage()),
            $current->time()->duration($this->previousSnapshot->time()),
            $current->memoryUsage()->diff($this->previousSnapshot->memoryUsage()),
        );

        $this->previousSnapshot = $current;

        return $info;
    }
}

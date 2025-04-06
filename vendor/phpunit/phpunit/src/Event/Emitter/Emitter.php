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

use PHPUnit\Event\Code\ClassMethod;
use PHPUnit\Event\Code\ComparisonFailure;
<<<<<<< HEAD
use PHPUnit\Event\Code\Throwable;
use PHPUnit\Event\TestSuite\TestSuite;
use PHPUnit\Framework\Constraint;
use PHPUnit\TextUI\Configuration\Configuration;

/**
=======
use PHPUnit\Event\Code\IssueTrigger\IssueTrigger;
use PHPUnit\Event\Code\Throwable;
use PHPUnit\Event\TestSuite\TestSuite;
use PHPUnit\TextUI\Configuration\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Emitter
{
<<<<<<< HEAD
    /**
     * @deprecated
     */
    public function exportObjects(): void;

    /**
     * @deprecated
     */
    public function exportsObjects(): bool;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function applicationStarted(): void;

    public function testRunnerStarted(): void;

    public function testRunnerConfigured(Configuration $configuration): void;

    public function testRunnerBootstrapFinished(string $filename): void;

    public function testRunnerLoadedExtensionFromPhar(string $filename, string $name, string $version): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param array<string, string> $parameters
=======
     * @param class-string          $className
     * @param array<string, string> $parameters
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testRunnerBootstrappedExtension(string $className, array $parameters): void;

    public function dataProviderMethodCalled(ClassMethod $testMethod, ClassMethod $dataProviderMethod): void;

    public function dataProviderMethodFinished(ClassMethod $testMethod, ClassMethod ...$calledMethods): void;

    public function testSuiteLoaded(TestSuite $testSuite): void;

    public function testSuiteFiltered(TestSuite $testSuite): void;

    public function testSuiteSorted(int $executionOrder, int $executionOrderDefects, bool $resolveDependencies): void;

    public function testRunnerEventFacadeSealed(): void;

    public function testRunnerExecutionStarted(TestSuite $testSuite): void;

    public function testRunnerDisabledGarbageCollection(): void;

    public function testRunnerTriggeredGarbageCollection(): void;

    public function testSuiteSkipped(TestSuite $testSuite, string $message): void;

    public function testSuiteStarted(TestSuite $testSuite): void;

    public function testPreparationStarted(Code\Test $test): void;

    public function testPreparationFailed(Code\Test $test): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
     */
    public function testBeforeFirstTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testBeforeFirstTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testBeforeFirstTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testBeforeTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testBeforeTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testPreConditionCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testPreConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void;
=======
     * @param class-string $testClassName
     */
    public function beforeFirstTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function beforeFirstTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function beforeFirstTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @param class-string $testClassName
     */
    public function beforeTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function beforeTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function beforeTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @param class-string $testClassName
     */
    public function preConditionCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function preConditionErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function preConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function testPrepared(Code\Test $test): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testRegisteredComparator(string $className): void;

    /**
<<<<<<< HEAD
     * @deprecated
     */
    public function testAssertionSucceeded(mixed $value, Constraint\Constraint $constraint, string $message): void;

    /**
     * @deprecated
     */
    public function testAssertionFailed(mixed $value, Constraint\Constraint $constraint, string $message): void;

    /**
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedMockObject(string $className): void;

    /**
<<<<<<< HEAD
     * @psalm-param list<class-string> $interfaces
=======
     * @param list<class-string> $interfaces
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedMockObjectForIntersectionOfInterfaces(array $interfaces): void;

    /**
<<<<<<< HEAD
     * @psalm-param trait-string $traitName
=======
     * @param trait-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedMockObjectForTrait(string $traitName): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedMockObjectForAbstractClass(string $className): void;

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
     */
    public function testCreatedMockObjectFromWsdl(string $wsdlFile, string $originalClassName, string $mockClassName, array $methods, bool $callOriginalConstructor, array $options): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedPartialMockObject(string $className, string ...$methodNames): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
     * @param list<mixed>  $constructorArguments
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedTestProxy(string $className, array $constructorArguments): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedStub(string $className): void;

    /**
<<<<<<< HEAD
     * @psalm-param list<class-string> $interfaces
=======
     * @param list<class-string> $interfaces
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testCreatedStubForIntersectionOfInterfaces(array $interfaces): void;

    public function testErrored(Code\Test $test, Throwable $throwable): void;

    public function testFailed(Code\Test $test, Throwable $throwable, ?ComparisonFailure $comparisonFailure): void;

    public function testPassed(Code\Test $test): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testConsideredRisky(Code\Test $test, string $message): void;

    public function testMarkedAsIncomplete(Code\Test $test, Throwable $throwable): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testSkipped(Code\Test $test, string $message): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
     */
    public function testTriggeredPhpunitDeprecation(Code\Test $test, string $message): void;

    /**
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     */
    public function testTriggeredPhpDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest): void;

    /**
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     */
    public function testTriggeredDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest): void;

    /**
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
=======
     * @param non-empty-string $message
     */
    public function testTriggeredPhpunitDeprecation(?Code\Test $test, string $message): void;

    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     */
    public function testTriggeredPhpDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, IssueTrigger $trigger): void;

    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
     * @param non-empty-string $stackTrace
     */
    public function testTriggeredDeprecation(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline, bool $ignoredByTest, IssueTrigger $trigger, string $stackTrace): void;

    /**
     * @param non-empty-string $message
     * @param non-empty-string $file
     * @param positive-int     $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredError(Code\Test $test, string $message, string $file, int $line, bool $suppressed): void;

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
     */
    public function testTriggeredNotice(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void;

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
     */
    public function testTriggeredPhpNotice(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void;

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
     */
    public function testTriggeredWarning(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void;

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
     */
    public function testTriggeredPhpWarning(Code\Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredPhpunitError(Code\Test $test, string $message): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $message
=======
     * @param non-empty-string $message
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredPhpunitWarning(Code\Test $test, string $message): void;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $output
=======
     * @param non-empty-string $output
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testPrintedUnexpectedOutput(string $output): void;

    public function testFinished(Code\Test $test, int $numberOfAssertionsPerformed): void;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $testClassName
     */
    public function testPostConditionCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testPostConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testAfterTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testAfterTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testAfterLastTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @psalm-param class-string $testClassName
     */
    public function testAfterLastTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    public function testSuiteFinished(TestSuite $testSuite): void;

    public function testRunnerTriggeredDeprecation(string $message): void;

    public function testRunnerTriggeredWarning(string $message): void;
=======
     * @param class-string $testClassName
     */
    public function postConditionCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function postConditionErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function postConditionFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @param class-string $testClassName
     */
    public function afterTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function afterTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function afterTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    /**
     * @param class-string $testClassName
     */
    public function afterLastTestMethodCalled(string $testClassName, ClassMethod $calledMethod): void;

    /**
     * @param class-string $testClassName
     */
    public function afterLastTestMethodErrored(string $testClassName, ClassMethod $calledMethod, Throwable $throwable): void;

    /**
     * @param class-string $testClassName
     */
    public function afterLastTestMethodFinished(string $testClassName, ClassMethod ...$calledMethods): void;

    public function testSuiteFinished(TestSuite $testSuite): void;

    public function testRunnerStartedChildProcess(): void;

    public function testRunnerFinishedChildProcess(string $stdout, string $stderr): void;

    public function testRunnerTriggeredPhpunitDeprecation(string $message): void;

    public function testRunnerTriggeredPhpunitWarning(string $message): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function testRunnerEnabledGarbageCollection(): void;

    public function testRunnerExecutionAborted(): void;

    public function testRunnerExecutionFinished(): void;

    public function testRunnerFinished(): void;

    public function applicationFinished(int $shellExitCode): void;
}

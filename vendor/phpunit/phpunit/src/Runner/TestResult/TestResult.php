<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestRunner\TestResult;

use function count;
<<<<<<< HEAD
=======
use PHPUnit\Event\Test\AfterLastTestMethodErrored;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\Event\Test\BeforeFirstTestMethodErrored;
use PHPUnit\Event\Test\ConsideredRisky;
use PHPUnit\Event\Test\Errored;
use PHPUnit\Event\Test\Failed;
use PHPUnit\Event\Test\MarkedIncomplete;
use PHPUnit\Event\Test\PhpunitDeprecationTriggered;
use PHPUnit\Event\Test\PhpunitErrorTriggered;
use PHPUnit\Event\Test\PhpunitWarningTriggered;
use PHPUnit\Event\Test\Skipped as TestSkipped;
use PHPUnit\Event\TestRunner\DeprecationTriggered as TestRunnerDeprecationTriggered;
use PHPUnit\Event\TestRunner\WarningTriggered as TestRunnerWarningTriggered;
use PHPUnit\Event\TestSuite\Skipped as TestSuiteSkipped;
use PHPUnit\TestRunner\TestResult\Issues\Issue;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestResult
{
    private readonly int $numberOfTests;
    private readonly int $numberOfTestsRun;
    private readonly int $numberOfAssertions;

    /**
     * @psalm-var list<BeforeFirstTestMethodErrored|Errored>
     */
    private readonly array $testErroredEvents;

    /**
     * @psalm-var list<Failed>
     */
    private readonly array $testFailedEvents;

    /**
     * @psalm-var list<MarkedIncomplete>
     */
    private readonly array $testMarkedIncompleteEvents;

    /**
     * @psalm-var list<TestSuiteSkipped>
     */
    private readonly array $testSuiteSkippedEvents;

    /**
     * @psalm-var list<TestSkipped>
     */
    private readonly array $testSkippedEvents;

    /**
     * @psalm-var array<string,list<ConsideredRisky>>
     */
    private readonly array $testConsideredRiskyEvents;

    /**
     * @psalm-var array<string,list<PhpunitDeprecationTriggered>>
     */
    private readonly array $testTriggeredPhpunitDeprecationEvents;

    /**
     * @psalm-var array<string,list<PhpunitErrorTriggered>>
     */
    private readonly array $testTriggeredPhpunitErrorEvents;

    /**
     * @psalm-var array<string,list<PhpunitWarningTriggered>>
     */
    private readonly array $testTriggeredPhpunitWarningEvents;

    /**
     * @psalm-var list<TestRunnerDeprecationTriggered>
     */
    private readonly array $testRunnerTriggeredDeprecationEvents;

    /**
     * @psalm-var list<TestRunnerWarningTriggered>
     */
    private readonly array $testRunnerTriggeredWarningEvents;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $errors;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $deprecations;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $notices;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $warnings;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $phpDeprecations;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $phpNotices;

    /**
     * @psalm-var list<Issue>
     */
    private readonly array $phpWarnings;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $numberOfIssuesIgnoredByBaseline;

    /**
     * @psalm-param list<BeforeFirstTestMethodErrored|Errored> $testErroredEvents
     * @psalm-param list<Failed> $testFailedEvents
     * @psalm-param array<string,list<ConsideredRisky>> $testConsideredRiskyEvents
     * @psalm-param list<TestSuiteSkipped> $testSuiteSkippedEvents
     * @psalm-param list<TestSkipped> $testSkippedEvents
     * @psalm-param list<MarkedIncomplete> $testMarkedIncompleteEvents
     * @psalm-param array<string,list<PhpunitDeprecationTriggered>> $testTriggeredPhpunitDeprecationEvents
     * @psalm-param array<string,list<PhpunitErrorTriggered>> $testTriggeredPhpunitErrorEvents
     * @psalm-param array<string,list<PhpunitWarningTriggered>> $testTriggeredPhpunitWarningEvents
     * @psalm-param list<TestRunnerDeprecationTriggered> $testRunnerTriggeredDeprecationEvents
     * @psalm-param list<TestRunnerWarningTriggered> $testRunnerTriggeredWarningEvents
     * @psalm-param list<Issue> $errors
     * @psalm-param list<Issue> $deprecations
     * @psalm-param list<Issue> $notices
     * @psalm-param list<Issue> $warnings
     * @psalm-param list<Issue> $phpDeprecations
     * @psalm-param list<Issue> $phpNotices
     * @psalm-param list<Issue> $phpWarnings
     * @psalm-param non-negative-int $numberOfIssuesIgnoredByBaseline
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestResult
{
    private int $numberOfTests;
    private int $numberOfTestsRun;
    private int $numberOfAssertions;

    /**
     * @var list<AfterLastTestMethodErrored|BeforeFirstTestMethodErrored|Errored>
     */
    private array $testErroredEvents;

    /**
     * @var list<Failed>
     */
    private array $testFailedEvents;

    /**
     * @var list<MarkedIncomplete>
     */
    private array $testMarkedIncompleteEvents;

    /**
     * @var list<TestSuiteSkipped>
     */
    private array $testSuiteSkippedEvents;

    /**
     * @var list<TestSkipped>
     */
    private array $testSkippedEvents;

    /**
     * @var array<string,list<ConsideredRisky>>
     */
    private array $testConsideredRiskyEvents;

    /**
     * @var array<string,list<PhpunitDeprecationTriggered>>
     */
    private array $testTriggeredPhpunitDeprecationEvents;

    /**
     * @var array<string,list<PhpunitErrorTriggered>>
     */
    private array $testTriggeredPhpunitErrorEvents;

    /**
     * @var array<string,list<PhpunitWarningTriggered>>
     */
    private array $testTriggeredPhpunitWarningEvents;

    /**
     * @var list<TestRunnerDeprecationTriggered>
     */
    private array $testRunnerTriggeredDeprecationEvents;

    /**
     * @var list<TestRunnerWarningTriggered>
     */
    private array $testRunnerTriggeredWarningEvents;

    /**
     * @var list<Issue>
     */
    private array $errors;

    /**
     * @var list<Issue>
     */
    private array $deprecations;

    /**
     * @var list<Issue>
     */
    private array $notices;

    /**
     * @var list<Issue>
     */
    private array $warnings;

    /**
     * @var list<Issue>
     */
    private array $phpDeprecations;

    /**
     * @var list<Issue>
     */
    private array $phpNotices;

    /**
     * @var list<Issue>
     */
    private array $phpWarnings;

    /**
     * @var non-negative-int
     */
    private int $numberOfIssuesIgnoredByBaseline;

    /**
     * @param list<AfterLastTestMethodErrored|BeforeFirstTestMethodErrored|Errored> $testErroredEvents
     * @param list<Failed>                                                          $testFailedEvents
     * @param array<string,list<ConsideredRisky>>                                   $testConsideredRiskyEvents
     * @param list<TestSuiteSkipped>                                                $testSuiteSkippedEvents
     * @param list<TestSkipped>                                                     $testSkippedEvents
     * @param list<MarkedIncomplete>                                                $testMarkedIncompleteEvents
     * @param array<string,list<PhpunitDeprecationTriggered>>                       $testTriggeredPhpunitDeprecationEvents
     * @param array<string,list<PhpunitErrorTriggered>>                             $testTriggeredPhpunitErrorEvents
     * @param array<string,list<PhpunitWarningTriggered>>                           $testTriggeredPhpunitWarningEvents
     * @param list<TestRunnerDeprecationTriggered>                                  $testRunnerTriggeredDeprecationEvents
     * @param list<TestRunnerWarningTriggered>                                      $testRunnerTriggeredWarningEvents
     * @param list<Issue>                                                           $errors
     * @param list<Issue>                                                           $deprecations
     * @param list<Issue>                                                           $notices
     * @param list<Issue>                                                           $warnings
     * @param list<Issue>                                                           $phpDeprecations
     * @param list<Issue>                                                           $phpNotices
     * @param list<Issue>                                                           $phpWarnings
     * @param non-negative-int                                                      $numberOfIssuesIgnoredByBaseline
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(int $numberOfTests, int $numberOfTestsRun, int $numberOfAssertions, array $testErroredEvents, array $testFailedEvents, array $testConsideredRiskyEvents, array $testSuiteSkippedEvents, array $testSkippedEvents, array $testMarkedIncompleteEvents, array $testTriggeredPhpunitDeprecationEvents, array $testTriggeredPhpunitErrorEvents, array $testTriggeredPhpunitWarningEvents, array $testRunnerTriggeredDeprecationEvents, array $testRunnerTriggeredWarningEvents, array $errors, array $deprecations, array $notices, array $warnings, array $phpDeprecations, array $phpNotices, array $phpWarnings, int $numberOfIssuesIgnoredByBaseline)
    {
        $this->numberOfTests                         = $numberOfTests;
        $this->numberOfTestsRun                      = $numberOfTestsRun;
        $this->numberOfAssertions                    = $numberOfAssertions;
        $this->testErroredEvents                     = $testErroredEvents;
        $this->testFailedEvents                      = $testFailedEvents;
        $this->testConsideredRiskyEvents             = $testConsideredRiskyEvents;
        $this->testSuiteSkippedEvents                = $testSuiteSkippedEvents;
        $this->testSkippedEvents                     = $testSkippedEvents;
        $this->testMarkedIncompleteEvents            = $testMarkedIncompleteEvents;
        $this->testTriggeredPhpunitDeprecationEvents = $testTriggeredPhpunitDeprecationEvents;
        $this->testTriggeredPhpunitErrorEvents       = $testTriggeredPhpunitErrorEvents;
        $this->testTriggeredPhpunitWarningEvents     = $testTriggeredPhpunitWarningEvents;
        $this->testRunnerTriggeredDeprecationEvents  = $testRunnerTriggeredDeprecationEvents;
        $this->testRunnerTriggeredWarningEvents      = $testRunnerTriggeredWarningEvents;
        $this->errors                                = $errors;
        $this->deprecations                          = $deprecations;
        $this->notices                               = $notices;
        $this->warnings                              = $warnings;
        $this->phpDeprecations                       = $phpDeprecations;
        $this->phpNotices                            = $phpNotices;
        $this->phpWarnings                           = $phpWarnings;
        $this->numberOfIssuesIgnoredByBaseline       = $numberOfIssuesIgnoredByBaseline;
    }

    public function numberOfTestsRun(): int
    {
        return $this->numberOfTestsRun;
    }

    public function numberOfAssertions(): int
    {
        return $this->numberOfAssertions;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<BeforeFirstTestMethodErrored|Errored>
=======
     * @return list<AfterLastTestMethodErrored|BeforeFirstTestMethodErrored|Errored>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testErroredEvents(): array
    {
        return $this->testErroredEvents;
    }

    public function numberOfTestErroredEvents(): int
    {
        return count($this->testErroredEvents);
    }

    public function hasTestErroredEvents(): bool
    {
        return $this->numberOfTestErroredEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Failed>
=======
     * @return list<Failed>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testFailedEvents(): array
    {
        return $this->testFailedEvents;
    }

    public function numberOfTestFailedEvents(): int
    {
        return count($this->testFailedEvents);
    }

    public function hasTestFailedEvents(): bool
    {
        return $this->numberOfTestFailedEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<ConsideredRisky>>
=======
     * @return array<string,list<ConsideredRisky>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testConsideredRiskyEvents(): array
    {
        return $this->testConsideredRiskyEvents;
    }

    public function numberOfTestsWithTestConsideredRiskyEvents(): int
    {
        return count($this->testConsideredRiskyEvents);
    }

    public function hasTestConsideredRiskyEvents(): bool
    {
        return $this->numberOfTestsWithTestConsideredRiskyEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<TestSuiteSkipped>
=======
     * @return list<TestSuiteSkipped>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testSuiteSkippedEvents(): array
    {
        return $this->testSuiteSkippedEvents;
    }

    public function numberOfTestSuiteSkippedEvents(): int
    {
        return count($this->testSuiteSkippedEvents);
    }

    public function hasTestSuiteSkippedEvents(): bool
    {
        return $this->numberOfTestSuiteSkippedEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<TestSkipped>
=======
     * @return list<TestSkipped>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testSkippedEvents(): array
    {
        return $this->testSkippedEvents;
    }

    public function numberOfTestSkippedEvents(): int
    {
        return count($this->testSkippedEvents);
    }

    public function hasTestSkippedEvents(): bool
    {
        return $this->numberOfTestSkippedEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<MarkedIncomplete>
=======
     * @return list<MarkedIncomplete>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testMarkedIncompleteEvents(): array
    {
        return $this->testMarkedIncompleteEvents;
    }

    public function numberOfTestMarkedIncompleteEvents(): int
    {
        return count($this->testMarkedIncompleteEvents);
    }

    public function hasTestMarkedIncompleteEvents(): bool
    {
        return $this->numberOfTestMarkedIncompleteEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<PhpunitDeprecationTriggered>>
=======
     * @return array<string,list<PhpunitDeprecationTriggered>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredPhpunitDeprecationEvents(): array
    {
        return $this->testTriggeredPhpunitDeprecationEvents;
    }

    public function numberOfTestsWithTestTriggeredPhpunitDeprecationEvents(): int
    {
        return count($this->testTriggeredPhpunitDeprecationEvents);
    }

    public function hasTestTriggeredPhpunitDeprecationEvents(): bool
    {
        return $this->numberOfTestsWithTestTriggeredPhpunitDeprecationEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<PhpunitErrorTriggered>>
=======
     * @return array<string,list<PhpunitErrorTriggered>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredPhpunitErrorEvents(): array
    {
        return $this->testTriggeredPhpunitErrorEvents;
    }

    public function numberOfTestsWithTestTriggeredPhpunitErrorEvents(): int
    {
        return count($this->testTriggeredPhpunitErrorEvents);
    }

    public function hasTestTriggeredPhpunitErrorEvents(): bool
    {
        return $this->numberOfTestsWithTestTriggeredPhpunitErrorEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,list<PhpunitWarningTriggered>>
=======
     * @return array<string,list<PhpunitWarningTriggered>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testTriggeredPhpunitWarningEvents(): array
    {
        return $this->testTriggeredPhpunitWarningEvents;
    }

    public function numberOfTestsWithTestTriggeredPhpunitWarningEvents(): int
    {
        return count($this->testTriggeredPhpunitWarningEvents);
    }

    public function hasTestTriggeredPhpunitWarningEvents(): bool
    {
        return $this->numberOfTestsWithTestTriggeredPhpunitWarningEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<TestRunnerDeprecationTriggered>
=======
     * @return list<TestRunnerDeprecationTriggered>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testRunnerTriggeredDeprecationEvents(): array
    {
        return $this->testRunnerTriggeredDeprecationEvents;
    }

    public function numberOfTestRunnerTriggeredDeprecationEvents(): int
    {
        return count($this->testRunnerTriggeredDeprecationEvents);
    }

    public function hasTestRunnerTriggeredDeprecationEvents(): bool
    {
        return $this->numberOfTestRunnerTriggeredDeprecationEvents() > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<TestRunnerWarningTriggered>
=======
     * @return list<TestRunnerWarningTriggered>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testRunnerTriggeredWarningEvents(): array
    {
        return $this->testRunnerTriggeredWarningEvents;
    }

    public function numberOfTestRunnerTriggeredWarningEvents(): int
    {
        return count($this->testRunnerTriggeredWarningEvents);
    }

    public function hasTestRunnerTriggeredWarningEvents(): bool
    {
        return $this->numberOfTestRunnerTriggeredWarningEvents() > 0;
    }

    public function wasSuccessful(): bool
    {
        return $this->wasSuccessfulIgnoringPhpunitWarnings() &&
               !$this->hasTestTriggeredPhpunitErrorEvents() &&
               !$this->hasTestRunnerTriggeredWarningEvents() &&
               !$this->hasTestTriggeredPhpunitWarningEvents();
    }

    public function wasSuccessfulIgnoringPhpunitWarnings(): bool
    {
        return !$this->hasTestErroredEvents() &&
               !$this->hasTestFailedEvents();
    }

    public function wasSuccessfulAndNoTestHasIssues(): bool
    {
        return $this->wasSuccessful() && !$this->hasTestsWithIssues();
    }

    public function hasTestsWithIssues(): bool
    {
        return $this->hasRiskyTests() ||
               $this->hasIncompleteTests() ||
               $this->hasDeprecations() ||
               !empty($this->errors) ||
               $this->hasNotices() ||
               $this->hasWarnings();
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function deprecations(): array
    {
        return $this->deprecations;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function notices(): array
    {
        return $this->notices;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function warnings(): array
    {
        return $this->warnings;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function phpDeprecations(): array
    {
        return $this->phpDeprecations;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function phpNotices(): array
    {
        return $this->phpNotices;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Issue>
=======
     * @return list<Issue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function phpWarnings(): array
    {
        return $this->phpWarnings;
    }

    public function hasTests(): bool
    {
        return $this->numberOfTests > 0;
    }

    public function hasErrors(): bool
    {
        return $this->numberOfErrors() > 0;
    }

    public function numberOfErrors(): int
    {
        return $this->numberOfTestErroredEvents() +
               count($this->errors) +
               $this->numberOfTestsWithTestTriggeredPhpunitErrorEvents();
    }

    public function hasDeprecations(): bool
    {
        return $this->numberOfDeprecations() > 0;
    }

<<<<<<< HEAD
=======
    public function hasPhpOrUserDeprecations(): bool
    {
        return $this->numberOfPhpOrUserDeprecations() > 0;
    }

    public function numberOfPhpOrUserDeprecations(): int
    {
        return count($this->deprecations) +
               count($this->phpDeprecations);
    }

    public function hasPhpunitDeprecations(): bool
    {
        return $this->numberOfPhpunitDeprecations() > 0;
    }

    public function numberOfPhpunitDeprecations(): int
    {
        return count($this->testTriggeredPhpunitDeprecationEvents) +
               count($this->testRunnerTriggeredDeprecationEvents);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function numberOfDeprecations(): int
    {
        return count($this->deprecations) +
               count($this->phpDeprecations) +
               count($this->testTriggeredPhpunitDeprecationEvents) +
               count($this->testRunnerTriggeredDeprecationEvents);
    }

    public function hasNotices(): bool
    {
        return $this->numberOfNotices() > 0;
    }

    public function numberOfNotices(): int
    {
        return count($this->notices) +
               count($this->phpNotices);
    }

    public function hasWarnings(): bool
    {
        return $this->numberOfWarnings() > 0;
    }

    public function numberOfWarnings(): int
    {
        return count($this->warnings) +
               count($this->phpWarnings) +
               count($this->testTriggeredPhpunitWarningEvents) +
               count($this->testRunnerTriggeredWarningEvents);
    }

    public function hasIncompleteTests(): bool
    {
        return !empty($this->testMarkedIncompleteEvents);
    }

    public function hasRiskyTests(): bool
    {
        return !empty($this->testConsideredRiskyEvents);
    }

    public function hasSkippedTests(): bool
    {
        return !empty($this->testSkippedEvents);
    }

    public function hasIssuesIgnoredByBaseline(): bool
    {
        return $this->numberOfIssuesIgnoredByBaseline > 0;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function numberOfIssuesIgnoredByBaseline(): int
    {
        return $this->numberOfIssuesIgnoredByBaseline;
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Configuration
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Configuration
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public const COLOR_NEVER   = 'never';
    public const COLOR_AUTO    = 'auto';
    public const COLOR_ALWAYS  = 'always';
    public const COLOR_DEFAULT = self::COLOR_NEVER;

    /**
<<<<<<< HEAD
     * @psalm-var list<non-empty-string>
     */
    private readonly array $cliArguments;
    private readonly ?string $configurationFile;
    private readonly ?string $bootstrap;
    private readonly bool $cacheResult;
    private readonly ?string $cacheDirectory;
    private readonly ?string $coverageCacheDirectory;
    private readonly Source $source;
    private readonly bool $pathCoverage;
    private readonly ?string $coverageClover;
    private readonly ?string $coverageCobertura;
    private readonly ?string $coverageCrap4j;
    private readonly int $coverageCrap4jThreshold;
    private readonly ?string $coverageHtml;
    private readonly int $coverageHtmlLowUpperBound;
    private readonly int $coverageHtmlHighLowerBound;
    private readonly string $coverageHtmlColorSuccessLow;
    private readonly string $coverageHtmlColorSuccessMedium;
    private readonly string $coverageHtmlColorSuccessHigh;
    private readonly string $coverageHtmlColorWarning;
    private readonly string $coverageHtmlColorDanger;
    private readonly ?string $coverageHtmlCustomCssFile;
    private readonly ?string $coveragePhp;
    private readonly ?string $coverageText;
    private readonly bool $coverageTextShowUncoveredFiles;
    private readonly bool $coverageTextShowOnlySummary;
    private readonly ?string $coverageXml;
    private readonly string $testResultCacheFile;
    private readonly bool $ignoreDeprecatedCodeUnitsFromCodeCoverage;
    private readonly bool $disableCodeCoverageIgnore;
    private readonly bool $failOnDeprecation;
    private readonly bool $failOnEmptyTestSuite;
    private readonly bool $failOnIncomplete;
    private readonly bool $failOnNotice;
    private readonly bool $failOnRisky;
    private readonly bool $failOnSkipped;
    private readonly bool $failOnWarning;
    private readonly bool $stopOnDefect;
    private readonly bool $stopOnDeprecation;
    private readonly bool $stopOnError;
    private readonly bool $stopOnFailure;
    private readonly bool $stopOnIncomplete;
    private readonly bool $stopOnNotice;
    private readonly bool $stopOnRisky;
    private readonly bool $stopOnSkipped;
    private readonly bool $stopOnWarning;
    private readonly bool $outputToStandardErrorStream;
    private readonly int $columns;
    private readonly bool $noExtensions;

    /**
     * @psalm-var ?non-empty-string
     */
    private readonly ?string $pharExtensionDirectory;

    /**
     * @psalm-var list<array{className: class-string, parameters: array<string, string>}>
     */
    private readonly array $extensionBootstrappers;
    private readonly bool $backupGlobals;
    private readonly bool $backupStaticProperties;
    private readonly bool $beStrictAboutChangesToGlobalState;
    private readonly bool $colors;
    private readonly bool $processIsolation;
    private readonly bool $enforceTimeLimit;
    private readonly int $defaultTimeLimit;
    private readonly int $timeoutForSmallTests;
    private readonly int $timeoutForMediumTests;
    private readonly int $timeoutForLargeTests;
    private readonly bool $reportUselessTests;
    private readonly bool $strictCoverage;
    private readonly bool $disallowTestOutput;
    private readonly bool $displayDetailsOnIncompleteTests;
    private readonly bool $displayDetailsOnSkippedTests;
    private readonly bool $displayDetailsOnTestsThatTriggerDeprecations;
    private readonly bool $displayDetailsOnTestsThatTriggerErrors;
    private readonly bool $displayDetailsOnTestsThatTriggerNotices;
    private readonly bool $displayDetailsOnTestsThatTriggerWarnings;
    private readonly bool $reverseDefectList;
    private readonly bool $requireCoverageMetadata;
    private readonly bool $registerMockObjectsFromTestArgumentsRecursively;
    private readonly bool $noProgress;
    private readonly bool $noResults;
    private readonly bool $noOutput;
    private readonly int $executionOrder;
    private readonly int $executionOrderDefects;
    private readonly bool $resolveDependencies;
    private readonly ?string $logfileTeamcity;
    private readonly ?string $logfileJunit;
    private readonly ?string $logfileTestdoxHtml;
    private readonly ?string $logfileTestdoxText;
    private readonly ?string $logEventsText;
    private readonly ?string $logEventsVerboseText;
    private readonly ?array $testsCovering;
    private readonly ?array $testsUsing;
    private readonly bool $teamCityOutput;
    private readonly bool $testDoxOutput;
    private readonly ?string $filter;
    private readonly ?array $groups;
    private readonly ?array $excludeGroups;
    private readonly int $randomOrderSeed;
    private readonly bool $includeUncoveredFiles;
    private readonly TestSuiteCollection $testSuite;
    private readonly string $includeTestSuite;
    private readonly string $excludeTestSuite;
    private readonly ?string $defaultTestSuite;

    /**
     * @psalm-var non-empty-list<non-empty-string>
     */
    private readonly array $testSuffixes;
    private readonly Php $php;
    private readonly bool $controlGarbageCollector;
    private readonly int $numberOfTestsBeforeGarbageCollection;
    private readonly ?string $generateBaseline;
    private readonly bool $debug;

    /**
     * @psalm-param list<non-empty-string> $cliArguments
     * @psalm-param ?non-empty-string $pharExtensionDirectory
     * @psalm-param non-empty-list<non-empty-string> $testSuffixes
     * @psalm-param list<array{className: class-string, parameters: array<string, string>}> $extensionBootstrappers
     */
    public function __construct(array $cliArguments, ?string $configurationFile, ?string $bootstrap, bool $cacheResult, ?string $cacheDirectory, ?string $coverageCacheDirectory, Source $source, string $testResultCacheFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4j, int $coverageCrap4jThreshold, ?string $coverageHtml, int $coverageHtmlLowUpperBound, int $coverageHtmlHighLowerBound, string $coverageHtmlColorSuccessLow, string $coverageHtmlColorSuccessMedium, string $coverageHtmlColorSuccessHigh, string $coverageHtmlColorWarning, string $coverageHtmlColorDanger, ?string $coverageHtmlCustomCssFile, ?string $coveragePhp, ?string $coverageText, bool $coverageTextShowUncoveredFiles, bool $coverageTextShowOnlySummary, ?string $coverageXml, bool $pathCoverage, bool $ignoreDeprecatedCodeUnitsFromCodeCoverage, bool $disableCodeCoverageIgnore, bool $failOnDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnDeprecation, bool $stopOnError, bool $stopOnFailure, bool $stopOnIncomplete, bool $stopOnNotice, bool $stopOnRisky, bool $stopOnSkipped, bool $stopOnWarning, bool $outputToStandardErrorStream, int|string $columns, bool $noExtensions, ?string $pharExtensionDirectory, array $extensionBootstrappers, bool $backupGlobals, bool $backupStaticProperties, bool $beStrictAboutChangesToGlobalState, bool $colors, bool $processIsolation, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, bool $reportUselessTests, bool $strictCoverage, bool $disallowTestOutput, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $reverseDefectList, bool $requireCoverageMetadata, bool $registerMockObjectsFromTestArgumentsRecursively, bool $noProgress, bool $noResults, bool $noOutput, int $executionOrder, int $executionOrderDefects, bool $resolveDependencies, ?string $logfileTeamcity, ?string $logfileJunit, ?string $logfileTestdoxHtml, ?string $logfileTestdoxText, ?string $logEventsText, ?string $logEventsVerboseText, bool $teamCityOutput, bool $testDoxOutput, ?array $testsCovering, ?array $testsUsing, ?string $filter, ?array $groups, ?array $excludeGroups, int $randomOrderSeed, bool $includeUncoveredFiles, TestSuiteCollection $testSuite, string $includeTestSuite, string $excludeTestSuite, ?string $defaultTestSuite, array $testSuffixes, Php $php, bool $controlGarbageCollector, int $numberOfTestsBeforeGarbageCollection, ?string $generateBaseline, bool $debug)
    {
        $this->cliArguments                                    = $cliArguments;
        $this->configurationFile                               = $configurationFile;
        $this->bootstrap                                       = $bootstrap;
        $this->cacheResult                                     = $cacheResult;
        $this->cacheDirectory                                  = $cacheDirectory;
        $this->coverageCacheDirectory                          = $coverageCacheDirectory;
        $this->source                                          = $source;
        $this->testResultCacheFile                             = $testResultCacheFile;
        $this->coverageClover                                  = $coverageClover;
        $this->coverageCobertura                               = $coverageCobertura;
        $this->coverageCrap4j                                  = $coverageCrap4j;
        $this->coverageCrap4jThreshold                         = $coverageCrap4jThreshold;
        $this->coverageHtml                                    = $coverageHtml;
        $this->coverageHtmlLowUpperBound                       = $coverageHtmlLowUpperBound;
        $this->coverageHtmlHighLowerBound                      = $coverageHtmlHighLowerBound;
        $this->coverageHtmlColorSuccessLow                     = $coverageHtmlColorSuccessLow;
        $this->coverageHtmlColorSuccessMedium                  = $coverageHtmlColorSuccessMedium;
        $this->coverageHtmlColorSuccessHigh                    = $coverageHtmlColorSuccessHigh;
        $this->coverageHtmlColorWarning                        = $coverageHtmlColorWarning;
        $this->coverageHtmlColorDanger                         = $coverageHtmlColorDanger;
        $this->coverageHtmlCustomCssFile                       = $coverageHtmlCustomCssFile;
        $this->coveragePhp                                     = $coveragePhp;
        $this->coverageText                                    = $coverageText;
        $this->coverageTextShowUncoveredFiles                  = $coverageTextShowUncoveredFiles;
        $this->coverageTextShowOnlySummary                     = $coverageTextShowOnlySummary;
        $this->coverageXml                                     = $coverageXml;
        $this->pathCoverage                                    = $pathCoverage;
        $this->ignoreDeprecatedCodeUnitsFromCodeCoverage       = $ignoreDeprecatedCodeUnitsFromCodeCoverage;
        $this->disableCodeCoverageIgnore                       = $disableCodeCoverageIgnore;
        $this->failOnDeprecation                               = $failOnDeprecation;
        $this->failOnEmptyTestSuite                            = $failOnEmptyTestSuite;
        $this->failOnIncomplete                                = $failOnIncomplete;
        $this->failOnNotice                                    = $failOnNotice;
        $this->failOnRisky                                     = $failOnRisky;
        $this->failOnSkipped                                   = $failOnSkipped;
        $this->failOnWarning                                   = $failOnWarning;
        $this->stopOnDefect                                    = $stopOnDefect;
        $this->stopOnDeprecation                               = $stopOnDeprecation;
        $this->stopOnError                                     = $stopOnError;
        $this->stopOnFailure                                   = $stopOnFailure;
        $this->stopOnIncomplete                                = $stopOnIncomplete;
        $this->stopOnNotice                                    = $stopOnNotice;
        $this->stopOnRisky                                     = $stopOnRisky;
        $this->stopOnSkipped                                   = $stopOnSkipped;
        $this->stopOnWarning                                   = $stopOnWarning;
        $this->outputToStandardErrorStream                     = $outputToStandardErrorStream;
        $this->columns                                         = $columns;
        $this->noExtensions                                    = $noExtensions;
        $this->pharExtensionDirectory                          = $pharExtensionDirectory;
        $this->extensionBootstrappers                          = $extensionBootstrappers;
        $this->backupGlobals                                   = $backupGlobals;
        $this->backupStaticProperties                          = $backupStaticProperties;
        $this->beStrictAboutChangesToGlobalState               = $beStrictAboutChangesToGlobalState;
        $this->colors                                          = $colors;
        $this->processIsolation                                = $processIsolation;
        $this->enforceTimeLimit                                = $enforceTimeLimit;
        $this->defaultTimeLimit                                = $defaultTimeLimit;
        $this->timeoutForSmallTests                            = $timeoutForSmallTests;
        $this->timeoutForMediumTests                           = $timeoutForMediumTests;
        $this->timeoutForLargeTests                            = $timeoutForLargeTests;
        $this->reportUselessTests                              = $reportUselessTests;
        $this->strictCoverage                                  = $strictCoverage;
        $this->disallowTestOutput                              = $disallowTestOutput;
        $this->displayDetailsOnIncompleteTests                 = $displayDetailsOnIncompleteTests;
        $this->displayDetailsOnSkippedTests                    = $displayDetailsOnSkippedTests;
        $this->displayDetailsOnTestsThatTriggerDeprecations    = $displayDetailsOnTestsThatTriggerDeprecations;
        $this->displayDetailsOnTestsThatTriggerErrors          = $displayDetailsOnTestsThatTriggerErrors;
        $this->displayDetailsOnTestsThatTriggerNotices         = $displayDetailsOnTestsThatTriggerNotices;
        $this->displayDetailsOnTestsThatTriggerWarnings        = $displayDetailsOnTestsThatTriggerWarnings;
        $this->reverseDefectList                               = $reverseDefectList;
        $this->requireCoverageMetadata                         = $requireCoverageMetadata;
        $this->registerMockObjectsFromTestArgumentsRecursively = $registerMockObjectsFromTestArgumentsRecursively;
        $this->noProgress                                      = $noProgress;
        $this->noResults                                       = $noResults;
        $this->noOutput                                        = $noOutput;
        $this->executionOrder                                  = $executionOrder;
        $this->executionOrderDefects                           = $executionOrderDefects;
        $this->resolveDependencies                             = $resolveDependencies;
        $this->logfileTeamcity                                 = $logfileTeamcity;
        $this->logfileJunit                                    = $logfileJunit;
        $this->logfileTestdoxHtml                              = $logfileTestdoxHtml;
        $this->logfileTestdoxText                              = $logfileTestdoxText;
        $this->logEventsText                                   = $logEventsText;
        $this->logEventsVerboseText                            = $logEventsVerboseText;
        $this->teamCityOutput                                  = $teamCityOutput;
        $this->testDoxOutput                                   = $testDoxOutput;
        $this->testsCovering                                   = $testsCovering;
        $this->testsUsing                                      = $testsUsing;
        $this->filter                                          = $filter;
        $this->groups                                          = $groups;
        $this->excludeGroups                                   = $excludeGroups;
        $this->randomOrderSeed                                 = $randomOrderSeed;
        $this->includeUncoveredFiles                           = $includeUncoveredFiles;
        $this->testSuite                                       = $testSuite;
        $this->includeTestSuite                                = $includeTestSuite;
        $this->excludeTestSuite                                = $excludeTestSuite;
        $this->defaultTestSuite                                = $defaultTestSuite;
        $this->testSuffixes                                    = $testSuffixes;
        $this->php                                             = $php;
        $this->controlGarbageCollector                         = $controlGarbageCollector;
        $this->numberOfTestsBeforeGarbageCollection            = $numberOfTestsBeforeGarbageCollection;
        $this->generateBaseline                                = $generateBaseline;
        $this->debug                                           = $debug;
    }

    /**
     * @psalm-assert-if-true !empty $this->cliArguments
=======
     * @var list<non-empty-string>
     */
    private array $cliArguments;
    private ?string $configurationFile;
    private ?string $bootstrap;
    private bool $cacheResult;
    private ?string $cacheDirectory;
    private ?string $coverageCacheDirectory;
    private Source $source;
    private bool $pathCoverage;
    private ?string $coverageClover;
    private ?string $coverageCobertura;
    private ?string $coverageCrap4j;
    private int $coverageCrap4jThreshold;
    private ?string $coverageHtml;
    private int $coverageHtmlLowUpperBound;
    private int $coverageHtmlHighLowerBound;
    private string $coverageHtmlColorSuccessLow;
    private string $coverageHtmlColorSuccessMedium;
    private string $coverageHtmlColorSuccessHigh;
    private string $coverageHtmlColorWarning;
    private string $coverageHtmlColorDanger;
    private ?string $coverageHtmlCustomCssFile;
    private ?string $coveragePhp;
    private ?string $coverageText;
    private bool $coverageTextShowUncoveredFiles;
    private bool $coverageTextShowOnlySummary;
    private ?string $coverageXml;
    private string $testResultCacheFile;
    private bool $ignoreDeprecatedCodeUnitsFromCodeCoverage;
    private bool $disableCodeCoverageIgnore;
    private bool $failOnDeprecation;
    private bool $failOnPhpunitDeprecation;
    private bool $failOnEmptyTestSuite;
    private bool $failOnIncomplete;
    private bool $failOnNotice;
    private bool $failOnRisky;
    private bool $failOnSkipped;
    private bool $failOnWarning;
    private bool $stopOnDefect;
    private bool $stopOnDeprecation;
    private ?string $specificDeprecationToStopOn;
    private bool $stopOnError;
    private bool $stopOnFailure;
    private bool $stopOnIncomplete;
    private bool $stopOnNotice;
    private bool $stopOnRisky;
    private bool $stopOnSkipped;
    private bool $stopOnWarning;
    private bool $outputToStandardErrorStream;
    private int $columns;
    private bool $noExtensions;

    /**
     * @var ?non-empty-string
     */
    private ?string $pharExtensionDirectory;

    /**
     * @var list<array{className: non-empty-string, parameters: array<string, string>}>
     */
    private array $extensionBootstrappers;
    private bool $backupGlobals;
    private bool $backupStaticProperties;
    private bool $beStrictAboutChangesToGlobalState;
    private bool $colors;
    private bool $processIsolation;
    private bool $enforceTimeLimit;
    private int $defaultTimeLimit;
    private int $timeoutForSmallTests;
    private int $timeoutForMediumTests;
    private int $timeoutForLargeTests;
    private bool $reportUselessTests;
    private bool $strictCoverage;
    private bool $disallowTestOutput;
    private bool $displayDetailsOnIncompleteTests;
    private bool $displayDetailsOnSkippedTests;
    private bool $displayDetailsOnTestsThatTriggerDeprecations;
    private bool $displayDetailsOnPhpunitDeprecations;
    private bool $displayDetailsOnTestsThatTriggerErrors;
    private bool $displayDetailsOnTestsThatTriggerNotices;
    private bool $displayDetailsOnTestsThatTriggerWarnings;
    private bool $reverseDefectList;
    private bool $requireCoverageMetadata;
    private bool $noProgress;
    private bool $noResults;
    private bool $noOutput;
    private int $executionOrder;
    private int $executionOrderDefects;
    private bool $resolveDependencies;
    private ?string $logfileTeamcity;
    private ?string $logfileJunit;
    private ?string $logfileTestdoxHtml;
    private ?string $logfileTestdoxText;
    private ?string $logEventsText;
    private ?string $logEventsVerboseText;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $testsCovering;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $testsUsing;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $testsRequiringPhpExtension;
    private bool $teamCityOutput;
    private bool $testDoxOutput;
    private bool $testDoxOutputSummary;
    private ?string $filter;
    private ?string $excludeFilter;

    /**
     * @var list<non-empty-string>
     */
    private array $groups;

    /**
     * @var list<non-empty-string>
     */
    private array $excludeGroups;
    private int $randomOrderSeed;
    private bool $includeUncoveredFiles;
    private TestSuiteCollection $testSuite;
    private string $includeTestSuite;
    private string $excludeTestSuite;
    private ?string $defaultTestSuite;

    /**
     * @var non-empty-list<non-empty-string>
     */
    private array $testSuffixes;
    private Php $php;
    private bool $controlGarbageCollector;
    private int $numberOfTestsBeforeGarbageCollection;
    private ?string $generateBaseline;
    private bool $debug;

    /**
     * @var non-negative-int
     */
    private int $shortenArraysForExportThreshold;

    /**
     * @param list<non-empty-string>                                                      $cliArguments
     * @param ?non-empty-string                                                           $pharExtensionDirectory
     * @param list<array{className: non-empty-string, parameters: array<string, string>}> $extensionBootstrappers
     * @param ?non-empty-list<non-empty-string>                                           $testsCovering
     * @param ?non-empty-list<non-empty-string>                                           $testsUsing
     * @param ?non-empty-list<non-empty-string>                                           $testsRequiringPhpExtension
     * @param list<non-empty-string>                                                      $groups
     * @param list<non-empty-string>                                                      $excludeGroups
     * @param non-empty-list<non-empty-string>                                            $testSuffixes
     * @param non-negative-int                                                            $shortenArraysForExportThreshold
     */
    public function __construct(array $cliArguments, ?string $configurationFile, ?string $bootstrap, bool $cacheResult, ?string $cacheDirectory, ?string $coverageCacheDirectory, Source $source, string $testResultCacheFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4j, int $coverageCrap4jThreshold, ?string $coverageHtml, int $coverageHtmlLowUpperBound, int $coverageHtmlHighLowerBound, string $coverageHtmlColorSuccessLow, string $coverageHtmlColorSuccessMedium, string $coverageHtmlColorSuccessHigh, string $coverageHtmlColorWarning, string $coverageHtmlColorDanger, ?string $coverageHtmlCustomCssFile, ?string $coveragePhp, ?string $coverageText, bool $coverageTextShowUncoveredFiles, bool $coverageTextShowOnlySummary, ?string $coverageXml, bool $pathCoverage, bool $ignoreDeprecatedCodeUnitsFromCodeCoverage, bool $disableCodeCoverageIgnore, bool $failOnDeprecation, bool $failOnPhpunitDeprecation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnNotice, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnDeprecation, ?string $specificDeprecationToStopOn, bool $stopOnError, bool $stopOnFailure, bool $stopOnIncomplete, bool $stopOnNotice, bool $stopOnRisky, bool $stopOnSkipped, bool $stopOnWarning, bool $outputToStandardErrorStream, int|string $columns, bool $noExtensions, ?string $pharExtensionDirectory, array $extensionBootstrappers, bool $backupGlobals, bool $backupStaticProperties, bool $beStrictAboutChangesToGlobalState, bool $colors, bool $processIsolation, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, bool $reportUselessTests, bool $strictCoverage, bool $disallowTestOutput, bool $displayDetailsOnIncompleteTests, bool $displayDetailsOnSkippedTests, bool $displayDetailsOnTestsThatTriggerDeprecations, bool $displayDetailsOnPhpunitDeprecations, bool $displayDetailsOnTestsThatTriggerErrors, bool $displayDetailsOnTestsThatTriggerNotices, bool $displayDetailsOnTestsThatTriggerWarnings, bool $reverseDefectList, bool $requireCoverageMetadata, bool $noProgress, bool $noResults, bool $noOutput, int $executionOrder, int $executionOrderDefects, bool $resolveDependencies, ?string $logfileTeamcity, ?string $logfileJunit, ?string $logfileTestdoxHtml, ?string $logfileTestdoxText, ?string $logEventsText, ?string $logEventsVerboseText, bool $teamCityOutput, bool $testDoxOutput, bool $testDoxOutputSummary, ?array $testsCovering, ?array $testsUsing, ?array $testsRequiringPhpExtension, ?string $filter, ?string $excludeFilter, array $groups, array $excludeGroups, int $randomOrderSeed, bool $includeUncoveredFiles, TestSuiteCollection $testSuite, string $includeTestSuite, string $excludeTestSuite, ?string $defaultTestSuite, array $testSuffixes, Php $php, bool $controlGarbageCollector, int $numberOfTestsBeforeGarbageCollection, ?string $generateBaseline, bool $debug, int $shortenArraysForExportThreshold)
    {
        $this->cliArguments                                 = $cliArguments;
        $this->configurationFile                            = $configurationFile;
        $this->bootstrap                                    = $bootstrap;
        $this->cacheResult                                  = $cacheResult;
        $this->cacheDirectory                               = $cacheDirectory;
        $this->coverageCacheDirectory                       = $coverageCacheDirectory;
        $this->source                                       = $source;
        $this->testResultCacheFile                          = $testResultCacheFile;
        $this->coverageClover                               = $coverageClover;
        $this->coverageCobertura                            = $coverageCobertura;
        $this->coverageCrap4j                               = $coverageCrap4j;
        $this->coverageCrap4jThreshold                      = $coverageCrap4jThreshold;
        $this->coverageHtml                                 = $coverageHtml;
        $this->coverageHtmlLowUpperBound                    = $coverageHtmlLowUpperBound;
        $this->coverageHtmlHighLowerBound                   = $coverageHtmlHighLowerBound;
        $this->coverageHtmlColorSuccessLow                  = $coverageHtmlColorSuccessLow;
        $this->coverageHtmlColorSuccessMedium               = $coverageHtmlColorSuccessMedium;
        $this->coverageHtmlColorSuccessHigh                 = $coverageHtmlColorSuccessHigh;
        $this->coverageHtmlColorWarning                     = $coverageHtmlColorWarning;
        $this->coverageHtmlColorDanger                      = $coverageHtmlColorDanger;
        $this->coverageHtmlCustomCssFile                    = $coverageHtmlCustomCssFile;
        $this->coveragePhp                                  = $coveragePhp;
        $this->coverageText                                 = $coverageText;
        $this->coverageTextShowUncoveredFiles               = $coverageTextShowUncoveredFiles;
        $this->coverageTextShowOnlySummary                  = $coverageTextShowOnlySummary;
        $this->coverageXml                                  = $coverageXml;
        $this->pathCoverage                                 = $pathCoverage;
        $this->ignoreDeprecatedCodeUnitsFromCodeCoverage    = $ignoreDeprecatedCodeUnitsFromCodeCoverage;
        $this->disableCodeCoverageIgnore                    = $disableCodeCoverageIgnore;
        $this->failOnDeprecation                            = $failOnDeprecation;
        $this->failOnPhpunitDeprecation                     = $failOnPhpunitDeprecation;
        $this->failOnEmptyTestSuite                         = $failOnEmptyTestSuite;
        $this->failOnIncomplete                             = $failOnIncomplete;
        $this->failOnNotice                                 = $failOnNotice;
        $this->failOnRisky                                  = $failOnRisky;
        $this->failOnSkipped                                = $failOnSkipped;
        $this->failOnWarning                                = $failOnWarning;
        $this->stopOnDefect                                 = $stopOnDefect;
        $this->stopOnDeprecation                            = $stopOnDeprecation;
        $this->specificDeprecationToStopOn                  = $specificDeprecationToStopOn;
        $this->stopOnError                                  = $stopOnError;
        $this->stopOnFailure                                = $stopOnFailure;
        $this->stopOnIncomplete                             = $stopOnIncomplete;
        $this->stopOnNotice                                 = $stopOnNotice;
        $this->stopOnRisky                                  = $stopOnRisky;
        $this->stopOnSkipped                                = $stopOnSkipped;
        $this->stopOnWarning                                = $stopOnWarning;
        $this->outputToStandardErrorStream                  = $outputToStandardErrorStream;
        $this->columns                                      = $columns;
        $this->noExtensions                                 = $noExtensions;
        $this->pharExtensionDirectory                       = $pharExtensionDirectory;
        $this->extensionBootstrappers                       = $extensionBootstrappers;
        $this->backupGlobals                                = $backupGlobals;
        $this->backupStaticProperties                       = $backupStaticProperties;
        $this->beStrictAboutChangesToGlobalState            = $beStrictAboutChangesToGlobalState;
        $this->colors                                       = $colors;
        $this->processIsolation                             = $processIsolation;
        $this->enforceTimeLimit                             = $enforceTimeLimit;
        $this->defaultTimeLimit                             = $defaultTimeLimit;
        $this->timeoutForSmallTests                         = $timeoutForSmallTests;
        $this->timeoutForMediumTests                        = $timeoutForMediumTests;
        $this->timeoutForLargeTests                         = $timeoutForLargeTests;
        $this->reportUselessTests                           = $reportUselessTests;
        $this->strictCoverage                               = $strictCoverage;
        $this->disallowTestOutput                           = $disallowTestOutput;
        $this->displayDetailsOnIncompleteTests              = $displayDetailsOnIncompleteTests;
        $this->displayDetailsOnSkippedTests                 = $displayDetailsOnSkippedTests;
        $this->displayDetailsOnTestsThatTriggerDeprecations = $displayDetailsOnTestsThatTriggerDeprecations;
        $this->displayDetailsOnPhpunitDeprecations          = $displayDetailsOnPhpunitDeprecations;
        $this->displayDetailsOnTestsThatTriggerErrors       = $displayDetailsOnTestsThatTriggerErrors;
        $this->displayDetailsOnTestsThatTriggerNotices      = $displayDetailsOnTestsThatTriggerNotices;
        $this->displayDetailsOnTestsThatTriggerWarnings     = $displayDetailsOnTestsThatTriggerWarnings;
        $this->reverseDefectList                            = $reverseDefectList;
        $this->requireCoverageMetadata                      = $requireCoverageMetadata;
        $this->noProgress                                   = $noProgress;
        $this->noResults                                    = $noResults;
        $this->noOutput                                     = $noOutput;
        $this->executionOrder                               = $executionOrder;
        $this->executionOrderDefects                        = $executionOrderDefects;
        $this->resolveDependencies                          = $resolveDependencies;
        $this->logfileTeamcity                              = $logfileTeamcity;
        $this->logfileJunit                                 = $logfileJunit;
        $this->logfileTestdoxHtml                           = $logfileTestdoxHtml;
        $this->logfileTestdoxText                           = $logfileTestdoxText;
        $this->logEventsText                                = $logEventsText;
        $this->logEventsVerboseText                         = $logEventsVerboseText;
        $this->teamCityOutput                               = $teamCityOutput;
        $this->testDoxOutput                                = $testDoxOutput;
        $this->testDoxOutputSummary                         = $testDoxOutputSummary;
        $this->testsCovering                                = $testsCovering;
        $this->testsUsing                                   = $testsUsing;
        $this->testsRequiringPhpExtension                   = $testsRequiringPhpExtension;
        $this->filter                                       = $filter;
        $this->excludeFilter                                = $excludeFilter;
        $this->groups                                       = $groups;
        $this->excludeGroups                                = $excludeGroups;
        $this->randomOrderSeed                              = $randomOrderSeed;
        $this->includeUncoveredFiles                        = $includeUncoveredFiles;
        $this->testSuite                                    = $testSuite;
        $this->includeTestSuite                             = $includeTestSuite;
        $this->excludeTestSuite                             = $excludeTestSuite;
        $this->defaultTestSuite                             = $defaultTestSuite;
        $this->testSuffixes                                 = $testSuffixes;
        $this->php                                          = $php;
        $this->controlGarbageCollector                      = $controlGarbageCollector;
        $this->numberOfTestsBeforeGarbageCollection         = $numberOfTestsBeforeGarbageCollection;
        $this->generateBaseline                             = $generateBaseline;
        $this->debug                                        = $debug;
        $this->shortenArraysForExportThreshold              = $shortenArraysForExportThreshold;
    }

    /**
     * @phpstan-assert-if-true !empty $this->cliArguments
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCliArguments(): bool
    {
        return !empty($this->cliArguments);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<non-empty-string>
=======
     * @return list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function cliArguments(): array
    {
        return $this->cliArguments;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !empty $this->cliArguments
     *
     * @deprecated Use hasCliArguments() instead
     */
    public function hasCliArgument(): bool
    {
        return !empty($this->cliArguments);
    }

    /**
     * @throws NoCliArgumentException
     *
     * @return non-empty-string
     *
     * @deprecated Use cliArguments()[0] instead
     */
    public function cliArgument(): string
    {
        if (!$this->hasCliArguments()) {
            throw new NoCliArgumentException;
        }

        return $this->cliArguments[0];
    }

    /**
     * @psalm-assert-if-true !null $this->configurationFile
=======
     * @phpstan-assert-if-true !null $this->configurationFile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasConfigurationFile(): bool
    {
        return $this->configurationFile !== null;
    }

    /**
     * @throws NoConfigurationFileException
     */
    public function configurationFile(): string
    {
        if (!$this->hasConfigurationFile()) {
            throw new NoConfigurationFileException;
        }

        return $this->configurationFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->bootstrap
=======
     * @phpstan-assert-if-true !null $this->bootstrap
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasBootstrap(): bool
    {
        return $this->bootstrap !== null;
    }

    /**
     * @throws NoBootstrapException
     */
    public function bootstrap(): string
    {
        if (!$this->hasBootstrap()) {
            throw new NoBootstrapException;
        }

        return $this->bootstrap;
    }

    public function cacheResult(): bool
    {
        return $this->cacheResult;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->cacheDirectory
=======
     * @phpstan-assert-if-true !null $this->cacheDirectory
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCacheDirectory(): bool
    {
        return $this->cacheDirectory !== null;
    }

    /**
     * @throws NoCacheDirectoryException
     */
    public function cacheDirectory(): string
    {
        if (!$this->hasCacheDirectory()) {
            throw new NoCacheDirectoryException;
        }

        return $this->cacheDirectory;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageCacheDirectory
=======
     * @phpstan-assert-if-true !null $this->coverageCacheDirectory
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageCacheDirectory(): bool
    {
        return $this->coverageCacheDirectory !== null;
    }

    /**
     * @throws NoCoverageCacheDirectoryException
     */
    public function coverageCacheDirectory(): string
    {
        if (!$this->hasCoverageCacheDirectory()) {
            throw new NoCoverageCacheDirectoryException;
        }

        return $this->coverageCacheDirectory;
    }

    public function source(): Source
    {
        return $this->source;
    }

<<<<<<< HEAD
    /**
     * @deprecated Use source()->restrictDeprecations() instead
     */
    public function restrictDeprecations(): bool
    {
        return $this->source()->restrictDeprecations();
    }

    /**
     * @deprecated Use source()->restrictNotices() instead
     */
    public function restrictNotices(): bool
    {
        return $this->source()->restrictNotices();
    }

    /**
     * @deprecated Use source()->restrictWarnings() instead
     */
    public function restrictWarnings(): bool
    {
        return $this->source()->restrictWarnings();
    }

    /**
     * @deprecated Use source()->notEmpty() instead
     */
    public function hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport(): bool
    {
        return $this->source->notEmpty();
    }

    /**
     * @deprecated Use source()->includeDirectories() instead
     */
    public function coverageIncludeDirectories(): FilterDirectoryCollection
    {
        return $this->source()->includeDirectories();
    }

    /**
     * @deprecated Use source()->includeFiles() instead
     */
    public function coverageIncludeFiles(): FileCollection
    {
        return $this->source()->includeFiles();
    }

    /**
     * @deprecated Use source()->excludeDirectories() instead
     */
    public function coverageExcludeDirectories(): FilterDirectoryCollection
    {
        return $this->source()->excludeDirectories();
    }

    /**
     * @deprecated Use source()->excludeFiles() instead
     */
    public function coverageExcludeFiles(): FileCollection
    {
        return $this->source()->excludeFiles();
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function testResultCacheFile(): string
    {
        return $this->testResultCacheFile;
    }

    public function ignoreDeprecatedCodeUnitsFromCodeCoverage(): bool
    {
        return $this->ignoreDeprecatedCodeUnitsFromCodeCoverage;
    }

    public function disableCodeCoverageIgnore(): bool
    {
        return $this->disableCodeCoverageIgnore;
    }

    public function pathCoverage(): bool
    {
        return $this->pathCoverage;
    }

    public function hasCoverageReport(): bool
    {
        return $this->hasCoverageClover() ||
<<<<<<< HEAD
               $this->hasCoverageCobertura() ||
               $this->hasCoverageCrap4j() ||
               $this->hasCoverageHtml() ||
               $this->hasCoveragePhp() ||
               $this->hasCoverageText() ||
               $this->hasCoverageXml();
    }

    /**
     * @psalm-assert-if-true !null $this->coverageClover
=======
            $this->hasCoverageCobertura() ||
            $this->hasCoverageCrap4j() ||
            $this->hasCoverageHtml() ||
            $this->hasCoveragePhp() ||
            $this->hasCoverageText() ||
            $this->hasCoverageXml();
    }

    /**
     * @phpstan-assert-if-true !null $this->coverageClover
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageClover(): bool
    {
        return $this->coverageClover !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageClover(): string
    {
        if (!$this->hasCoverageClover()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageClover;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageCobertura
=======
     * @phpstan-assert-if-true !null $this->coverageCobertura
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageCobertura(): bool
    {
        return $this->coverageCobertura !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCobertura(): string
    {
        if (!$this->hasCoverageCobertura()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageCobertura;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageCrap4j
=======
     * @phpstan-assert-if-true !null $this->coverageCrap4j
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageCrap4j(): bool
    {
        return $this->coverageCrap4j !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageCrap4j(): string
    {
        if (!$this->hasCoverageCrap4j()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageCrap4j;
    }

    public function coverageCrap4jThreshold(): int
    {
        return $this->coverageCrap4jThreshold;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageHtml
=======
     * @phpstan-assert-if-true !null $this->coverageHtml
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageHtml(): bool
    {
        return $this->coverageHtml !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageHtml(): string
    {
        if (!$this->hasCoverageHtml()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageHtml;
    }

    public function coverageHtmlLowUpperBound(): int
    {
        return $this->coverageHtmlLowUpperBound;
    }

    public function coverageHtmlHighLowerBound(): int
    {
        return $this->coverageHtmlHighLowerBound;
    }

    public function coverageHtmlColorSuccessLow(): string
    {
        return $this->coverageHtmlColorSuccessLow;
    }

    public function coverageHtmlColorSuccessMedium(): string
    {
        return $this->coverageHtmlColorSuccessMedium;
    }

    public function coverageHtmlColorSuccessHigh(): string
    {
        return $this->coverageHtmlColorSuccessHigh;
    }

    public function coverageHtmlColorWarning(): string
    {
        return $this->coverageHtmlColorWarning;
    }

    public function coverageHtmlColorDanger(): string
    {
        return $this->coverageHtmlColorDanger;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageHtmlCustomCssFile
=======
     * @phpstan-assert-if-true !null $this->coverageHtmlCustomCssFile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageHtmlCustomCssFile(): bool
    {
        return $this->coverageHtmlCustomCssFile !== null;
    }

    /**
     * @throws NoCustomCssFileException
     */
    public function coverageHtmlCustomCssFile(): string
    {
        if (!$this->hasCoverageHtmlCustomCssFile()) {
            throw new NoCustomCssFileException;
        }

        return $this->coverageHtmlCustomCssFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coveragePhp
=======
     * @phpstan-assert-if-true !null $this->coveragePhp
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoveragePhp(): bool
    {
        return $this->coveragePhp !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coveragePhp(): string
    {
        if (!$this->hasCoveragePhp()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coveragePhp;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageText
=======
     * @phpstan-assert-if-true !null $this->coverageText
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageText(): bool
    {
        return $this->coverageText !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageText(): string
    {
        if (!$this->hasCoverageText()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageText;
    }

    public function coverageTextShowUncoveredFiles(): bool
    {
        return $this->coverageTextShowUncoveredFiles;
    }

    public function coverageTextShowOnlySummary(): bool
    {
        return $this->coverageTextShowOnlySummary;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageXml
=======
     * @phpstan-assert-if-true !null $this->coverageXml
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageXml(): bool
    {
        return $this->coverageXml !== null;
    }

    /**
     * @throws CodeCoverageReportNotConfiguredException
     */
    public function coverageXml(): string
    {
        if (!$this->hasCoverageXml()) {
            throw new CodeCoverageReportNotConfiguredException;
        }

        return $this->coverageXml;
    }

    public function failOnDeprecation(): bool
    {
        return $this->failOnDeprecation;
    }

<<<<<<< HEAD
=======
    public function failOnPhpunitDeprecation(): bool
    {
        return $this->failOnPhpunitDeprecation;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function failOnEmptyTestSuite(): bool
    {
        return $this->failOnEmptyTestSuite;
    }

    public function failOnIncomplete(): bool
    {
        return $this->failOnIncomplete;
    }

    public function failOnNotice(): bool
    {
        return $this->failOnNotice;
    }

    public function failOnRisky(): bool
    {
        return $this->failOnRisky;
    }

    public function failOnSkipped(): bool
    {
        return $this->failOnSkipped;
    }

    public function failOnWarning(): bool
    {
        return $this->failOnWarning;
    }

    public function stopOnDefect(): bool
    {
        return $this->stopOnDefect;
    }

    public function stopOnDeprecation(): bool
    {
        return $this->stopOnDeprecation;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true !null $this->specificDeprecationToStopOn
     */
    public function hasSpecificDeprecationToStopOn(): bool
    {
        return $this->specificDeprecationToStopOn !== null;
    }

    /**
     * @throws SpecificDeprecationToStopOnNotConfiguredException
     */
    public function specificDeprecationToStopOn(): string
    {
        if (!$this->hasSpecificDeprecationToStopOn()) {
            throw new SpecificDeprecationToStopOnNotConfiguredException;
        }

        return $this->specificDeprecationToStopOn;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function stopOnError(): bool
    {
        return $this->stopOnError;
    }

    public function stopOnFailure(): bool
    {
        return $this->stopOnFailure;
    }

    public function stopOnIncomplete(): bool
    {
        return $this->stopOnIncomplete;
    }

    public function stopOnNotice(): bool
    {
        return $this->stopOnNotice;
    }

    public function stopOnRisky(): bool
    {
        return $this->stopOnRisky;
    }

    public function stopOnSkipped(): bool
    {
        return $this->stopOnSkipped;
    }

    public function stopOnWarning(): bool
    {
        return $this->stopOnWarning;
    }

    public function outputToStandardErrorStream(): bool
    {
        return $this->outputToStandardErrorStream;
    }

    public function columns(): int
    {
        return $this->columns;
    }

<<<<<<< HEAD
    /**
     * @deprecated Use noExtensions() instead
     */
    public function loadPharExtensions(): bool
    {
        return $this->noExtensions;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function noExtensions(): bool
    {
        return $this->noExtensions;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->pharExtensionDirectory
=======
     * @phpstan-assert-if-true !null $this->pharExtensionDirectory
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasPharExtensionDirectory(): bool
    {
        return $this->pharExtensionDirectory !== null;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
     *
     * @throws NoPharExtensionDirectoryException
=======
     * @throws NoPharExtensionDirectoryException
     *
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function pharExtensionDirectory(): string
    {
        if (!$this->hasPharExtensionDirectory()) {
            throw new NoPharExtensionDirectoryException;
        }

        return $this->pharExtensionDirectory;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<array{className: class-string, parameters: array<string, string>}>
=======
     * @return list<array{className: non-empty-string, parameters: array<string, string>}>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function extensionBootstrappers(): array
    {
        return $this->extensionBootstrappers;
    }

    public function backupGlobals(): bool
    {
        return $this->backupGlobals;
    }

    public function backupStaticProperties(): bool
    {
        return $this->backupStaticProperties;
    }

    public function beStrictAboutChangesToGlobalState(): bool
    {
        return $this->beStrictAboutChangesToGlobalState;
    }

    public function colors(): bool
    {
        return $this->colors;
    }

    public function processIsolation(): bool
    {
        return $this->processIsolation;
    }

    public function enforceTimeLimit(): bool
    {
        return $this->enforceTimeLimit;
    }

    public function defaultTimeLimit(): int
    {
        return $this->defaultTimeLimit;
    }

    public function timeoutForSmallTests(): int
    {
        return $this->timeoutForSmallTests;
    }

    public function timeoutForMediumTests(): int
    {
        return $this->timeoutForMediumTests;
    }

    public function timeoutForLargeTests(): int
    {
        return $this->timeoutForLargeTests;
    }

    public function reportUselessTests(): bool
    {
        return $this->reportUselessTests;
    }

    public function strictCoverage(): bool
    {
        return $this->strictCoverage;
    }

    public function disallowTestOutput(): bool
    {
        return $this->disallowTestOutput;
    }

    public function displayDetailsOnIncompleteTests(): bool
    {
        return $this->displayDetailsOnIncompleteTests;
    }

    public function displayDetailsOnSkippedTests(): bool
    {
        return $this->displayDetailsOnSkippedTests;
    }

    public function displayDetailsOnTestsThatTriggerDeprecations(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerDeprecations;
    }

<<<<<<< HEAD
=======
    public function displayDetailsOnPhpunitDeprecations(): bool
    {
        return $this->displayDetailsOnPhpunitDeprecations;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function displayDetailsOnTestsThatTriggerErrors(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerErrors;
    }

    public function displayDetailsOnTestsThatTriggerNotices(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerNotices;
    }

    public function displayDetailsOnTestsThatTriggerWarnings(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerWarnings;
    }

    public function reverseDefectList(): bool
    {
        return $this->reverseDefectList;
    }

    public function requireCoverageMetadata(): bool
    {
        return $this->requireCoverageMetadata;
    }

<<<<<<< HEAD
    /**
     * @deprecated
     */
    public function registerMockObjectsFromTestArgumentsRecursively(): bool
    {
        return $this->registerMockObjectsFromTestArgumentsRecursively;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function noProgress(): bool
    {
        return $this->noProgress;
    }

    public function noResults(): bool
    {
        return $this->noResults;
    }

    public function noOutput(): bool
    {
        return $this->noOutput;
    }

    public function executionOrder(): int
    {
        return $this->executionOrder;
    }

    public function executionOrderDefects(): int
    {
        return $this->executionOrderDefects;
    }

    public function resolveDependencies(): bool
    {
        return $this->resolveDependencies;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logfileTeamcity
=======
     * @phpstan-assert-if-true !null $this->logfileTeamcity
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogfileTeamcity(): bool
    {
        return $this->logfileTeamcity !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTeamcity(): string
    {
        if (!$this->hasLogfileTeamcity()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTeamcity;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logfileJunit
=======
     * @phpstan-assert-if-true !null $this->logfileJunit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogfileJunit(): bool
    {
        return $this->logfileJunit !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileJunit(): string
    {
        if (!$this->hasLogfileJunit()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileJunit;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logfileTestdoxHtml
=======
     * @phpstan-assert-if-true !null $this->logfileTestdoxHtml
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogfileTestdoxHtml(): bool
    {
        return $this->logfileTestdoxHtml !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxHtml(): string
    {
        if (!$this->hasLogfileTestdoxHtml()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTestdoxHtml;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logfileTestdoxText
=======
     * @phpstan-assert-if-true !null $this->logfileTestdoxText
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogfileTestdoxText(): bool
    {
        return $this->logfileTestdoxText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logfileTestdoxText(): string
    {
        if (!$this->hasLogfileTestdoxText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logfileTestdoxText;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logEventsText
=======
     * @phpstan-assert-if-true !null $this->logEventsText
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogEventsText(): bool
    {
        return $this->logEventsText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsText(): string
    {
        if (!$this->hasLogEventsText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logEventsText;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->logEventsVerboseText
=======
     * @phpstan-assert-if-true !null $this->logEventsVerboseText
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasLogEventsVerboseText(): bool
    {
        return $this->logEventsVerboseText !== null;
    }

    /**
     * @throws LoggingNotConfiguredException
     */
    public function logEventsVerboseText(): string
    {
        if (!$this->hasLogEventsVerboseText()) {
            throw new LoggingNotConfiguredException;
        }

        return $this->logEventsVerboseText;
    }

    public function outputIsTeamCity(): bool
    {
        return $this->teamCityOutput;
    }

    public function outputIsTestDox(): bool
    {
        return $this->testDoxOutput;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true !empty $this->testsCovering
=======
    public function testDoxOutputWithSummary(): bool
    {
        return $this->testDoxOutputSummary;
    }

    /**
     * @phpstan-assert-if-true !empty $this->testsCovering
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestsCovering(): bool
    {
        return !empty($this->testsCovering);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<string>
     *
     * @throws FilterNotConfiguredException
=======
     * @throws FilterNotConfiguredException
     *
     * @return list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testsCovering(): array
    {
        if (!$this->hasTestsCovering()) {
            throw new FilterNotConfiguredException;
        }

        return $this->testsCovering;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !empty $this->testsUsing
=======
     * @phpstan-assert-if-true !empty $this->testsUsing
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestsUsing(): bool
    {
        return !empty($this->testsUsing);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<string>
     *
     * @throws FilterNotConfiguredException
=======
     * @throws FilterNotConfiguredException
     *
     * @return list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testsUsing(): array
    {
        if (!$this->hasTestsUsing()) {
            throw new FilterNotConfiguredException;
        }

        return $this->testsUsing;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->filter
=======
     * @phpstan-assert-if-true !empty $this->testsRequiringPhpExtension
     */
    public function hasTestsRequiringPhpExtension(): bool
    {
        return !empty($this->testsRequiringPhpExtension);
    }

    /**
     * @throws FilterNotConfiguredException
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsRequiringPhpExtension(): array
    {
        if (!$this->hasTestsRequiringPhpExtension()) {
            throw new FilterNotConfiguredException;
        }

        return $this->testsRequiringPhpExtension;
    }

    /**
     * @phpstan-assert-if-true !null $this->filter
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFilter(): bool
    {
        return $this->filter !== null;
    }

    /**
     * @throws FilterNotConfiguredException
     */
    public function filter(): string
    {
        if (!$this->hasFilter()) {
            throw new FilterNotConfiguredException;
        }

        return $this->filter;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !empty $this->groups
=======
     * @phpstan-assert-if-true !null $this->excludeFilter
     */
    public function hasExcludeFilter(): bool
    {
        return $this->excludeFilter !== null;
    }

    /**
     * @throws FilterNotConfiguredException
     */
    public function excludeFilter(): string
    {
        if (!$this->hasExcludeFilter()) {
            throw new FilterNotConfiguredException;
        }

        return $this->excludeFilter;
    }

    /**
     * @phpstan-assert-if-true !empty $this->groups
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasGroups(): bool
    {
        return !empty($this->groups);
    }

    /**
     * @throws FilterNotConfiguredException
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function groups(): array
    {
        if (!$this->hasGroups()) {
            throw new FilterNotConfiguredException;
        }

        return $this->groups;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !empty $this->excludeGroups
=======
     * @phpstan-assert-if-true !empty $this->excludeGroups
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasExcludeGroups(): bool
    {
        return !empty($this->excludeGroups);
    }

    /**
     * @throws FilterNotConfiguredException
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function excludeGroups(): array
    {
        if (!$this->hasExcludeGroups()) {
            throw new FilterNotConfiguredException;
        }

        return $this->excludeGroups;
    }

    public function randomOrderSeed(): int
    {
        return $this->randomOrderSeed;
    }

    public function includeUncoveredFiles(): bool
    {
        return $this->includeUncoveredFiles;
    }

    public function testSuite(): TestSuiteCollection
    {
        return $this->testSuite;
    }

    public function includeTestSuite(): string
    {
        return $this->includeTestSuite;
    }

    public function excludeTestSuite(): string
    {
        return $this->excludeTestSuite;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->defaultTestSuite
=======
     * @phpstan-assert-if-true !null $this->defaultTestSuite
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDefaultTestSuite(): bool
    {
        return $this->defaultTestSuite !== null;
    }

    /**
     * @throws NoDefaultTestSuiteException
     */
    public function defaultTestSuite(): string
    {
        if (!$this->hasDefaultTestSuite()) {
            throw new NoDefaultTestSuiteException;
        }

        return $this->defaultTestSuite;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-list<non-empty-string>
=======
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testSuffixes(): array
    {
        return $this->testSuffixes;
    }

    public function php(): Php
    {
        return $this->php;
    }

    public function controlGarbageCollector(): bool
    {
        return $this->controlGarbageCollector;
    }

    public function numberOfTestsBeforeGarbageCollection(): int
    {
        return $this->numberOfTestsBeforeGarbageCollection;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->generateBaseline
=======
     * @phpstan-assert-if-true !null $this->generateBaseline
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasGenerateBaseline(): bool
    {
        return $this->generateBaseline !== null;
    }

    /**
     * @throws NoBaselineException
     */
    public function generateBaseline(): string
    {
        if (!$this->hasGenerateBaseline()) {
            throw new NoBaselineException;
        }

        return $this->generateBaseline;
    }

    public function debug(): bool
    {
        return $this->debug;
    }
<<<<<<< HEAD
=======

    /**
     * @return non-negative-int
     */
    public function shortenArraysForExportThreshold(): int
    {
        return $this->shortenArraysForExportThreshold;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\CliArguments;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Configuration
{
    /**
     * @psalm-var list<non-empty-string>
     */
    private readonly array $arguments;
    private readonly ?string $atLeastVersion;
    private readonly ?bool $backupGlobals;
    private readonly ?bool $backupStaticProperties;
    private readonly ?bool $beStrictAboutChangesToGlobalState;
    private readonly ?string $bootstrap;
    private readonly ?string $cacheDirectory;
    private readonly ?bool $cacheResult;
    private readonly ?string $cacheResultFile;
    private readonly bool $checkVersion;
    private readonly ?string $colors;
    private readonly null|int|string $columns;
    private readonly ?string $configurationFile;
    private readonly ?array $coverageFilter;
    private readonly ?string $coverageClover;
    private readonly ?string $coverageCobertura;
    private readonly ?string $coverageCrap4J;
    private readonly ?string $coverageHtml;
    private readonly ?string $coveragePhp;
    private readonly ?string $coverageText;
    private readonly ?bool $coverageTextShowUncoveredFiles;
    private readonly ?bool $coverageTextShowOnlySummary;
    private readonly ?string $coverageXml;
    private readonly ?bool $pathCoverage;
    private readonly ?string $coverageCacheDirectory;
    private readonly bool $warmCoverageCache;
    private readonly ?int $defaultTimeLimit;
    private readonly ?bool $disableCodeCoverageIgnore;
    private readonly ?bool $disallowTestOutput;
    private readonly ?bool $enforceTimeLimit;
    private readonly ?array $excludeGroups;
    private readonly ?int $executionOrder;
    private readonly ?int $executionOrderDefects;
    private readonly ?bool $failOnDeprecation;
    private readonly ?bool $failOnEmptyTestSuite;
    private readonly ?bool $failOnIncomplete;
    private readonly ?bool $failOnNotice;
    private readonly ?bool $failOnRisky;
    private readonly ?bool $failOnSkipped;
    private readonly ?bool $failOnWarning;
    private readonly ?bool $stopOnDefect;
    private readonly ?bool $stopOnDeprecation;
    private readonly ?bool $stopOnError;
    private readonly ?bool $stopOnFailure;
    private readonly ?bool $stopOnIncomplete;
    private readonly ?bool $stopOnNotice;
    private readonly ?bool $stopOnRisky;
    private readonly ?bool $stopOnSkipped;
    private readonly ?bool $stopOnWarning;
    private readonly ?string $filter;
    private readonly ?string $generateBaseline;
    private readonly ?string $useBaseline;
    private readonly bool $ignoreBaseline;
    private readonly bool $generateConfiguration;
    private readonly bool $migrateConfiguration;
    private readonly ?array $groups;
    private readonly ?array $testsCovering;
    private readonly ?array $testsUsing;
    private readonly bool $help;
    private readonly ?string $includePath;
    private readonly ?array $iniSettings;
    private readonly ?string $junitLogfile;
    private readonly bool $listGroups;
    private readonly bool $listSuites;
    private readonly bool $listTests;
    private readonly ?string $listTestsXml;
    private readonly ?bool $noCoverage;
    private readonly ?bool $noExtensions;
    private readonly ?bool $noOutput;
    private readonly ?bool $noProgress;
    private readonly ?bool $noResults;
    private readonly ?bool $noLogging;
    private readonly ?bool $processIsolation;
    private readonly ?int $randomOrderSeed;
    private readonly ?bool $reportUselessTests;
    private readonly ?bool $resolveDependencies;
    private readonly ?bool $reverseList;
    private readonly ?bool $stderr;
    private readonly ?bool $strictCoverage;
    private readonly ?string $teamcityLogfile;
    private readonly ?bool $teamCityPrinter;
    private readonly ?string $testdoxHtmlFile;
    private readonly ?string $testdoxTextFile;
    private readonly ?bool $testdoxPrinter;

    /**
     * @psalm-var ?non-empty-list<non-empty-string>
     */
    private readonly ?array $testSuffixes;
    private readonly ?string $testSuite;
    private readonly ?string $excludeTestSuite;
    private readonly bool $useDefaultConfiguration;
    private readonly ?bool $displayDetailsOnIncompleteTests;
    private readonly ?bool $displayDetailsOnSkippedTests;
    private readonly ?bool $displayDetailsOnTestsThatTriggerDeprecations;
    private readonly ?bool $displayDetailsOnTestsThatTriggerErrors;
    private readonly ?bool $displayDetailsOnTestsThatTriggerNotices;
    private readonly ?bool $displayDetailsOnTestsThatTriggerWarnings;
    private readonly bool $version;
    private readonly ?string $logEventsText;
    private readonly ?string $logEventsVerboseText;
    private readonly bool $debug;

    /**
     * @psalm-param list<non-empty-string> $arguments
     * @psalm-param ?non-empty-list<non-empty-string> $testSuffixes
     */
    public function __construct(array $arguments, ?string $atLeastVersion, ?bool $backupGlobals, ?bool $backupStaticProperties, ?bool $beStrictAboutChangesToGlobalState, ?string $bootstrap, ?string $cacheDirectory, ?bool $cacheResult, ?string $cacheResultFile, bool $checkVersion, ?string $colors, null|int|string $columns, ?string $configurationFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4J, ?string $coverageHtml, ?string $coveragePhp, ?string $coverageText, ?bool $coverageTextShowUncoveredFiles, ?bool $coverageTextShowOnlySummary, ?string $coverageXml, ?bool $pathCoverage, ?string $coverageCacheDirectory, bool $warmCoverageCache, ?int $defaultTimeLimit, ?bool $disableCodeCoverageIgnore, ?bool $disallowTestOutput, ?bool $enforceTimeLimit, ?array $excludeGroups, ?int $executionOrder, ?int $executionOrderDefects, ?bool $failOnDeprecation, ?bool $failOnEmptyTestSuite, ?bool $failOnIncomplete, ?bool $failOnNotice, ?bool $failOnRisky, ?bool $failOnSkipped, ?bool $failOnWarning, ?bool $stopOnDefect, ?bool $stopOnDeprecation, ?bool $stopOnError, ?bool $stopOnFailure, ?bool $stopOnIncomplete, ?bool $stopOnNotice, ?bool $stopOnRisky, ?bool $stopOnSkipped, ?bool $stopOnWarning, ?string $filter, ?string $generateBaseline, ?string $useBaseline, bool $ignoreBaseline, bool $generateConfiguration, bool $migrateConfiguration, ?array $groups, ?array $testsCovering, ?array $testsUsing, bool $help, ?string $includePath, ?array $iniSettings, ?string $junitLogfile, bool $listGroups, bool $listSuites, bool $listTests, ?string $listTestsXml, ?bool $noCoverage, ?bool $noExtensions, ?bool $noOutput, ?bool $noProgress, ?bool $noResults, ?bool $noLogging, ?bool $processIsolation, ?int $randomOrderSeed, ?bool $reportUselessTests, ?bool $resolveDependencies, ?bool $reverseList, ?bool $stderr, ?bool $strictCoverage, ?string $teamcityLogfile, ?string $testdoxHtmlFile, ?string $testdoxTextFile, ?array $testSuffixes, ?string $testSuite, ?string $excludeTestSuite, bool $useDefaultConfiguration, ?bool $displayDetailsOnIncompleteTests, ?bool $displayDetailsOnSkippedTests, ?bool $displayDetailsOnTestsThatTriggerDeprecations, ?bool $displayDetailsOnTestsThatTriggerErrors, ?bool $displayDetailsOnTestsThatTriggerNotices, ?bool $displayDetailsOnTestsThatTriggerWarnings, bool $version, ?array $coverageFilter, ?string $logEventsText, ?string $logEventsVerboseText, ?bool $printerTeamCity, ?bool $printerTestDox, bool $debug)
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Configuration
{
    /**
     * @var list<non-empty-string>
     */
    private array $arguments;
    private ?string $atLeastVersion;
    private ?bool $backupGlobals;
    private ?bool $backupStaticProperties;
    private ?bool $beStrictAboutChangesToGlobalState;
    private ?string $bootstrap;
    private ?string $cacheDirectory;
    private ?bool $cacheResult;
    private bool $checkVersion;
    private ?string $colors;
    private null|int|string $columns;
    private ?string $configurationFile;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $coverageFilter;
    private ?string $coverageClover;
    private ?string $coverageCobertura;
    private ?string $coverageCrap4J;
    private ?string $coverageHtml;
    private ?string $coveragePhp;
    private ?string $coverageText;
    private ?bool $coverageTextShowUncoveredFiles;
    private ?bool $coverageTextShowOnlySummary;
    private ?string $coverageXml;
    private ?bool $pathCoverage;
    private bool $warmCoverageCache;
    private ?int $defaultTimeLimit;
    private ?bool $disableCodeCoverageIgnore;
    private ?bool $disallowTestOutput;
    private ?bool $enforceTimeLimit;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $excludeGroups;
    private ?int $executionOrder;
    private ?int $executionOrderDefects;
    private ?bool $failOnDeprecation;
    private ?bool $failOnPhpunitDeprecation;
    private ?bool $failOnEmptyTestSuite;
    private ?bool $failOnIncomplete;
    private ?bool $failOnNotice;
    private ?bool $failOnRisky;
    private ?bool $failOnSkipped;
    private ?bool $failOnWarning;
    private ?bool $stopOnDefect;
    private ?bool $stopOnDeprecation;
    private ?string $specificDeprecationToStopOn;
    private ?bool $stopOnError;
    private ?bool $stopOnFailure;
    private ?bool $stopOnIncomplete;
    private ?bool $stopOnNotice;
    private ?bool $stopOnRisky;
    private ?bool $stopOnSkipped;
    private ?bool $stopOnWarning;
    private ?string $filter;
    private ?string $excludeFilter;
    private ?string $generateBaseline;
    private ?string $useBaseline;
    private bool $ignoreBaseline;
    private bool $generateConfiguration;
    private bool $migrateConfiguration;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $groups;

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
    private bool $help;
    private ?string $includePath;

    /**
     * @var ?non-empty-array<non-empty-string, non-empty-string>
     */
    private ?array $iniSettings;
    private ?string $junitLogfile;
    private bool $listGroups;
    private bool $listSuites;
    private bool $listTestFiles;
    private bool $listTests;
    private ?string $listTestsXml;
    private ?bool $noCoverage;
    private ?bool $noExtensions;
    private ?bool $noOutput;
    private ?bool $noProgress;
    private ?bool $noResults;
    private ?bool $noLogging;
    private ?bool $processIsolation;
    private ?int $randomOrderSeed;
    private ?bool $reportUselessTests;
    private ?bool $resolveDependencies;
    private ?bool $reverseList;
    private ?bool $stderr;
    private ?bool $strictCoverage;
    private ?string $teamcityLogfile;
    private ?bool $teamCityPrinter;
    private ?string $testdoxHtmlFile;
    private ?string $testdoxTextFile;
    private ?bool $testdoxPrinter;
    private ?bool $testdoxPrinterSummary;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $testSuffixes;
    private ?string $testSuite;
    private ?string $excludeTestSuite;
    private bool $useDefaultConfiguration;
    private ?bool $displayDetailsOnIncompleteTests;
    private ?bool $displayDetailsOnSkippedTests;
    private ?bool $displayDetailsOnTestsThatTriggerDeprecations;
    private ?bool $displayDetailsOnPhpunitDeprecations;
    private ?bool $displayDetailsOnTestsThatTriggerErrors;
    private ?bool $displayDetailsOnTestsThatTriggerNotices;
    private ?bool $displayDetailsOnTestsThatTriggerWarnings;
    private bool $version;
    private ?string $logEventsText;
    private ?string $logEventsVerboseText;
    private bool $debug;

    /**
     * @var ?non-empty-list<non-empty-string>
     */
    private ?array $extensions;

    /**
     * @param list<non-empty-string>                               $arguments
     * @param ?non-empty-list<non-empty-string>                    $excludeGroups
     * @param ?non-empty-list<non-empty-string>                    $groups
     * @param ?non-empty-list<non-empty-string>                    $testsCovering
     * @param ?non-empty-list<non-empty-string>                    $testsUsing
     * @param ?non-empty-list<non-empty-string>                    $testsRequiringPhpExtension
     * @param ?non-empty-array<non-empty-string, non-empty-string> $iniSettings
     * @param ?non-empty-list<non-empty-string>                    $testSuffixes
     * @param ?non-empty-list<non-empty-string>                    $coverageFilter
     * @param ?non-empty-list<non-empty-string>                    $extensions
     */
    public function __construct(array $arguments, ?string $atLeastVersion, ?bool $backupGlobals, ?bool $backupStaticProperties, ?bool $beStrictAboutChangesToGlobalState, ?string $bootstrap, ?string $cacheDirectory, ?bool $cacheResult, bool $checkVersion, ?string $colors, null|int|string $columns, ?string $configurationFile, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4J, ?string $coverageHtml, ?string $coveragePhp, ?string $coverageText, ?bool $coverageTextShowUncoveredFiles, ?bool $coverageTextShowOnlySummary, ?string $coverageXml, ?bool $pathCoverage, bool $warmCoverageCache, ?int $defaultTimeLimit, ?bool $disableCodeCoverageIgnore, ?bool $disallowTestOutput, ?bool $enforceTimeLimit, ?array $excludeGroups, ?int $executionOrder, ?int $executionOrderDefects, ?bool $failOnDeprecation, ?bool $failOnPhpunitDeprecation, ?bool $failOnEmptyTestSuite, ?bool $failOnIncomplete, ?bool $failOnNotice, ?bool $failOnRisky, ?bool $failOnSkipped, ?bool $failOnWarning, ?bool $stopOnDefect, ?bool $stopOnDeprecation, ?string $specificDeprecationToStopOn, ?bool $stopOnError, ?bool $stopOnFailure, ?bool $stopOnIncomplete, ?bool $stopOnNotice, ?bool $stopOnRisky, ?bool $stopOnSkipped, ?bool $stopOnWarning, ?string $filter, ?string $excludeFilter, ?string $generateBaseline, ?string $useBaseline, bool $ignoreBaseline, bool $generateConfiguration, bool $migrateConfiguration, ?array $groups, ?array $testsCovering, ?array $testsUsing, ?array $testsRequiringPhpExtension, bool $help, ?string $includePath, ?array $iniSettings, ?string $junitLogfile, bool $listGroups, bool $listSuites, bool $listTestFiles, bool $listTests, ?string $listTestsXml, ?bool $noCoverage, ?bool $noExtensions, ?bool $noOutput, ?bool $noProgress, ?bool $noResults, ?bool $noLogging, ?bool $processIsolation, ?int $randomOrderSeed, ?bool $reportUselessTests, ?bool $resolveDependencies, ?bool $reverseList, ?bool $stderr, ?bool $strictCoverage, ?string $teamcityLogfile, ?string $testdoxHtmlFile, ?string $testdoxTextFile, ?array $testSuffixes, ?string $testSuite, ?string $excludeTestSuite, bool $useDefaultConfiguration, ?bool $displayDetailsOnIncompleteTests, ?bool $displayDetailsOnSkippedTests, ?bool $displayDetailsOnTestsThatTriggerDeprecations, ?bool $displayDetailsOnPhpunitDeprecations, ?bool $displayDetailsOnTestsThatTriggerErrors, ?bool $displayDetailsOnTestsThatTriggerNotices, ?bool $displayDetailsOnTestsThatTriggerWarnings, bool $version, ?array $coverageFilter, ?string $logEventsText, ?string $logEventsVerboseText, ?bool $printerTeamCity, ?bool $testdoxPrinter, ?bool $testdoxPrinterSummary, bool $debug, ?array $extensions)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->arguments                                    = $arguments;
        $this->atLeastVersion                               = $atLeastVersion;
        $this->backupGlobals                                = $backupGlobals;
        $this->backupStaticProperties                       = $backupStaticProperties;
        $this->beStrictAboutChangesToGlobalState            = $beStrictAboutChangesToGlobalState;
        $this->bootstrap                                    = $bootstrap;
        $this->cacheDirectory                               = $cacheDirectory;
        $this->cacheResult                                  = $cacheResult;
<<<<<<< HEAD
        $this->cacheResultFile                              = $cacheResultFile;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->checkVersion                                 = $checkVersion;
        $this->colors                                       = $colors;
        $this->columns                                      = $columns;
        $this->configurationFile                            = $configurationFile;
        $this->coverageFilter                               = $coverageFilter;
        $this->coverageClover                               = $coverageClover;
        $this->coverageCobertura                            = $coverageCobertura;
        $this->coverageCrap4J                               = $coverageCrap4J;
        $this->coverageHtml                                 = $coverageHtml;
        $this->coveragePhp                                  = $coveragePhp;
        $this->coverageText                                 = $coverageText;
        $this->coverageTextShowUncoveredFiles               = $coverageTextShowUncoveredFiles;
        $this->coverageTextShowOnlySummary                  = $coverageTextShowOnlySummary;
        $this->coverageXml                                  = $coverageXml;
        $this->pathCoverage                                 = $pathCoverage;
<<<<<<< HEAD
        $this->coverageCacheDirectory                       = $coverageCacheDirectory;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->warmCoverageCache                            = $warmCoverageCache;
        $this->defaultTimeLimit                             = $defaultTimeLimit;
        $this->disableCodeCoverageIgnore                    = $disableCodeCoverageIgnore;
        $this->disallowTestOutput                           = $disallowTestOutput;
        $this->enforceTimeLimit                             = $enforceTimeLimit;
        $this->excludeGroups                                = $excludeGroups;
        $this->executionOrder                               = $executionOrder;
        $this->executionOrderDefects                        = $executionOrderDefects;
        $this->failOnDeprecation                            = $failOnDeprecation;
<<<<<<< HEAD
=======
        $this->failOnPhpunitDeprecation                     = $failOnPhpunitDeprecation;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->failOnEmptyTestSuite                         = $failOnEmptyTestSuite;
        $this->failOnIncomplete                             = $failOnIncomplete;
        $this->failOnNotice                                 = $failOnNotice;
        $this->failOnRisky                                  = $failOnRisky;
        $this->failOnSkipped                                = $failOnSkipped;
        $this->failOnWarning                                = $failOnWarning;
        $this->stopOnDefect                                 = $stopOnDefect;
        $this->stopOnDeprecation                            = $stopOnDeprecation;
<<<<<<< HEAD
=======
        $this->specificDeprecationToStopOn                  = $specificDeprecationToStopOn;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->stopOnError                                  = $stopOnError;
        $this->stopOnFailure                                = $stopOnFailure;
        $this->stopOnIncomplete                             = $stopOnIncomplete;
        $this->stopOnNotice                                 = $stopOnNotice;
        $this->stopOnRisky                                  = $stopOnRisky;
        $this->stopOnSkipped                                = $stopOnSkipped;
        $this->stopOnWarning                                = $stopOnWarning;
        $this->filter                                       = $filter;
<<<<<<< HEAD
=======
        $this->excludeFilter                                = $excludeFilter;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->generateBaseline                             = $generateBaseline;
        $this->useBaseline                                  = $useBaseline;
        $this->ignoreBaseline                               = $ignoreBaseline;
        $this->generateConfiguration                        = $generateConfiguration;
        $this->migrateConfiguration                         = $migrateConfiguration;
        $this->groups                                       = $groups;
        $this->testsCovering                                = $testsCovering;
        $this->testsUsing                                   = $testsUsing;
<<<<<<< HEAD
=======
        $this->testsRequiringPhpExtension                   = $testsRequiringPhpExtension;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->help                                         = $help;
        $this->includePath                                  = $includePath;
        $this->iniSettings                                  = $iniSettings;
        $this->junitLogfile                                 = $junitLogfile;
        $this->listGroups                                   = $listGroups;
        $this->listSuites                                   = $listSuites;
<<<<<<< HEAD
=======
        $this->listTestFiles                                = $listTestFiles;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->listTests                                    = $listTests;
        $this->listTestsXml                                 = $listTestsXml;
        $this->noCoverage                                   = $noCoverage;
        $this->noExtensions                                 = $noExtensions;
        $this->noOutput                                     = $noOutput;
        $this->noProgress                                   = $noProgress;
        $this->noResults                                    = $noResults;
        $this->noLogging                                    = $noLogging;
        $this->processIsolation                             = $processIsolation;
        $this->randomOrderSeed                              = $randomOrderSeed;
        $this->reportUselessTests                           = $reportUselessTests;
        $this->resolveDependencies                          = $resolveDependencies;
        $this->reverseList                                  = $reverseList;
        $this->stderr                                       = $stderr;
        $this->strictCoverage                               = $strictCoverage;
        $this->teamcityLogfile                              = $teamcityLogfile;
        $this->testdoxHtmlFile                              = $testdoxHtmlFile;
        $this->testdoxTextFile                              = $testdoxTextFile;
        $this->testSuffixes                                 = $testSuffixes;
        $this->testSuite                                    = $testSuite;
        $this->excludeTestSuite                             = $excludeTestSuite;
        $this->useDefaultConfiguration                      = $useDefaultConfiguration;
        $this->displayDetailsOnIncompleteTests              = $displayDetailsOnIncompleteTests;
        $this->displayDetailsOnSkippedTests                 = $displayDetailsOnSkippedTests;
        $this->displayDetailsOnTestsThatTriggerDeprecations = $displayDetailsOnTestsThatTriggerDeprecations;
<<<<<<< HEAD
=======
        $this->displayDetailsOnPhpunitDeprecations          = $displayDetailsOnPhpunitDeprecations;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->displayDetailsOnTestsThatTriggerErrors       = $displayDetailsOnTestsThatTriggerErrors;
        $this->displayDetailsOnTestsThatTriggerNotices      = $displayDetailsOnTestsThatTriggerNotices;
        $this->displayDetailsOnTestsThatTriggerWarnings     = $displayDetailsOnTestsThatTriggerWarnings;
        $this->version                                      = $version;
        $this->logEventsText                                = $logEventsText;
        $this->logEventsVerboseText                         = $logEventsVerboseText;
        $this->teamCityPrinter                              = $printerTeamCity;
<<<<<<< HEAD
        $this->testdoxPrinter                               = $printerTestDox;
        $this->debug                                        = $debug;
    }

    /**
     * @psalm-return list<non-empty-string>
=======
        $this->testdoxPrinter                               = $testdoxPrinter;
        $this->testdoxPrinterSummary                        = $testdoxPrinterSummary;
        $this->debug                                        = $debug;
        $this->extensions                                   = $extensions;
    }

    /**
     * @return list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function arguments(): array
    {
        return $this->arguments;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->atLeastVersion
=======
     * @phpstan-assert-if-true !null $this->atLeastVersion
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasAtLeastVersion(): bool
    {
        return $this->atLeastVersion !== null;
    }

    /**
     * @throws Exception
     */
    public function atLeastVersion(): string
    {
        if (!$this->hasAtLeastVersion()) {
            throw new Exception;
        }

        return $this->atLeastVersion;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->backupGlobals
=======
     * @phpstan-assert-if-true !null $this->backupGlobals
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasBackupGlobals(): bool
    {
        return $this->backupGlobals !== null;
    }

    /**
     * @throws Exception
     */
    public function backupGlobals(): bool
    {
        if (!$this->hasBackupGlobals()) {
            throw new Exception;
        }

        return $this->backupGlobals;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->backupStaticProperties
=======
     * @phpstan-assert-if-true !null $this->backupStaticProperties
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasBackupStaticProperties(): bool
    {
        return $this->backupStaticProperties !== null;
    }

    /**
     * @throws Exception
     */
    public function backupStaticProperties(): bool
    {
        if (!$this->hasBackupStaticProperties()) {
            throw new Exception;
        }

        return $this->backupStaticProperties;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->beStrictAboutChangesToGlobalState
=======
     * @phpstan-assert-if-true !null $this->beStrictAboutChangesToGlobalState
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasBeStrictAboutChangesToGlobalState(): bool
    {
        return $this->beStrictAboutChangesToGlobalState !== null;
    }

    /**
     * @throws Exception
     */
    public function beStrictAboutChangesToGlobalState(): bool
    {
        if (!$this->hasBeStrictAboutChangesToGlobalState()) {
            throw new Exception;
        }

        return $this->beStrictAboutChangesToGlobalState;
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
     * @throws Exception
     */
    public function bootstrap(): string
    {
        if (!$this->hasBootstrap()) {
            throw new Exception;
        }

        return $this->bootstrap;
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
     * @throws Exception
     */
    public function cacheDirectory(): string
    {
        if (!$this->hasCacheDirectory()) {
            throw new Exception;
        }

        return $this->cacheDirectory;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->cacheResult
=======
     * @phpstan-assert-if-true !null $this->cacheResult
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCacheResult(): bool
    {
        return $this->cacheResult !== null;
    }

    /**
     * @throws Exception
     */
    public function cacheResult(): bool
    {
        if (!$this->hasCacheResult()) {
            throw new Exception;
        }

        return $this->cacheResult;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true !null $this->cacheResultFile
     *
     * @deprecated
     */
    public function hasCacheResultFile(): bool
    {
        return $this->cacheResultFile !== null;
    }

    /**
     * @throws Exception
     *
     * @deprecated
     */
    public function cacheResultFile(): string
    {
        if (!$this->hasCacheResultFile()) {
            throw new Exception;
        }

        return $this->cacheResultFile;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function checkVersion(): bool
    {
        return $this->checkVersion;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->colors
=======
     * @phpstan-assert-if-true !null $this->colors
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasColors(): bool
    {
        return $this->colors !== null;
    }

    /**
     * @throws Exception
     */
    public function colors(): string
    {
        if (!$this->hasColors()) {
            throw new Exception;
        }

        return $this->colors;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->columns
=======
     * @phpstan-assert-if-true !null $this->columns
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasColumns(): bool
    {
        return $this->columns !== null;
    }

    /**
     * @throws Exception
     */
    public function columns(): int|string
    {
        if (!$this->hasColumns()) {
            throw new Exception;
        }

        return $this->columns;
    }

    /**
<<<<<<< HEAD
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
     * @throws Exception
     */
    public function configurationFile(): string
    {
        if (!$this->hasConfigurationFile()) {
            throw new Exception;
        }

        return $this->configurationFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageFilter
=======
     * @phpstan-assert-if-true !null $this->coverageFilter
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageFilter(): bool
    {
        return $this->coverageFilter !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function coverageFilter(): array
    {
        if (!$this->hasCoverageFilter()) {
            throw new Exception;
        }

        return $this->coverageFilter;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageClover
=======
     * @phpstan-assert-if-true !null $this->coverageClover
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageClover(): bool
    {
        return $this->coverageClover !== null;
    }

    /**
     * @throws Exception
     */
    public function coverageClover(): string
    {
        if (!$this->hasCoverageClover()) {
            throw new Exception;
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
     * @throws Exception
     */
    public function coverageCobertura(): string
    {
        if (!$this->hasCoverageCobertura()) {
            throw new Exception;
        }

        return $this->coverageCobertura;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageCrap4J
=======
     * @phpstan-assert-if-true !null $this->coverageCrap4J
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageCrap4J(): bool
    {
        return $this->coverageCrap4J !== null;
    }

    /**
     * @throws Exception
     */
    public function coverageCrap4J(): string
    {
        if (!$this->hasCoverageCrap4J()) {
            throw new Exception;
        }

        return $this->coverageCrap4J;
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
     * @throws Exception
     */
    public function coverageHtml(): string
    {
        if (!$this->hasCoverageHtml()) {
            throw new Exception;
        }

        return $this->coverageHtml;
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
     * @throws Exception
     */
    public function coveragePhp(): string
    {
        if (!$this->hasCoveragePhp()) {
            throw new Exception;
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
     * @throws Exception
     */
    public function coverageText(): string
    {
        if (!$this->hasCoverageText()) {
            throw new Exception;
        }

        return $this->coverageText;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageTextShowUncoveredFiles
=======
     * @phpstan-assert-if-true !null $this->coverageTextShowUncoveredFiles
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageTextShowUncoveredFiles(): bool
    {
        return $this->coverageTextShowUncoveredFiles !== null;
    }

    /**
     * @throws Exception
     */
    public function coverageTextShowUncoveredFiles(): bool
    {
        if (!$this->hasCoverageTextShowUncoveredFiles()) {
            throw new Exception;
        }

        return $this->coverageTextShowUncoveredFiles;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->coverageTextShowOnlySummary
=======
     * @phpstan-assert-if-true !null $this->coverageTextShowOnlySummary
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCoverageTextShowOnlySummary(): bool
    {
        return $this->coverageTextShowOnlySummary !== null;
    }

    /**
     * @throws Exception
     */
    public function coverageTextShowOnlySummary(): bool
    {
        if (!$this->hasCoverageTextShowOnlySummary()) {
            throw new Exception;
        }

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
     * @throws Exception
     */
    public function coverageXml(): string
    {
        if (!$this->hasCoverageXml()) {
            throw new Exception;
        }

        return $this->coverageXml;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->pathCoverage
=======
     * @phpstan-assert-if-true !null $this->pathCoverage
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasPathCoverage(): bool
    {
        return $this->pathCoverage !== null;
    }

    /**
     * @throws Exception
     */
    public function pathCoverage(): bool
    {
        if (!$this->hasPathCoverage()) {
            throw new Exception;
        }

        return $this->pathCoverage;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true !null $this->coverageCacheDirectory
     *
     * @deprecated
     */
    public function hasCoverageCacheDirectory(): bool
    {
        return $this->coverageCacheDirectory !== null;
    }

    /**
     * @throws Exception
     *
     * @deprecated
     */
    public function coverageCacheDirectory(): string
    {
        if (!$this->hasCoverageCacheDirectory()) {
            throw new Exception;
        }

        return $this->coverageCacheDirectory;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function warmCoverageCache(): bool
    {
        return $this->warmCoverageCache;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->defaultTimeLimit
=======
     * @phpstan-assert-if-true !null $this->defaultTimeLimit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDefaultTimeLimit(): bool
    {
        return $this->defaultTimeLimit !== null;
    }

    /**
     * @throws Exception
     */
    public function defaultTimeLimit(): int
    {
        if (!$this->hasDefaultTimeLimit()) {
            throw new Exception;
        }

        return $this->defaultTimeLimit;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->disableCodeCoverageIgnore
=======
     * @phpstan-assert-if-true !null $this->disableCodeCoverageIgnore
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisableCodeCoverageIgnore(): bool
    {
        return $this->disableCodeCoverageIgnore !== null;
    }

    /**
     * @throws Exception
     */
    public function disableCodeCoverageIgnore(): bool
    {
        if (!$this->hasDisableCodeCoverageIgnore()) {
            throw new Exception;
        }

        return $this->disableCodeCoverageIgnore;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->disallowTestOutput
=======
     * @phpstan-assert-if-true !null $this->disallowTestOutput
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisallowTestOutput(): bool
    {
        return $this->disallowTestOutput !== null;
    }

    /**
     * @throws Exception
     */
    public function disallowTestOutput(): bool
    {
        if (!$this->hasDisallowTestOutput()) {
            throw new Exception;
        }

        return $this->disallowTestOutput;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->enforceTimeLimit
=======
     * @phpstan-assert-if-true !null $this->enforceTimeLimit
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasEnforceTimeLimit(): bool
    {
        return $this->enforceTimeLimit !== null;
    }

    /**
     * @throws Exception
     */
    public function enforceTimeLimit(): bool
    {
        if (!$this->hasEnforceTimeLimit()) {
            throw new Exception;
        }

        return $this->enforceTimeLimit;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->excludeGroups
=======
     * @phpstan-assert-if-true !null $this->excludeGroups
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasExcludeGroups(): bool
    {
        return $this->excludeGroups !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function excludeGroups(): array
    {
        if (!$this->hasExcludeGroups()) {
            throw new Exception;
        }

        return $this->excludeGroups;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->executionOrder
=======
     * @phpstan-assert-if-true !null $this->executionOrder
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasExecutionOrder(): bool
    {
        return $this->executionOrder !== null;
    }

    /**
     * @throws Exception
     */
    public function executionOrder(): int
    {
        if (!$this->hasExecutionOrder()) {
            throw new Exception;
        }

        return $this->executionOrder;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->executionOrderDefects
=======
     * @phpstan-assert-if-true !null $this->executionOrderDefects
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasExecutionOrderDefects(): bool
    {
        return $this->executionOrderDefects !== null;
    }

    /**
     * @throws Exception
     */
    public function executionOrderDefects(): int
    {
        if (!$this->hasExecutionOrderDefects()) {
            throw new Exception;
        }

        return $this->executionOrderDefects;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnDeprecation
=======
     * @phpstan-assert-if-true !null $this->failOnDeprecation
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnDeprecation(): bool
    {
        return $this->failOnDeprecation !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnDeprecation(): bool
    {
        if (!$this->hasFailOnDeprecation()) {
            throw new Exception;
        }

        return $this->failOnDeprecation;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnEmptyTestSuite
=======
     * @phpstan-assert-if-true !null $this->failOnPhpunitDeprecation
     */
    public function hasFailOnPhpunitDeprecation(): bool
    {
        return $this->failOnPhpunitDeprecation !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnPhpunitDeprecation(): bool
    {
        if (!$this->hasFailOnPhpunitDeprecation()) {
            throw new Exception;
        }

        return $this->failOnPhpunitDeprecation;
    }

    /**
     * @phpstan-assert-if-true !null $this->failOnEmptyTestSuite
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnEmptyTestSuite(): bool
    {
        return $this->failOnEmptyTestSuite !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnEmptyTestSuite(): bool
    {
        if (!$this->hasFailOnEmptyTestSuite()) {
            throw new Exception;
        }

        return $this->failOnEmptyTestSuite;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnIncomplete
=======
     * @phpstan-assert-if-true !null $this->failOnIncomplete
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnIncomplete(): bool
    {
        return $this->failOnIncomplete !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnIncomplete(): bool
    {
        if (!$this->hasFailOnIncomplete()) {
            throw new Exception;
        }

        return $this->failOnIncomplete;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnNotice
=======
     * @phpstan-assert-if-true !null $this->failOnNotice
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnNotice(): bool
    {
        return $this->failOnNotice !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnNotice(): bool
    {
        if (!$this->hasFailOnNotice()) {
            throw new Exception;
        }

        return $this->failOnNotice;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnRisky
=======
     * @phpstan-assert-if-true !null $this->failOnRisky
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnRisky(): bool
    {
        return $this->failOnRisky !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnRisky(): bool
    {
        if (!$this->hasFailOnRisky()) {
            throw new Exception;
        }

        return $this->failOnRisky;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnSkipped
=======
     * @phpstan-assert-if-true !null $this->failOnSkipped
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnSkipped(): bool
    {
        return $this->failOnSkipped !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnSkipped(): bool
    {
        if (!$this->hasFailOnSkipped()) {
            throw new Exception;
        }

        return $this->failOnSkipped;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->failOnWarning
=======
     * @phpstan-assert-if-true !null $this->failOnWarning
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasFailOnWarning(): bool
    {
        return $this->failOnWarning !== null;
    }

    /**
     * @throws Exception
     */
    public function failOnWarning(): bool
    {
        if (!$this->hasFailOnWarning()) {
            throw new Exception;
        }

        return $this->failOnWarning;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnDefect
=======
     * @phpstan-assert-if-true !null $this->stopOnDefect
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnDefect(): bool
    {
        return $this->stopOnDefect !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnDefect(): bool
    {
        if (!$this->hasStopOnDefect()) {
            throw new Exception;
        }

        return $this->stopOnDefect;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnDeprecation
=======
     * @phpstan-assert-if-true !null $this->stopOnDeprecation
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnDeprecation(): bool
    {
        return $this->stopOnDeprecation !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnDeprecation(): bool
    {
        if (!$this->hasStopOnDeprecation()) {
            throw new Exception;
        }

        return $this->stopOnDeprecation;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnError
=======
     * @phpstan-assert-if-true !null $this->specificDeprecationToStopOn
     */
    public function hasSpecificDeprecationToStopOn(): bool
    {
        return $this->specificDeprecationToStopOn !== null;
    }

    /**
     * @throws Exception
     */
    public function specificDeprecationToStopOn(): string
    {
        if (!$this->hasSpecificDeprecationToStopOn()) {
            throw new Exception;
        }

        return $this->specificDeprecationToStopOn;
    }

    /**
     * @phpstan-assert-if-true !null $this->stopOnError
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnError(): bool
    {
        return $this->stopOnError !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnError(): bool
    {
        if (!$this->hasStopOnError()) {
            throw new Exception;
        }

        return $this->stopOnError;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnFailure
=======
     * @phpstan-assert-if-true !null $this->stopOnFailure
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnFailure(): bool
    {
        return $this->stopOnFailure !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnFailure(): bool
    {
        if (!$this->hasStopOnFailure()) {
            throw new Exception;
        }

        return $this->stopOnFailure;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnIncomplete
=======
     * @phpstan-assert-if-true !null $this->stopOnIncomplete
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnIncomplete(): bool
    {
        return $this->stopOnIncomplete !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnIncomplete(): bool
    {
        if (!$this->hasStopOnIncomplete()) {
            throw new Exception;
        }

        return $this->stopOnIncomplete;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnNotice
=======
     * @phpstan-assert-if-true !null $this->stopOnNotice
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnNotice(): bool
    {
        return $this->stopOnNotice !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnNotice(): bool
    {
        if (!$this->hasStopOnNotice()) {
            throw new Exception;
        }

        return $this->stopOnNotice;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnRisky
=======
     * @phpstan-assert-if-true !null $this->stopOnRisky
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnRisky(): bool
    {
        return $this->stopOnRisky !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnRisky(): bool
    {
        if (!$this->hasStopOnRisky()) {
            throw new Exception;
        }

        return $this->stopOnRisky;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnSkipped
=======
     * @phpstan-assert-if-true !null $this->stopOnSkipped
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnSkipped(): bool
    {
        return $this->stopOnSkipped !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnSkipped(): bool
    {
        if (!$this->hasStopOnSkipped()) {
            throw new Exception;
        }

        return $this->stopOnSkipped;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stopOnWarning
=======
     * @phpstan-assert-if-true !null $this->stopOnWarning
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStopOnWarning(): bool
    {
        return $this->stopOnWarning !== null;
    }

    /**
     * @throws Exception
     */
    public function stopOnWarning(): bool
    {
        if (!$this->hasStopOnWarning()) {
            throw new Exception;
        }

        return $this->stopOnWarning;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->filter
=======
     * @phpstan-assert-if-true !null $this->excludeFilter
     */
    public function hasExcludeFilter(): bool
    {
        return $this->excludeFilter !== null;
    }

    /**
     * @throws Exception
     */
    public function excludeFilter(): string
    {
        if (!$this->hasExcludeFilter()) {
            throw new Exception;
        }

        return $this->excludeFilter;
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
     * @throws Exception
     */
    public function filter(): string
    {
        if (!$this->hasFilter()) {
            throw new Exception;
        }

        return $this->filter;
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
     * @throws Exception
     */
    public function generateBaseline(): string
    {
        if (!$this->hasGenerateBaseline()) {
            throw new Exception;
        }

        return $this->generateBaseline;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->useBaseline
=======
     * @phpstan-assert-if-true !null $this->useBaseline
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasUseBaseline(): bool
    {
        return $this->useBaseline !== null;
    }

    /**
     * @throws Exception
     */
    public function useBaseline(): string
    {
        if (!$this->hasUseBaseline()) {
            throw new Exception;
        }

        return $this->useBaseline;
    }

    public function ignoreBaseline(): bool
    {
        return $this->ignoreBaseline;
    }

    public function generateConfiguration(): bool
    {
        return $this->generateConfiguration;
    }

    public function migrateConfiguration(): bool
    {
        return $this->migrateConfiguration;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->groups
=======
     * @phpstan-assert-if-true !null $this->groups
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasGroups(): bool
    {
        return $this->groups !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function groups(): array
    {
        if (!$this->hasGroups()) {
            throw new Exception;
        }

        return $this->groups;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testsCovering
=======
     * @phpstan-assert-if-true !null $this->testsCovering
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestsCovering(): bool
    {
        return $this->testsCovering !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testsCovering(): array
    {
        if (!$this->hasTestsCovering()) {
            throw new Exception;
        }

        return $this->testsCovering;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testsUsing
=======
     * @phpstan-assert-if-true !null $this->testsUsing
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestsUsing(): bool
    {
        return $this->testsUsing !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testsUsing(): array
    {
        if (!$this->hasTestsUsing()) {
            throw new Exception;
        }

        return $this->testsUsing;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true !null $this->testsRequiringPhpExtension
     */
    public function hasTestsRequiringPhpExtension(): bool
    {
        return $this->testsRequiringPhpExtension !== null;
    }

    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function testsRequiringPhpExtension(): array
    {
        if (!$this->hasTestsRequiringPhpExtension()) {
            throw new Exception;
        }

        return $this->testsRequiringPhpExtension;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function help(): bool
    {
        return $this->help;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->includePath
=======
     * @phpstan-assert-if-true !null $this->includePath
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasIncludePath(): bool
    {
        return $this->includePath !== null;
    }

    /**
     * @throws Exception
     */
    public function includePath(): string
    {
        if (!$this->hasIncludePath()) {
            throw new Exception;
        }

        return $this->includePath;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->iniSettings
=======
     * @phpstan-assert-if-true !null $this->iniSettings
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasIniSettings(): bool
    {
        return $this->iniSettings !== null;
    }

    /**
     * @throws Exception
<<<<<<< HEAD
=======
     *
     * @return non-empty-array<non-empty-string, non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function iniSettings(): array
    {
        if (!$this->hasIniSettings()) {
            throw new Exception;
        }

        return $this->iniSettings;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->junitLogfile
=======
     * @phpstan-assert-if-true !null $this->junitLogfile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasJunitLogfile(): bool
    {
        return $this->junitLogfile !== null;
    }

    /**
     * @throws Exception
     */
    public function junitLogfile(): string
    {
        if (!$this->hasJunitLogfile()) {
            throw new Exception;
        }

        return $this->junitLogfile;
    }

    public function listGroups(): bool
    {
        return $this->listGroups;
    }

    public function listSuites(): bool
    {
        return $this->listSuites;
    }

<<<<<<< HEAD
=======
    public function listTestFiles(): bool
    {
        return $this->listTestFiles;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function listTests(): bool
    {
        return $this->listTests;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->listTestsXml
=======
     * @phpstan-assert-if-true !null $this->listTestsXml
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasListTestsXml(): bool
    {
        return $this->listTestsXml !== null;
    }

    /**
     * @throws Exception
     */
    public function listTestsXml(): string
    {
        if (!$this->hasListTestsXml()) {
            throw new Exception;
        }

        return $this->listTestsXml;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noCoverage
=======
     * @phpstan-assert-if-true !null $this->noCoverage
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoCoverage(): bool
    {
        return $this->noCoverage !== null;
    }

    /**
     * @throws Exception
     */
    public function noCoverage(): bool
    {
        if (!$this->hasNoCoverage()) {
            throw new Exception;
        }

        return $this->noCoverage;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noExtensions
=======
     * @phpstan-assert-if-true !null $this->noExtensions
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoExtensions(): bool
    {
        return $this->noExtensions !== null;
    }

    /**
     * @throws Exception
     */
    public function noExtensions(): bool
    {
        if (!$this->hasNoExtensions()) {
            throw new Exception;
        }

        return $this->noExtensions;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noOutput
=======
     * @phpstan-assert-if-true !null $this->noOutput
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoOutput(): bool
    {
        return $this->noOutput !== null;
    }

    /**
     * @throws Exception
     */
    public function noOutput(): bool
    {
        if ($this->noOutput === null) {
            throw new Exception;
        }

        return $this->noOutput;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noProgress
=======
     * @phpstan-assert-if-true !null $this->noProgress
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoProgress(): bool
    {
        return $this->noProgress !== null;
    }

    /**
     * @throws Exception
     */
    public function noProgress(): bool
    {
        if ($this->noProgress === null) {
            throw new Exception;
        }

        return $this->noProgress;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noResults
=======
     * @phpstan-assert-if-true !null $this->noResults
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoResults(): bool
    {
        return $this->noResults !== null;
    }

    /**
     * @throws Exception
     */
    public function noResults(): bool
    {
        if ($this->noResults === null) {
            throw new Exception;
        }

        return $this->noResults;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->noLogging
=======
     * @phpstan-assert-if-true !null $this->noLogging
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasNoLogging(): bool
    {
        return $this->noLogging !== null;
    }

    /**
     * @throws Exception
     */
    public function noLogging(): bool
    {
        if (!$this->hasNoLogging()) {
            throw new Exception;
        }

        return $this->noLogging;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->processIsolation
=======
     * @phpstan-assert-if-true !null $this->processIsolation
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasProcessIsolation(): bool
    {
        return $this->processIsolation !== null;
    }

    /**
     * @throws Exception
     */
    public function processIsolation(): bool
    {
        if (!$this->hasProcessIsolation()) {
            throw new Exception;
        }

        return $this->processIsolation;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->randomOrderSeed
=======
     * @phpstan-assert-if-true !null $this->randomOrderSeed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasRandomOrderSeed(): bool
    {
        return $this->randomOrderSeed !== null;
    }

    /**
     * @throws Exception
     */
    public function randomOrderSeed(): int
    {
        if (!$this->hasRandomOrderSeed()) {
            throw new Exception;
        }

        return $this->randomOrderSeed;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->reportUselessTests
=======
     * @phpstan-assert-if-true !null $this->reportUselessTests
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasReportUselessTests(): bool
    {
        return $this->reportUselessTests !== null;
    }

    /**
     * @throws Exception
     */
    public function reportUselessTests(): bool
    {
        if (!$this->hasReportUselessTests()) {
            throw new Exception;
        }

        return $this->reportUselessTests;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->resolveDependencies
=======
     * @phpstan-assert-if-true !null $this->resolveDependencies
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasResolveDependencies(): bool
    {
        return $this->resolveDependencies !== null;
    }

    /**
     * @throws Exception
     */
    public function resolveDependencies(): bool
    {
        if (!$this->hasResolveDependencies()) {
            throw new Exception;
        }

        return $this->resolveDependencies;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->reverseList
=======
     * @phpstan-assert-if-true !null $this->reverseList
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasReverseList(): bool
    {
        return $this->reverseList !== null;
    }

    /**
     * @throws Exception
     */
    public function reverseList(): bool
    {
        if (!$this->hasReverseList()) {
            throw new Exception;
        }

        return $this->reverseList;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->stderr
=======
     * @phpstan-assert-if-true !null $this->stderr
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStderr(): bool
    {
        return $this->stderr !== null;
    }

    /**
     * @throws Exception
     */
    public function stderr(): bool
    {
        if (!$this->hasStderr()) {
            throw new Exception;
        }

        return $this->stderr;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->strictCoverage
=======
     * @phpstan-assert-if-true !null $this->strictCoverage
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasStrictCoverage(): bool
    {
        return $this->strictCoverage !== null;
    }

    /**
     * @throws Exception
     */
    public function strictCoverage(): bool
    {
        if (!$this->hasStrictCoverage()) {
            throw new Exception;
        }

        return $this->strictCoverage;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->teamcityLogfile
=======
     * @phpstan-assert-if-true !null $this->teamcityLogfile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTeamcityLogfile(): bool
    {
        return $this->teamcityLogfile !== null;
    }

    /**
     * @throws Exception
     */
    public function teamcityLogfile(): string
    {
        if (!$this->hasTeamcityLogfile()) {
            throw new Exception;
        }

        return $this->teamcityLogfile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->teamcityPrinter
=======
     * @phpstan-assert-if-true !null $this->teamCityPrinter
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTeamCityPrinter(): bool
    {
        return $this->teamCityPrinter !== null;
    }

    /**
     * @throws Exception
     */
    public function teamCityPrinter(): bool
    {
        if (!$this->hasTeamCityPrinter()) {
            throw new Exception;
        }

        return $this->teamCityPrinter;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testdoxHtmlFile
=======
     * @phpstan-assert-if-true !null $this->testdoxHtmlFile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestdoxHtmlFile(): bool
    {
        return $this->testdoxHtmlFile !== null;
    }

    /**
     * @throws Exception
     */
    public function testdoxHtmlFile(): string
    {
        if (!$this->hasTestdoxHtmlFile()) {
            throw new Exception;
        }

        return $this->testdoxHtmlFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testdoxTextFile
=======
     * @phpstan-assert-if-true !null $this->testdoxTextFile
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestdoxTextFile(): bool
    {
        return $this->testdoxTextFile !== null;
    }

    /**
     * @throws Exception
     */
    public function testdoxTextFile(): string
    {
        if (!$this->hasTestdoxTextFile()) {
            throw new Exception;
        }

        return $this->testdoxTextFile;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testdoxPrinter
=======
     * @phpstan-assert-if-true !null $this->testdoxPrinter
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestDoxPrinter(): bool
    {
        return $this->testdoxPrinter !== null;
    }

    /**
     * @throws Exception
     */
    public function testdoxPrinter(): bool
    {
        if (!$this->hasTestdoxPrinter()) {
            throw new Exception;
        }

        return $this->testdoxPrinter;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testSuffixes
=======
     * @phpstan-assert-if-true !null $this->testdoxPrinterSummary
     */
    public function hasTestDoxPrinterSummary(): bool
    {
        return $this->testdoxPrinterSummary !== null;
    }

    /**
     * @throws Exception
     */
    public function testdoxPrinterSummary(): bool
    {
        if (!$this->hasTestdoxPrinterSummary()) {
            throw new Exception;
        }

        return $this->testdoxPrinterSummary;
    }

    /**
     * @phpstan-assert-if-true !null $this->testSuffixes
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestSuffixes(): bool
    {
        return $this->testSuffixes !== null;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-list<non-empty-string>
     *
     * @throws Exception
=======
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function testSuffixes(): array
    {
        if (!$this->hasTestSuffixes()) {
            throw new Exception;
        }

        return $this->testSuffixes;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->testSuite
=======
     * @phpstan-assert-if-true !null $this->testSuite
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasTestSuite(): bool
    {
        return $this->testSuite !== null;
    }

    /**
     * @throws Exception
     */
    public function testSuite(): string
    {
        if (!$this->hasTestSuite()) {
            throw new Exception;
        }

        return $this->testSuite;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->excludedTestSuite
=======
     * @phpstan-assert-if-true !null $this->excludeTestSuite
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasExcludedTestSuite(): bool
    {
        return $this->excludeTestSuite !== null;
    }

    /**
     * @throws Exception
     */
    public function excludedTestSuite(): string
    {
        if (!$this->hasExcludedTestSuite()) {
            throw new Exception;
        }

        return $this->excludeTestSuite;
    }

    public function useDefaultConfiguration(): bool
    {
        return $this->useDefaultConfiguration;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnIncompleteTests
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnIncompleteTests
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnIncompleteTests(): bool
    {
        return $this->displayDetailsOnIncompleteTests !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnIncompleteTests(): bool
    {
        if (!$this->hasDisplayDetailsOnIncompleteTests()) {
            throw new Exception;
        }

        return $this->displayDetailsOnIncompleteTests;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnSkippedTests
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnSkippedTests
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnSkippedTests(): bool
    {
        return $this->displayDetailsOnSkippedTests !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnSkippedTests(): bool
    {
        if (!$this->hasDisplayDetailsOnSkippedTests()) {
            throw new Exception;
        }

        return $this->displayDetailsOnSkippedTests;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnTestsThatTriggerDeprecations
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerDeprecations
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnTestsThatTriggerDeprecations(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerDeprecations !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerDeprecations(): bool
    {
        if (!$this->hasDisplayDetailsOnTestsThatTriggerDeprecations()) {
            throw new Exception;
        }

        return $this->displayDetailsOnTestsThatTriggerDeprecations;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnTestsThatTriggerErrors
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnPhpunitDeprecations
     */
    public function hasDisplayDetailsOnPhpunitDeprecations(): bool
    {
        return $this->displayDetailsOnPhpunitDeprecations !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnPhpunitDeprecations(): bool
    {
        if (!$this->hasDisplayDetailsOnPhpunitDeprecations()) {
            throw new Exception;
        }

        return $this->displayDetailsOnPhpunitDeprecations;
    }

    /**
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerErrors
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnTestsThatTriggerErrors(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerErrors !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerErrors(): bool
    {
        if (!$this->hasDisplayDetailsOnTestsThatTriggerErrors()) {
            throw new Exception;
        }

        return $this->displayDetailsOnTestsThatTriggerErrors;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnTestsThatTriggerNotices
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerNotices
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnTestsThatTriggerNotices(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerNotices !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerNotices(): bool
    {
        if (!$this->hasDisplayDetailsOnTestsThatTriggerNotices()) {
            throw new Exception;
        }

        return $this->displayDetailsOnTestsThatTriggerNotices;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->displayDetailsOnTestsThatTriggerWarnings
=======
     * @phpstan-assert-if-true !null $this->displayDetailsOnTestsThatTriggerWarnings
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasDisplayDetailsOnTestsThatTriggerWarnings(): bool
    {
        return $this->displayDetailsOnTestsThatTriggerWarnings !== null;
    }

    /**
     * @throws Exception
     */
    public function displayDetailsOnTestsThatTriggerWarnings(): bool
    {
        if (!$this->hasDisplayDetailsOnTestsThatTriggerWarnings()) {
            throw new Exception;
        }

        return $this->displayDetailsOnTestsThatTriggerWarnings;
    }

    public function version(): bool
    {
        return $this->version;
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
     * @throws Exception
     */
    public function logEventsText(): string
    {
        if (!$this->hasLogEventsText()) {
            throw new Exception;
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
     * @throws Exception
     */
    public function logEventsVerboseText(): string
    {
        if (!$this->hasLogEventsVerboseText()) {
            throw new Exception;
        }

        return $this->logEventsVerboseText;
    }

    public function debug(): bool
    {
        return $this->debug;
    }
<<<<<<< HEAD
=======

    /**
     * @phpstan-assert-if-true !null $this->extensions
     */
    public function hasExtensions(): bool
    {
        return $this->extensions !== null;
    }

    /**
     * @throws Exception
     *
     * @return non-empty-list<non-empty-string>
     */
    public function extensions(): array
    {
        if (!$this->hasExtensions()) {
            throw new Exception;
        }

        return $this->extensions;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}

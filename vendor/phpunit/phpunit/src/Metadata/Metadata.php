<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

use PHPUnit\Metadata\Version\Requirement;
<<<<<<< HEAD

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Metadata
=======
use PHPUnit\Runner\Extension\Extension;

/**
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Metadata
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    private const CLASS_LEVEL  = 0;
    private const METHOD_LEVEL = 1;

    /**
<<<<<<< HEAD
     * @psalm-var 0|1
     */
    private readonly int $level;

    public static function after(): After
    {
        return new After(self::METHOD_LEVEL);
    }

    public static function afterClass(): AfterClass
    {
        return new AfterClass(self::METHOD_LEVEL);
=======
     * @var 0|1
     */
    private int $level;

    public static function after(int $priority): After
    {
        return new After(self::METHOD_LEVEL, $priority);
    }

    public static function afterClass(int $priority): AfterClass
    {
        return new AfterClass(self::METHOD_LEVEL, $priority);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public static function backupGlobalsOnClass(bool $enabled): BackupGlobals
    {
        return new BackupGlobals(self::CLASS_LEVEL, $enabled);
    }

    public static function backupGlobalsOnMethod(bool $enabled): BackupGlobals
    {
        return new BackupGlobals(self::METHOD_LEVEL, $enabled);
    }

    public static function backupStaticPropertiesOnClass(bool $enabled): BackupStaticProperties
    {
        return new BackupStaticProperties(self::CLASS_LEVEL, $enabled);
    }

    public static function backupStaticPropertiesOnMethod(bool $enabled): BackupStaticProperties
    {
        return new BackupStaticProperties(self::METHOD_LEVEL, $enabled);
    }

<<<<<<< HEAD
    public static function before(): Before
    {
        return new Before(self::METHOD_LEVEL);
    }

    public static function beforeClass(): BeforeClass
    {
        return new BeforeClass(self::METHOD_LEVEL);
    }

    /**
     * @psalm-param class-string $className
=======
    public static function before(int $priority): Before
    {
        return new Before(self::METHOD_LEVEL, $priority);
    }

    public static function beforeClass(int $priority): BeforeClass
    {
        return new BeforeClass(self::METHOD_LEVEL, $priority);
    }

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function coversClass(string $className): CoversClass
    {
        return new CoversClass(self::CLASS_LEVEL, $className);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $functionName
=======
     * @param trait-string $traitName
     */
    public static function coversTrait(string $traitName): CoversTrait
    {
        return new CoversTrait(self::CLASS_LEVEL, $traitName);
    }

    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function coversMethod(string $className, string $methodName): CoversMethod
    {
        return new CoversMethod(self::CLASS_LEVEL, $className, $methodName);
    }

    /**
     * @param non-empty-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function coversFunction(string $functionName): CoversFunction
    {
        return new CoversFunction(self::CLASS_LEVEL, $functionName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $target
=======
     * @param non-empty-string $target
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function coversOnClass(string $target): Covers
    {
        return new Covers(self::CLASS_LEVEL, $target);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $target
=======
     * @param non-empty-string $target
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function coversOnMethod(string $target): Covers
    {
        return new Covers(self::METHOD_LEVEL, $target);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function coversDefaultClass(string $className): CoversDefaultClass
    {
        return new CoversDefaultClass(self::CLASS_LEVEL, $className);
    }

    public static function coversNothingOnClass(): CoversNothing
    {
        return new CoversNothing(self::CLASS_LEVEL);
    }

    public static function coversNothingOnMethod(): CoversNothing
    {
        return new CoversNothing(self::METHOD_LEVEL);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function dataProvider(string $className, string $methodName): DataProvider
    {
        return new DataProvider(self::METHOD_LEVEL, $className, $methodName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function dependsOnClass(string $className, bool $deepClone, bool $shallowClone): DependsOnClass
    {
        return new DependsOnClass(self::METHOD_LEVEL, $className, $deepClone, $shallowClone);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function dependsOnMethod(string $className, string $methodName, bool $deepClone, bool $shallowClone): DependsOnMethod
    {
        return new DependsOnMethod(self::METHOD_LEVEL, $className, $methodName, $deepClone, $shallowClone);
    }

<<<<<<< HEAD
=======
    public static function disableReturnValueGenerationForTestDoubles(): DisableReturnValueGenerationForTestDoubles
    {
        return new DisableReturnValueGenerationForTestDoubles(self::CLASS_LEVEL);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public static function doesNotPerformAssertionsOnClass(): DoesNotPerformAssertions
    {
        return new DoesNotPerformAssertions(self::CLASS_LEVEL);
    }

    public static function doesNotPerformAssertionsOnMethod(): DoesNotPerformAssertions
    {
        return new DoesNotPerformAssertions(self::METHOD_LEVEL);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $globalVariableName
=======
     * @param non-empty-string $globalVariableName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function excludeGlobalVariableFromBackupOnClass(string $globalVariableName): ExcludeGlobalVariableFromBackup
    {
        return new ExcludeGlobalVariableFromBackup(self::CLASS_LEVEL, $globalVariableName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $globalVariableName
=======
     * @param non-empty-string $globalVariableName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function excludeGlobalVariableFromBackupOnMethod(string $globalVariableName): ExcludeGlobalVariableFromBackup
    {
        return new ExcludeGlobalVariableFromBackup(self::METHOD_LEVEL, $globalVariableName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $propertyName
=======
     * @param class-string     $className
     * @param non-empty-string $propertyName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function excludeStaticPropertyFromBackupOnClass(string $className, string $propertyName): ExcludeStaticPropertyFromBackup
    {
        return new ExcludeStaticPropertyFromBackup(self::CLASS_LEVEL, $className, $propertyName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $propertyName
=======
     * @param class-string     $className
     * @param non-empty-string $propertyName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function excludeStaticPropertyFromBackupOnMethod(string $className, string $propertyName): ExcludeStaticPropertyFromBackup
    {
        return new ExcludeStaticPropertyFromBackup(self::METHOD_LEVEL, $className, $propertyName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $groupName
=======
     * @param non-empty-string $groupName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function groupOnClass(string $groupName): Group
    {
        return new Group(self::CLASS_LEVEL, $groupName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $groupName
=======
     * @param non-empty-string $groupName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function groupOnMethod(string $groupName): Group
    {
        return new Group(self::METHOD_LEVEL, $groupName);
    }

    public static function ignoreDeprecationsOnClass(): IgnoreDeprecations
    {
        return new IgnoreDeprecations(self::CLASS_LEVEL);
    }

    public static function ignoreDeprecationsOnMethod(): IgnoreDeprecations
    {
        return new IgnoreDeprecations(self::METHOD_LEVEL);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     */
    public static function ignoreClassForCodeCoverage(string $className): IgnoreClassForCodeCoverage
    {
        return new IgnoreClassForCodeCoverage(self::CLASS_LEVEL, $className);
    }

    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     */
    public static function ignoreMethodForCodeCoverage(string $className, string $methodName): IgnoreMethodForCodeCoverage
    {
        return new IgnoreMethodForCodeCoverage(self::CLASS_LEVEL, $className, $methodName);
    }

    /**
     * @psalm-param non-empty-string $functionName
     */
    public static function ignoreFunctionForCodeCoverage(string $functionName): IgnoreFunctionForCodeCoverage
    {
        return new IgnoreFunctionForCodeCoverage(self::CLASS_LEVEL, $functionName);
    }

    public static function postCondition(): PostCondition
    {
        return new PostCondition(self::METHOD_LEVEL);
    }

    public static function preCondition(): PreCondition
    {
        return new PreCondition(self::METHOD_LEVEL);
=======
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public static function ignorePhpunitDeprecationsOnClass(): IgnorePhpunitDeprecations
    {
        return new IgnorePhpunitDeprecations(self::CLASS_LEVEL);
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public static function ignorePhpunitDeprecationsOnMethod(): IgnorePhpunitDeprecations
    {
        return new IgnorePhpunitDeprecations(self::METHOD_LEVEL);
    }

    public static function postCondition(int $priority): PostCondition
    {
        return new PostCondition(self::METHOD_LEVEL, $priority);
    }

    public static function preCondition(int $priority): PreCondition
    {
        return new PreCondition(self::METHOD_LEVEL, $priority);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public static function preserveGlobalStateOnClass(bool $enabled): PreserveGlobalState
    {
        return new PreserveGlobalState(self::CLASS_LEVEL, $enabled);
    }

    public static function preserveGlobalStateOnMethod(bool $enabled): PreserveGlobalState
    {
        return new PreserveGlobalState(self::METHOD_LEVEL, $enabled);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $functionName
=======
     * @param non-empty-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresFunctionOnClass(string $functionName): RequiresFunction
    {
        return new RequiresFunction(self::CLASS_LEVEL, $functionName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $functionName
=======
     * @param non-empty-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresFunctionOnMethod(string $functionName): RequiresFunction
    {
        return new RequiresFunction(self::METHOD_LEVEL, $functionName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresMethodOnClass(string $className, string $methodName): RequiresMethod
    {
        return new RequiresMethod(self::CLASS_LEVEL, $className, $methodName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresMethodOnMethod(string $className, string $methodName): RequiresMethod
    {
        return new RequiresMethod(self::METHOD_LEVEL, $className, $methodName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $operatingSystem
=======
     * @param non-empty-string $operatingSystem
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresOperatingSystemOnClass(string $operatingSystem): RequiresOperatingSystem
    {
        return new RequiresOperatingSystem(self::CLASS_LEVEL, $operatingSystem);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $operatingSystem
=======
     * @param non-empty-string $operatingSystem
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresOperatingSystemOnMethod(string $operatingSystem): RequiresOperatingSystem
    {
        return new RequiresOperatingSystem(self::METHOD_LEVEL, $operatingSystem);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $operatingSystemFamily
=======
     * @param non-empty-string $operatingSystemFamily
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresOperatingSystemFamilyOnClass(string $operatingSystemFamily): RequiresOperatingSystemFamily
    {
        return new RequiresOperatingSystemFamily(self::CLASS_LEVEL, $operatingSystemFamily);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $operatingSystemFamily
=======
     * @param non-empty-string $operatingSystemFamily
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresOperatingSystemFamilyOnMethod(string $operatingSystemFamily): RequiresOperatingSystemFamily
    {
        return new RequiresOperatingSystemFamily(self::METHOD_LEVEL, $operatingSystemFamily);
    }

    public static function requiresPhpOnClass(Requirement $versionRequirement): RequiresPhp
    {
        return new RequiresPhp(self::CLASS_LEVEL, $versionRequirement);
    }

    public static function requiresPhpOnMethod(Requirement $versionRequirement): RequiresPhp
    {
        return new RequiresPhp(self::METHOD_LEVEL, $versionRequirement);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $extension
=======
     * @param non-empty-string $extension
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresPhpExtensionOnClass(string $extension, ?Requirement $versionRequirement): RequiresPhpExtension
    {
        return new RequiresPhpExtension(self::CLASS_LEVEL, $extension, $versionRequirement);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $extension
=======
     * @param non-empty-string $extension
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresPhpExtensionOnMethod(string $extension, ?Requirement $versionRequirement): RequiresPhpExtension
    {
        return new RequiresPhpExtension(self::METHOD_LEVEL, $extension, $versionRequirement);
    }

    public static function requiresPhpunitOnClass(Requirement $versionRequirement): RequiresPhpunit
    {
        return new RequiresPhpunit(self::CLASS_LEVEL, $versionRequirement);
    }

    public static function requiresPhpunitOnMethod(Requirement $versionRequirement): RequiresPhpunit
    {
        return new RequiresPhpunit(self::METHOD_LEVEL, $versionRequirement);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $setting
     * @psalm-param non-empty-string $value
=======
     * @param class-string<Extension> $extensionClass
     */
    public static function requiresPhpunitExtensionOnClass(string $extensionClass): RequiresPhpunitExtension
    {
        return new RequiresPhpunitExtension(self::CLASS_LEVEL, $extensionClass);
    }

    /**
     * @param class-string<Extension> $extensionClass
     */
    public static function requiresPhpunitExtensionOnMethod(string $extensionClass): RequiresPhpunitExtension
    {
        return new RequiresPhpunitExtension(self::METHOD_LEVEL, $extensionClass);
    }

    /**
     * @param non-empty-string $setting
     * @param non-empty-string $value
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresSettingOnClass(string $setting, string $value): RequiresSetting
    {
        return new RequiresSetting(self::CLASS_LEVEL, $setting, $value);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $setting
     * @psalm-param non-empty-string $value
=======
     * @param non-empty-string $setting
     * @param non-empty-string $value
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function requiresSettingOnMethod(string $setting, string $value): RequiresSetting
    {
        return new RequiresSetting(self::METHOD_LEVEL, $setting, $value);
    }

    public static function runClassInSeparateProcess(): RunClassInSeparateProcess
    {
        return new RunClassInSeparateProcess(self::CLASS_LEVEL);
    }

    public static function runTestsInSeparateProcesses(): RunTestsInSeparateProcesses
    {
        return new RunTestsInSeparateProcesses(self::CLASS_LEVEL);
    }

    public static function runInSeparateProcess(): RunInSeparateProcess
    {
        return new RunInSeparateProcess(self::METHOD_LEVEL);
    }

    public static function test(): Test
    {
        return new Test(self::METHOD_LEVEL);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $text
=======
     * @param non-empty-string $text
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function testDoxOnClass(string $text): TestDox
    {
        return new TestDox(self::CLASS_LEVEL, $text);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $text
=======
     * @param non-empty-string $text
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function testDoxOnMethod(string $text): TestDox
    {
        return new TestDox(self::METHOD_LEVEL, $text);
    }

<<<<<<< HEAD
    public static function testWith(array $data): TestWith
    {
        return new TestWith(self::METHOD_LEVEL, $data);
    }

    /**
     * @psalm-param class-string $className
=======
    /**
     * @param array<array<mixed>> $data
     * @param ?non-empty-string   $name
     */
    public static function testWith(array $data, ?string $name = null): TestWith
    {
        return new TestWith(self::METHOD_LEVEL, $data, $name);
    }

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function usesClass(string $className): UsesClass
    {
        return new UsesClass(self::CLASS_LEVEL, $className);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $functionName
=======
     * @param trait-string $traitName
     */
    public static function UsesTrait(string $traitName): UsesTrait
    {
        return new UsesTrait(self::CLASS_LEVEL, $traitName);
    }

    /**
     * @param non-empty-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function usesFunction(string $functionName): UsesFunction
    {
        return new UsesFunction(self::CLASS_LEVEL, $functionName);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $target
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public static function usesMethod(string $className, string $methodName): UsesMethod
    {
        return new UsesMethod(self::CLASS_LEVEL, $className, $methodName);
    }

    /**
     * @param non-empty-string $target
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function usesOnClass(string $target): Uses
    {
        return new Uses(self::CLASS_LEVEL, $target);
    }

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $target
=======
     * @param non-empty-string $target
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function usesOnMethod(string $target): Uses
    {
        return new Uses(self::METHOD_LEVEL, $target);
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function usesDefaultClass(string $className): UsesDefaultClass
    {
        return new UsesDefaultClass(self::CLASS_LEVEL, $className);
    }

    public static function withoutErrorHandler(): WithoutErrorHandler
    {
        return new WithoutErrorHandler(self::METHOD_LEVEL);
    }

    /**
<<<<<<< HEAD
     * @psalm-param 0|1 $level
=======
     * @param 0|1 $level
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level)
    {
        $this->level = $level;
    }

    public function isClassLevel(): bool
    {
        return $this->level === self::CLASS_LEVEL;
    }

    public function isMethodLevel(): bool
    {
        return $this->level === self::METHOD_LEVEL;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true After $this
=======
     * @phpstan-assert-if-true After $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isAfter(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true AfterClass $this
=======
     * @phpstan-assert-if-true AfterClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isAfterClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true BackupGlobals $this
=======
     * @phpstan-assert-if-true BackupGlobals $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isBackupGlobals(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true BackupStaticProperties $this
=======
     * @phpstan-assert-if-true BackupStaticProperties $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isBackupStaticProperties(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true BeforeClass $this
=======
     * @phpstan-assert-if-true BeforeClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isBeforeClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Before $this
=======
     * @phpstan-assert-if-true Before $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isBefore(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Covers $this
=======
     * @phpstan-assert-if-true Covers $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isCovers(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true CoversClass $this
=======
     * @phpstan-assert-if-true CoversClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isCoversClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true CoversDefaultClass $this
=======
     * @phpstan-assert-if-true CoversDefaultClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isCoversDefaultClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true CoversFunction $this
=======
     * @phpstan-assert-if-true CoversTrait $this
     */
    public function isCoversTrait(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true CoversFunction $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isCoversFunction(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true CoversNothing $this
=======
     * @phpstan-assert-if-true CoversMethod $this
     */
    public function isCoversMethod(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true CoversNothing $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isCoversNothing(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DataProvider $this
=======
     * @phpstan-assert-if-true DataProvider $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isDataProvider(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DependsOnClass $this
=======
     * @phpstan-assert-if-true DependsOnClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isDependsOnClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DependsOnMethod $this
=======
     * @phpstan-assert-if-true DependsOnMethod $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isDependsOnMethod(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DoesNotPerformAssertions $this
=======
     * @phpstan-assert-if-true DisableReturnValueGenerationForTestDoubles $this
     */
    public function isDisableReturnValueGenerationForTestDoubles(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true DoesNotPerformAssertions $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isDoesNotPerformAssertions(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true ExcludeGlobalVariableFromBackup $this
=======
     * @phpstan-assert-if-true ExcludeGlobalVariableFromBackup $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isExcludeGlobalVariableFromBackup(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true ExcludeStaticPropertyFromBackup $this
=======
     * @phpstan-assert-if-true ExcludeStaticPropertyFromBackup $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isExcludeStaticPropertyFromBackup(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Group $this
=======
     * @phpstan-assert-if-true Group $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isGroup(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true IgnoreDeprecations $this
=======
     * @phpstan-assert-if-true IgnoreDeprecations $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isIgnoreDeprecations(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true IgnoreClassForCodeCoverage $this
     */
    public function isIgnoreClassForCodeCoverage(): bool
=======
     * @phpstan-assert-if-true IgnorePhpunitDeprecations $this
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isIgnorePhpunitDeprecations(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true IgnoreMethodForCodeCoverage $this
     */
    public function isIgnoreMethodForCodeCoverage(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true IgnoreFunctionForCodeCoverage $this
     */
    public function isIgnoreFunctionForCodeCoverage(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true RunClassInSeparateProcess $this
=======
     * @phpstan-assert-if-true RunClassInSeparateProcess $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRunClassInSeparateProcess(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RunInSeparateProcess $this
=======
     * @phpstan-assert-if-true RunInSeparateProcess $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRunInSeparateProcess(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RunTestsInSeparateProcesses $this
=======
     * @phpstan-assert-if-true RunTestsInSeparateProcesses $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRunTestsInSeparateProcesses(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Test $this
=======
     * @phpstan-assert-if-true Test $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isTest(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true PreCondition $this
=======
     * @phpstan-assert-if-true PreCondition $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isPreCondition(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true PostCondition $this
=======
     * @phpstan-assert-if-true PostCondition $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isPostCondition(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true PreserveGlobalState $this
=======
     * @phpstan-assert-if-true PreserveGlobalState $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isPreserveGlobalState(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresMethod $this
=======
     * @phpstan-assert-if-true RequiresMethod $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresMethod(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresFunction $this
=======
     * @phpstan-assert-if-true RequiresFunction $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresFunction(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresOperatingSystem $this
=======
     * @phpstan-assert-if-true RequiresOperatingSystem $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresOperatingSystem(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresOperatingSystemFamily $this
=======
     * @phpstan-assert-if-true RequiresOperatingSystemFamily $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresOperatingSystemFamily(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresPhp $this
=======
     * @phpstan-assert-if-true RequiresPhp $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresPhp(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresPhpExtension $this
=======
     * @phpstan-assert-if-true RequiresPhpExtension $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresPhpExtension(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresPhpunit $this
=======
     * @phpstan-assert-if-true RequiresPhpunit $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresPhpunit(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true RequiresSetting $this
=======
     * @phpstan-assert-if-true RequiresPhpunitExtension $this
     */
    public function isRequiresPhpunitExtension(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true RequiresSetting $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isRequiresSetting(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestDox $this
=======
     * @phpstan-assert-if-true TestDox $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isTestDox(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestWith $this
=======
     * @phpstan-assert-if-true TestWith $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isTestWith(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Uses $this
=======
     * @phpstan-assert-if-true Uses $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isUses(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true UsesClass $this
=======
     * @phpstan-assert-if-true UsesClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isUsesClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true UsesDefaultClass $this
=======
     * @phpstan-assert-if-true UsesDefaultClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isUsesDefaultClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true UsesFunction $this
=======
     * @phpstan-assert-if-true UsesTrait $this
     */
    public function isUsesTrait(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true UsesFunction $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isUsesFunction(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true WithoutErrorHandler $this
=======
     * @phpstan-assert-if-true UsesMethod $this
     */
    public function isUsesMethod(): bool
    {
        return false;
    }

    /**
     * @phpstan-assert-if-true WithoutErrorHandler $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isWithoutErrorHandler(): bool
    {
        return false;
    }
}

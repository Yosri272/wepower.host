<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use const DIRECTORY_SEPARATOR;
use const PHP_VERSION;
use function assert;
use function defined;
use function dirname;
use function explode;
use function is_numeric;
use function preg_match;
use function realpath;
use function str_contains;
use function str_starts_with;
use function strlen;
use function strtolower;
use function substr;
use function trim;
use DOMDocument;
use DOMElement;
use DOMNode;
<<<<<<< HEAD
=======
use DOMNodeList;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use DOMXPath;
use PHPUnit\Runner\TestSuiteSorter;
use PHPUnit\Runner\Version;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\Constant;
use PHPUnit\TextUI\Configuration\ConstantCollection;
use PHPUnit\TextUI\Configuration\Directory;
use PHPUnit\TextUI\Configuration\DirectoryCollection;
use PHPUnit\TextUI\Configuration\ExtensionBootstrap;
use PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection;
use PHPUnit\TextUI\Configuration\File;
use PHPUnit\TextUI\Configuration\FileCollection;
use PHPUnit\TextUI\Configuration\FilterDirectory;
use PHPUnit\TextUI\Configuration\FilterDirectoryCollection;
use PHPUnit\TextUI\Configuration\Group;
use PHPUnit\TextUI\Configuration\GroupCollection;
use PHPUnit\TextUI\Configuration\IniSetting;
use PHPUnit\TextUI\Configuration\IniSettingCollection;
use PHPUnit\TextUI\Configuration\Php;
use PHPUnit\TextUI\Configuration\Source;
use PHPUnit\TextUI\Configuration\TestDirectory;
use PHPUnit\TextUI\Configuration\TestDirectoryCollection;
use PHPUnit\TextUI\Configuration\TestFile;
use PHPUnit\TextUI\Configuration\TestFileCollection;
use PHPUnit\TextUI\Configuration\TestSuite as TestSuiteConfiguration;
use PHPUnit\TextUI\Configuration\TestSuiteCollection;
use PHPUnit\TextUI\Configuration\Variable;
use PHPUnit\TextUI\Configuration\VariableCollection;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html as CodeCoverageHtml;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php as CodeCoveragePhp;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text as CodeCoverageText;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml as CodeCoverageXml;
use PHPUnit\TextUI\XmlConfiguration\Logging\Junit;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;
use PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html as TestDoxHtml;
use PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text as TestDoxText;
use PHPUnit\Util\VersionComparisonOperator;
use PHPUnit\Util\Xml\Loader as XmlLoader;
use PHPUnit\Util\Xml\XmlException;
use SebastianBergmann\CodeCoverage\Report\Html\Colors;
use SebastianBergmann\CodeCoverage\Report\Thresholds;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Loader
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * @throws Exception
     */
    public function load(string $filename): LoadedFromFileConfiguration
    {
        try {
            $document = (new XmlLoader)->loadFile($filename);
        } catch (XmlException $e) {
            throw new Exception(
                $e->getMessage(),
                $e->getCode(),
                $e,
            );
        }

        $xpath = new DOMXPath($document);

        try {
            $xsdFilename = (new SchemaFinder)->find(Version::series());
        } catch (CannotFindSchemaException $e) {
            throw new Exception(
                $e->getMessage(),
                $e->getCode(),
                $e,
            );
        }

        $configurationFileRealpath = realpath($filename);

<<<<<<< HEAD
=======
        assert($configurationFileRealpath !== false && $configurationFileRealpath !== '');

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return new LoadedFromFileConfiguration(
            $configurationFileRealpath,
            (new Validator)->validate($document, $xsdFilename),
            $this->extensions($xpath),
            $this->source($configurationFileRealpath, $xpath),
            $this->codeCoverage($configurationFileRealpath, $xpath),
            $this->groups($xpath),
            $this->logging($configurationFileRealpath, $xpath),
            $this->php($configurationFileRealpath, $xpath),
            $this->phpunit($configurationFileRealpath, $document),
            $this->testSuite($configurationFileRealpath, $xpath),
        );
    }

    private function logging(string $filename, DOMXPath $xpath): Logging
    {
        $junit   = null;
        $element = $this->element($xpath, 'logging/junit');

        if ($element) {
            $junit = new Junit(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $teamCity = null;
        $element  = $this->element($xpath, 'logging/teamcity');

        if ($element) {
            $teamCity = new TeamCity(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $testDoxHtml = null;
        $element     = $this->element($xpath, 'logging/testdoxHtml');

        if ($element) {
            $testDoxHtml = new TestDoxHtml(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $testDoxText = null;
        $element     = $this->element($xpath, 'logging/testdoxText');

        if ($element) {
            $testDoxText = new TestDoxText(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        return new Logging(
            $junit,
            $teamCity,
            $testDoxHtml,
            $testDoxText,
        );
    }

    private function extensions(DOMXPath $xpath): ExtensionBootstrapCollection
    {
        $extensionBootstrappers = [];

<<<<<<< HEAD
        foreach ($xpath->query('extensions/bootstrap') as $bootstrap) {
=======
        $bootstrapNodes = $xpath->query('extensions/bootstrap');

        assert($bootstrapNodes instanceof DOMNodeList);

        foreach ($bootstrapNodes as $bootstrap) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            assert($bootstrap instanceof DOMElement);

            $parameters = [];

<<<<<<< HEAD
            foreach ($xpath->query('parameter', $bootstrap) as $parameter) {
=======
            $parameterNodes = $xpath->query('parameter', $bootstrap);

            assert($parameterNodes instanceof DOMNodeList);

            foreach ($parameterNodes as $parameter) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                assert($parameter instanceof DOMElement);

                $parameters[$parameter->getAttribute('name')] = $parameter->getAttribute('value');
            }

<<<<<<< HEAD
            $extensionBootstrappers[] = new ExtensionBootstrap(
                $bootstrap->getAttribute('class'),
=======
            $className = $bootstrap->getAttribute('class');

            assert($className !== '');

            $extensionBootstrappers[] = new ExtensionBootstrap(
                $className,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $parameters,
            );
        }

        return ExtensionBootstrapCollection::fromArray($extensionBootstrappers);
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function toAbsolutePath(string $filename, string $path): string
    {
        $path = trim($path);

        if (str_starts_with($path, '/')) {
            return $path;
        }

        // Matches the following on Windows:
        //  - \\NetworkComputer\Path
        //  - \\.\D:
        //  - \\.\c:
        //  - C:\Windows
        //  - C:\windows
        //  - C:/windows
        //  - c:/windows
        if (defined('PHP_WINDOWS_VERSION_BUILD') &&
            !empty($path) &&
            ($path[0] === '\\' || (strlen($path) >= 3 && preg_match('#^[A-Z]:[/\\\]#i', substr($path, 0, 3))))) {
            return $path;
        }

        if (str_contains($path, '://')) {
            return $path;
        }

        return dirname($filename) . DIRECTORY_SEPARATOR . $path;
    }

    private function source(string $filename, DOMXPath $xpath): Source
    {
        $baseline                           = null;
        $restrictDeprecations               = false;
        $restrictNotices                    = false;
        $restrictWarnings                   = false;
        $ignoreSuppressionOfDeprecations    = false;
        $ignoreSuppressionOfPhpDeprecations = false;
        $ignoreSuppressionOfErrors          = false;
        $ignoreSuppressionOfNotices         = false;
        $ignoreSuppressionOfPhpNotices      = false;
        $ignoreSuppressionOfWarnings        = false;
        $ignoreSuppressionOfPhpWarnings     = false;
<<<<<<< HEAD
=======
        $ignoreSelfDeprecations             = false;
        $ignoreDirectDeprecations           = false;
        $ignoreIndirectDeprecations         = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $element = $this->element($xpath, 'source');

        if ($element) {
<<<<<<< HEAD
            $baseline = $this->getStringAttribute($element, 'baseline');
=======
            $baseline = $this->parseStringAttribute($element, 'baseline');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            if ($baseline !== null) {
                $baseline = $this->toAbsolutePath($filename, $baseline);
            }

<<<<<<< HEAD
            $restrictDeprecations               = $this->getBooleanAttribute($element, 'restrictDeprecations', false);
            $restrictNotices                    = $this->getBooleanAttribute($element, 'restrictNotices', false);
            $restrictWarnings                   = $this->getBooleanAttribute($element, 'restrictWarnings', false);
            $ignoreSuppressionOfDeprecations    = $this->getBooleanAttribute($element, 'ignoreSuppressionOfDeprecations', false);
            $ignoreSuppressionOfPhpDeprecations = $this->getBooleanAttribute($element, 'ignoreSuppressionOfPhpDeprecations', false);
            $ignoreSuppressionOfErrors          = $this->getBooleanAttribute($element, 'ignoreSuppressionOfErrors', false);
            $ignoreSuppressionOfNotices         = $this->getBooleanAttribute($element, 'ignoreSuppressionOfNotices', false);
            $ignoreSuppressionOfPhpNotices      = $this->getBooleanAttribute($element, 'ignoreSuppressionOfPhpNotices', false);
            $ignoreSuppressionOfWarnings        = $this->getBooleanAttribute($element, 'ignoreSuppressionOfWarnings', false);
            $ignoreSuppressionOfPhpWarnings     = $this->getBooleanAttribute($element, 'ignoreSuppressionOfPhpWarnings', false);
=======
            $restrictDeprecations               = $this->parseBooleanAttribute($element, 'restrictDeprecations', false);
            $restrictNotices                    = $this->parseBooleanAttribute($element, 'restrictNotices', false);
            $restrictWarnings                   = $this->parseBooleanAttribute($element, 'restrictWarnings', false);
            $ignoreSuppressionOfDeprecations    = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfDeprecations', false);
            $ignoreSuppressionOfPhpDeprecations = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfPhpDeprecations', false);
            $ignoreSuppressionOfErrors          = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfErrors', false);
            $ignoreSuppressionOfNotices         = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfNotices', false);
            $ignoreSuppressionOfPhpNotices      = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfPhpNotices', false);
            $ignoreSuppressionOfWarnings        = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfWarnings', false);
            $ignoreSuppressionOfPhpWarnings     = $this->parseBooleanAttribute($element, 'ignoreSuppressionOfPhpWarnings', false);
            $ignoreSelfDeprecations             = $this->parseBooleanAttribute($element, 'ignoreSelfDeprecations', false);
            $ignoreDirectDeprecations           = $this->parseBooleanAttribute($element, 'ignoreDirectDeprecations', false);
            $ignoreIndirectDeprecations         = $this->parseBooleanAttribute($element, 'ignoreIndirectDeprecations', false);
        }

        $deprecationTriggers = [
            'functions' => [],
            'methods'   => [],
        ];

        $functionNodes = $xpath->query('source/deprecationTrigger/function');

        assert($functionNodes instanceof DOMNodeList);

        foreach ($functionNodes as $functionNode) {
            assert($functionNode instanceof DOMElement);

            $deprecationTriggers['functions'][] = $functionNode->textContent;
        }

        $methodNodes = $xpath->query('source/deprecationTrigger/method');

        assert($methodNodes instanceof DOMNodeList);

        foreach ($methodNodes as $methodNode) {
            assert($methodNode instanceof DOMElement);

            $deprecationTriggers['methods'][] = $methodNode->textContent;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return new Source(
            $baseline,
            false,
            $this->readFilterDirectories($filename, $xpath, 'source/include/directory'),
            $this->readFilterFiles($filename, $xpath, 'source/include/file'),
            $this->readFilterDirectories($filename, $xpath, 'source/exclude/directory'),
            $this->readFilterFiles($filename, $xpath, 'source/exclude/file'),
            $restrictDeprecations,
            $restrictNotices,
            $restrictWarnings,
            $ignoreSuppressionOfDeprecations,
            $ignoreSuppressionOfPhpDeprecations,
            $ignoreSuppressionOfErrors,
            $ignoreSuppressionOfNotices,
            $ignoreSuppressionOfPhpNotices,
            $ignoreSuppressionOfWarnings,
            $ignoreSuppressionOfPhpWarnings,
<<<<<<< HEAD
=======
            $deprecationTriggers,
            $ignoreSelfDeprecations,
            $ignoreDirectDeprecations,
            $ignoreIndirectDeprecations,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    private function codeCoverage(string $filename, DOMXPath $xpath): CodeCoverage
    {
<<<<<<< HEAD
        $cacheDirectory            = null;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $pathCoverage              = false;
        $includeUncoveredFiles     = true;
        $ignoreDeprecatedCodeUnits = false;
        $disableCodeCoverageIgnore = false;

        $element = $this->element($xpath, 'coverage');

        if ($element) {
<<<<<<< HEAD
            $cacheDirectory = $this->getStringAttribute($element, 'cacheDirectory');

            if ($cacheDirectory !== null) {
                $cacheDirectory = new Directory(
                    $this->toAbsolutePath($filename, $cacheDirectory),
                );
            }

            $pathCoverage = $this->getBooleanAttribute(
=======
            $pathCoverage = $this->parseBooleanAttribute(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $element,
                'pathCoverage',
                false,
            );

<<<<<<< HEAD
            $includeUncoveredFiles = $this->getBooleanAttribute(
=======
            $includeUncoveredFiles = $this->parseBooleanAttribute(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $element,
                'includeUncoveredFiles',
                true,
            );

<<<<<<< HEAD
            $ignoreDeprecatedCodeUnits = $this->getBooleanAttribute(
=======
            $ignoreDeprecatedCodeUnits = $this->parseBooleanAttribute(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $element,
                'ignoreDeprecatedCodeUnits',
                false,
            );

<<<<<<< HEAD
            $disableCodeCoverageIgnore = $this->getBooleanAttribute(
=======
            $disableCodeCoverageIgnore = $this->parseBooleanAttribute(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $element,
                'disableCodeCoverageIgnore',
                false,
            );
        }

        $clover  = null;
        $element = $this->element($xpath, 'coverage/report/clover');

        if ($element) {
            $clover = new Clover(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $cobertura = null;
        $element   = $this->element($xpath, 'coverage/report/cobertura');

        if ($element) {
            $cobertura = new Cobertura(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $crap4j  = null;
        $element = $this->element($xpath, 'coverage/report/crap4j');

        if ($element) {
            $crap4j = new Crap4j(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
                $this->getIntegerAttribute($element, 'threshold', 30),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
                    ),
                ),
                $this->parseIntegerAttribute($element, 'threshold', 30),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        $html    = null;
        $element = $this->element($xpath, 'coverage/report/html');

        if ($element) {
            $defaultColors     = Colors::default();
            $defaultThresholds = Thresholds::default();

            $html = new CodeCoverageHtml(
                new Directory(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputDirectory'),
                    ),
                ),
                $this->getIntegerAttribute($element, 'lowUpperBound', $defaultThresholds->lowUpperBound()),
                $this->getIntegerAttribute($element, 'highLowerBound', $defaultThresholds->highLowerBound()),
                $this->getStringAttributeWithDefault($element, 'colorSuccessLow', $defaultColors->successLow()),
                $this->getStringAttributeWithDefault($element, 'colorSuccessMedium', $defaultColors->successMedium()),
                $this->getStringAttributeWithDefault($element, 'colorSuccessHigh', $defaultColors->successHigh()),
                $this->getStringAttributeWithDefault($element, 'colorWarning', $defaultColors->warning()),
                $this->getStringAttributeWithDefault($element, 'colorDanger', $defaultColors->danger()),
                $this->getStringAttribute($element, 'customCssFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputDirectory'),
                    ),
                ),
                $this->parseIntegerAttribute($element, 'lowUpperBound', $defaultThresholds->lowUpperBound()),
                $this->parseIntegerAttribute($element, 'highLowerBound', $defaultThresholds->highLowerBound()),
                $this->parseStringAttributeWithDefault($element, 'colorSuccessLow', $defaultColors->successLow()),
                $this->parseStringAttributeWithDefault($element, 'colorSuccessMedium', $defaultColors->successMedium()),
                $this->parseStringAttributeWithDefault($element, 'colorSuccessHigh', $defaultColors->successHigh()),
                $this->parseStringAttributeWithDefault($element, 'colorWarning', $defaultColors->warning()),
                $this->parseStringAttributeWithDefault($element, 'colorDanger', $defaultColors->danger()),
                $this->parseStringAttribute($element, 'customCssFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        $php     = null;
        $element = $this->element($xpath, 'coverage/report/php');

        if ($element) {
            $php = new CodeCoveragePhp(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        $text    = null;
        $element = $this->element($xpath, 'coverage/report/text');

        if ($element) {
            $text = new CodeCoverageText(
                new File(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputFile'),
                    ),
                ),
                $this->getBooleanAttribute($element, 'showUncoveredFiles', false),
                $this->getBooleanAttribute($element, 'showOnlySummary', false),
=======
                        (string) $this->parseStringAttribute($element, 'outputFile'),
                    ),
                ),
                $this->parseBooleanAttribute($element, 'showUncoveredFiles', false),
                $this->parseBooleanAttribute($element, 'showOnlySummary', false),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        $xml     = null;
        $element = $this->element($xpath, 'coverage/report/xml');

        if ($element) {
            $xml = new CodeCoverageXml(
                new Directory(
                    $this->toAbsolutePath(
                        $filename,
<<<<<<< HEAD
                        (string) $this->getStringAttribute($element, 'outputDirectory'),
=======
                        (string) $this->parseStringAttribute($element, 'outputDirectory'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ),
                ),
            );
        }

        return new CodeCoverage(
<<<<<<< HEAD
            $cacheDirectory,
            $this->readFilterDirectories($filename, $xpath, 'coverage/include/directory'),
            $this->readFilterFiles($filename, $xpath, 'coverage/include/file'),
            $this->readFilterDirectories($filename, $xpath, 'coverage/exclude/directory'),
            $this->readFilterFiles($filename, $xpath, 'coverage/exclude/file'),
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $pathCoverage,
            $includeUncoveredFiles,
            $ignoreDeprecatedCodeUnits,
            $disableCodeCoverageIgnore,
            $clover,
            $cobertura,
            $crap4j,
            $html,
            $php,
            $text,
            $xml,
        );
    }

<<<<<<< HEAD
    private function getBoolean(string $value, bool $default): bool
=======
    private function booleanFromString(string $value, bool $default): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (strtolower($value) === 'false') {
            return false;
        }

        if (strtolower($value) === 'true') {
            return true;
        }

        return $default;
    }

<<<<<<< HEAD
    private function getValue(string $value): bool|string
=======
    private function valueFromString(string $value): bool|string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (strtolower($value) === 'false') {
            return false;
        }

        if (strtolower($value) === 'true') {
            return true;
        }

        return $value;
    }

    private function readFilterDirectories(string $filename, DOMXPath $xpath, string $query): FilterDirectoryCollection
    {
        $directories = [];

<<<<<<< HEAD
        foreach ($xpath->query($query) as $directoryNode) {
=======
        $directoryNodes = $xpath->query($query);

        assert($directoryNodes instanceof DOMNodeList);

        foreach ($directoryNodes as $directoryNode) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            assert($directoryNode instanceof DOMElement);

            $directoryPath = $directoryNode->textContent;

            if (!$directoryPath) {
                continue;
            }

            $directories[] = new FilterDirectory(
                $this->toAbsolutePath($filename, $directoryPath),
                $directoryNode->hasAttribute('prefix') ? $directoryNode->getAttribute('prefix') : '',
                $directoryNode->hasAttribute('suffix') ? $directoryNode->getAttribute('suffix') : '.php',
            );
        }

        return FilterDirectoryCollection::fromArray($directories);
    }

    private function readFilterFiles(string $filename, DOMXPath $xpath, string $query): FileCollection
    {
        $files = [];

<<<<<<< HEAD
        foreach ($xpath->query($query) as $file) {
            assert($file instanceof DOMNode);

            $filePath = $file->textContent;
=======
        $fileNodes = $xpath->query($query);

        assert($fileNodes instanceof DOMNodeList);

        foreach ($fileNodes as $fileNode) {
            assert($fileNode instanceof DOMNode);

            $filePath = $fileNode->textContent;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            if ($filePath) {
                $files[] = new File($this->toAbsolutePath($filename, $filePath));
            }
        }

        return FileCollection::fromArray($files);
    }

    private function groups(DOMXPath $xpath): Groups
    {
        $include = [];
        $exclude = [];

<<<<<<< HEAD
        foreach ($xpath->query('groups/include/group') as $group) {
            assert($group instanceof DOMNode);

            $include[] = new Group($group->textContent);
        }

        foreach ($xpath->query('groups/exclude/group') as $group) {
            assert($group instanceof DOMNode);

            $exclude[] = new Group($group->textContent);
=======
        $groupNodes = $xpath->query('groups/include/group');

        assert($groupNodes instanceof DOMNodeList);

        foreach ($groupNodes as $groupNode) {
            assert($groupNode instanceof DOMNode);

            $include[] = new Group($groupNode->textContent);
        }

        $groupNodes = $xpath->query('groups/exclude/group');

        assert($groupNodes instanceof DOMNodeList);

        foreach ($groupNodes as $groupNode) {
            assert($groupNode instanceof DOMNode);

            $exclude[] = new Group($groupNode->textContent);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return new Groups(
            GroupCollection::fromArray($include),
            GroupCollection::fromArray($exclude),
        );
    }

<<<<<<< HEAD
    private function getBooleanAttribute(DOMElement $element, string $attribute, bool $default): bool
=======
    private function parseBooleanAttribute(DOMElement $element, string $attribute, bool $default): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$element->hasAttribute($attribute)) {
            return $default;
        }

<<<<<<< HEAD
        return $this->getBoolean(
=======
        return $this->booleanFromString(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $element->getAttribute($attribute),
            false,
        );
    }

<<<<<<< HEAD
    private function getIntegerAttribute(DOMElement $element, string $attribute, int $default): int
=======
    private function parseIntegerAttribute(DOMElement $element, string $attribute, int $default): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$element->hasAttribute($attribute)) {
            return $default;
        }

<<<<<<< HEAD
        return $this->getInteger(
=======
        return $this->parseInteger(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $element->getAttribute($attribute),
            $default,
        );
    }

<<<<<<< HEAD
    private function getStringAttribute(DOMElement $element, string $attribute): ?string
=======
    private function parseStringAttribute(DOMElement $element, string $attribute): ?string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$element->hasAttribute($attribute)) {
            return null;
        }

        return $element->getAttribute($attribute);
    }

<<<<<<< HEAD
    private function getStringAttributeWithDefault(DOMElement $element, string $attribute, string $default): string
=======
    private function parseStringAttributeWithDefault(DOMElement $element, string $attribute, string $default): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$element->hasAttribute($attribute)) {
            return $default;
        }

        return $element->getAttribute($attribute);
    }

<<<<<<< HEAD
    private function getInteger(string $value, int $default): int
=======
    private function parseInteger(string $value, int $default): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_numeric($value)) {
            return (int) $value;
        }

        return $default;
    }

    private function php(string $filename, DOMXPath $xpath): Php
    {
        $includePaths = [];

<<<<<<< HEAD
        foreach ($xpath->query('php/includePath') as $includePath) {
=======
        $includePathNodes = $xpath->query('php/includePath');

        assert($includePathNodes instanceof DOMNodeList);

        foreach ($includePathNodes as $includePath) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            assert($includePath instanceof DOMNode);

            $path = $includePath->textContent;

            if ($path) {
                $includePaths[] = new Directory($this->toAbsolutePath($filename, $path));
            }
        }

        $iniSettings = [];

<<<<<<< HEAD
        foreach ($xpath->query('php/ini') as $ini) {
=======
        $iniNodes = $xpath->query('php/ini');

        assert($iniNodes instanceof DOMNodeList);

        foreach ($iniNodes as $ini) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            assert($ini instanceof DOMElement);

            $iniSettings[] = new IniSetting(
                $ini->getAttribute('name'),
                $ini->getAttribute('value'),
            );
        }

        $constants = [];

<<<<<<< HEAD
        foreach ($xpath->query('php/const') as $const) {
            assert($const instanceof DOMElement);

            $value = $const->getAttribute('value');

            $constants[] = new Constant(
                $const->getAttribute('name'),
                $this->getValue($value),
=======
        $constNodes = $xpath->query('php/const');

        assert($constNodes instanceof DOMNodeList);

        foreach ($constNodes as $constNode) {
            assert($constNode instanceof DOMElement);

            $value = $constNode->getAttribute('value');

            $constants[] = new Constant(
                $constNode->getAttribute('name'),
                $this->valueFromString($value),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        $variables = [
            'var'     => [],
            'env'     => [],
            'post'    => [],
            'get'     => [],
            'cookie'  => [],
            'server'  => [],
            'files'   => [],
            'request' => [],
        ];

        foreach (['var', 'env', 'post', 'get', 'cookie', 'server', 'files', 'request'] as $array) {
<<<<<<< HEAD
            foreach ($xpath->query('php/' . $array) as $var) {
=======
            $varNodes = $xpath->query('php/' . $array);

            assert($varNodes instanceof DOMNodeList);

            foreach ($varNodes as $var) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                assert($var instanceof DOMElement);

                $name     = $var->getAttribute('name');
                $value    = $var->getAttribute('value');
                $force    = false;
                $verbatim = false;

                if ($var->hasAttribute('force')) {
<<<<<<< HEAD
                    $force = $this->getBoolean($var->getAttribute('force'), false);
                }

                if ($var->hasAttribute('verbatim')) {
                    $verbatim = $this->getBoolean($var->getAttribute('verbatim'), false);
                }

                if (!$verbatim) {
                    $value = $this->getValue($value);
=======
                    $force = $this->booleanFromString($var->getAttribute('force'), false);
                }

                if ($var->hasAttribute('verbatim')) {
                    $verbatim = $this->booleanFromString($var->getAttribute('verbatim'), false);
                }

                if (!$verbatim) {
                    $value = $this->valueFromString($value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                }

                $variables[$array][] = new Variable($name, $value, $force);
            }
        }

        return new Php(
            DirectoryCollection::fromArray($includePaths),
            IniSettingCollection::fromArray($iniSettings),
            ConstantCollection::fromArray($constants),
            VariableCollection::fromArray($variables['var']),
            VariableCollection::fromArray($variables['env']),
            VariableCollection::fromArray($variables['post']),
            VariableCollection::fromArray($variables['get']),
            VariableCollection::fromArray($variables['cookie']),
            VariableCollection::fromArray($variables['server']),
            VariableCollection::fromArray($variables['files']),
            VariableCollection::fromArray($variables['request']),
        );
    }

    private function phpunit(string $filename, DOMDocument $document): PHPUnit
    {
        $executionOrder      = TestSuiteSorter::ORDER_DEFAULT;
        $defectsFirst        = false;
<<<<<<< HEAD
        $resolveDependencies = $this->getBooleanAttribute($document->documentElement, 'resolveDependencies', true);
=======
        $resolveDependencies = $this->parseBooleanAttribute($document->documentElement, 'resolveDependencies', true);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($document->documentElement->hasAttribute('executionOrder')) {
            foreach (explode(',', $document->documentElement->getAttribute('executionOrder')) as $order) {
                switch ($order) {
                    case 'default':
                        $executionOrder      = TestSuiteSorter::ORDER_DEFAULT;
                        $defectsFirst        = false;
                        $resolveDependencies = true;

                        break;

                    case 'depends':
                        $resolveDependencies = true;

                        break;

                    case 'no-depends':
                        $resolveDependencies = false;

                        break;

                    case 'defects':
                        $defectsFirst = true;

                        break;

                    case 'duration':
                        $executionOrder = TestSuiteSorter::ORDER_DURATION;

                        break;

                    case 'random':
                        $executionOrder = TestSuiteSorter::ORDER_RANDOMIZED;

                        break;

                    case 'reverse':
                        $executionOrder = TestSuiteSorter::ORDER_REVERSED;

                        break;

                    case 'size':
                        $executionOrder = TestSuiteSorter::ORDER_SIZE;

                        break;
                }
            }
        }

<<<<<<< HEAD
        $cacheDirectory = $this->getStringAttribute($document->documentElement, 'cacheDirectory');
=======
        $cacheDirectory = $this->parseStringAttribute($document->documentElement, 'cacheDirectory');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($cacheDirectory !== null) {
            $cacheDirectory = $this->toAbsolutePath($filename, $cacheDirectory);
        }

<<<<<<< HEAD
        $cacheResultFile = $this->getStringAttribute($document->documentElement, 'cacheResultFile');

        if ($cacheResultFile !== null) {
            $cacheResultFile = $this->toAbsolutePath($filename, $cacheResultFile);
        }

        $bootstrap = $this->getStringAttribute($document->documentElement, 'bootstrap');
=======
        $bootstrap = $this->parseStringAttribute($document->documentElement, 'bootstrap');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($bootstrap !== null) {
            $bootstrap = $this->toAbsolutePath($filename, $bootstrap);
        }

<<<<<<< HEAD
        $extensionsDirectory = $this->getStringAttribute($document->documentElement, 'extensionsDirectory');
=======
        $extensionsDirectory = $this->parseStringAttribute($document->documentElement, 'extensionsDirectory');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($extensionsDirectory !== null) {
            $extensionsDirectory = $this->toAbsolutePath($filename, $extensionsDirectory);
        }

        $backupStaticProperties = false;

        if ($document->documentElement->hasAttribute('backupStaticProperties')) {
<<<<<<< HEAD
            $backupStaticProperties = $this->getBooleanAttribute($document->documentElement, 'backupStaticProperties', false);
        } elseif ($document->documentElement->hasAttribute('backupStaticAttributes')) {
            $backupStaticProperties = $this->getBooleanAttribute($document->documentElement, 'backupStaticAttributes', false);
=======
            $backupStaticProperties = $this->parseBooleanAttribute($document->documentElement, 'backupStaticProperties', false);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $requireCoverageMetadata = false;

        if ($document->documentElement->hasAttribute('requireCoverageMetadata')) {
<<<<<<< HEAD
            $requireCoverageMetadata = $this->getBooleanAttribute($document->documentElement, 'requireCoverageMetadata', false);
        } elseif ($document->documentElement->hasAttribute('forceCoversAnnotation')) {
            $requireCoverageMetadata = $this->getBooleanAttribute($document->documentElement, 'forceCoversAnnotation', false);
=======
            $requireCoverageMetadata = $this->parseBooleanAttribute($document->documentElement, 'requireCoverageMetadata', false);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $beStrictAboutCoverageMetadata = false;

        if ($document->documentElement->hasAttribute('beStrictAboutCoverageMetadata')) {
<<<<<<< HEAD
            $beStrictAboutCoverageMetadata = $this->getBooleanAttribute($document->documentElement, 'beStrictAboutCoverageMetadata', false);
        } elseif ($document->documentElement->hasAttribute('forceCoversAnnotation')) {
            $beStrictAboutCoverageMetadata = $this->getBooleanAttribute($document->documentElement, 'beStrictAboutCoversAnnotation', false);
=======
            $beStrictAboutCoverageMetadata = $this->parseBooleanAttribute($document->documentElement, 'beStrictAboutCoverageMetadata', false);
        }

        $shortenArraysForExportThreshold = $this->parseIntegerAttribute($document->documentElement, 'shortenArraysForExportThreshold', 0);

        if ($shortenArraysForExportThreshold < 0) {
            $shortenArraysForExportThreshold = 0;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return new PHPUnit(
            $cacheDirectory,
<<<<<<< HEAD
            $this->getBooleanAttribute($document->documentElement, 'cacheResult', true),
            $cacheResultFile,
            $this->getColumns($document),
            $this->getColors($document),
            $this->getBooleanAttribute($document->documentElement, 'stderr', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnIncompleteTests', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnSkippedTests', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerDeprecations', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerErrors', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerNotices', false),
            $this->getBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerWarnings', false),
            $this->getBooleanAttribute($document->documentElement, 'reverseDefectList', false),
            $requireCoverageMetadata,
            $bootstrap,
            $this->getBooleanAttribute($document->documentElement, 'processIsolation', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnDeprecation', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnEmptyTestSuite', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnIncomplete', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnNotice', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnRisky', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnSkipped', false),
            $this->getBooleanAttribute($document->documentElement, 'failOnWarning', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnDefect', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnDeprecation', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnError', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnFailure', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnIncomplete', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnNotice', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnRisky', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnSkipped', false),
            $this->getBooleanAttribute($document->documentElement, 'stopOnWarning', false),
            $extensionsDirectory,
            $this->getBooleanAttribute($document->documentElement, 'beStrictAboutChangesToGlobalState', false),
            $this->getBooleanAttribute($document->documentElement, 'beStrictAboutOutputDuringTests', false),
            $this->getBooleanAttribute($document->documentElement, 'beStrictAboutTestsThatDoNotTestAnything', true),
            $beStrictAboutCoverageMetadata,
            $this->getBooleanAttribute($document->documentElement, 'enforceTimeLimit', false),
            $this->getIntegerAttribute($document->documentElement, 'defaultTimeLimit', 1),
            $this->getIntegerAttribute($document->documentElement, 'timeoutForSmallTests', 1),
            $this->getIntegerAttribute($document->documentElement, 'timeoutForMediumTests', 10),
            $this->getIntegerAttribute($document->documentElement, 'timeoutForLargeTests', 60),
            $this->getStringAttribute($document->documentElement, 'defaultTestSuite'),
            $executionOrder,
            $resolveDependencies,
            $defectsFirst,
            $this->getBooleanAttribute($document->documentElement, 'backupGlobals', false),
            $backupStaticProperties,
            $this->getBooleanAttribute($document->documentElement, 'registerMockObjectsFromTestArgumentsRecursively', false),
            $this->getBooleanAttribute($document->documentElement, 'testdox', false),
            $this->getBooleanAttribute($document->documentElement, 'controlGarbageCollector', false),
            $this->getIntegerAttribute($document->documentElement, 'numberOfTestsBeforeGarbageCollection', 100),
        );
    }

    private function getColors(DOMDocument $document): string
=======
            $this->parseBooleanAttribute($document->documentElement, 'cacheResult', true),
            $this->parseColumns($document),
            $this->parseColors($document),
            $this->parseBooleanAttribute($document->documentElement, 'stderr', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnIncompleteTests', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnSkippedTests', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerDeprecations', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnPhpunitDeprecations', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerErrors', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerNotices', false),
            $this->parseBooleanAttribute($document->documentElement, 'displayDetailsOnTestsThatTriggerWarnings', false),
            $this->parseBooleanAttribute($document->documentElement, 'reverseDefectList', false),
            $requireCoverageMetadata,
            $bootstrap,
            $this->parseBooleanAttribute($document->documentElement, 'processIsolation', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnDeprecation', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnPhpunitDeprecation', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnEmptyTestSuite', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnIncomplete', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnNotice', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnRisky', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnSkipped', false),
            $this->parseBooleanAttribute($document->documentElement, 'failOnWarning', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnDefect', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnDeprecation', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnError', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnFailure', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnIncomplete', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnNotice', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnRisky', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnSkipped', false),
            $this->parseBooleanAttribute($document->documentElement, 'stopOnWarning', false),
            $extensionsDirectory,
            $this->parseBooleanAttribute($document->documentElement, 'beStrictAboutChangesToGlobalState', false),
            $this->parseBooleanAttribute($document->documentElement, 'beStrictAboutOutputDuringTests', false),
            $this->parseBooleanAttribute($document->documentElement, 'beStrictAboutTestsThatDoNotTestAnything', true),
            $beStrictAboutCoverageMetadata,
            $this->parseBooleanAttribute($document->documentElement, 'enforceTimeLimit', false),
            $this->parseIntegerAttribute($document->documentElement, 'defaultTimeLimit', 1),
            $this->parseIntegerAttribute($document->documentElement, 'timeoutForSmallTests', 1),
            $this->parseIntegerAttribute($document->documentElement, 'timeoutForMediumTests', 10),
            $this->parseIntegerAttribute($document->documentElement, 'timeoutForLargeTests', 60),
            $this->parseStringAttribute($document->documentElement, 'defaultTestSuite'),
            $executionOrder,
            $resolveDependencies,
            $defectsFirst,
            $this->parseBooleanAttribute($document->documentElement, 'backupGlobals', false),
            $backupStaticProperties,
            $this->parseBooleanAttribute($document->documentElement, 'testdox', false),
            $this->parseBooleanAttribute($document->documentElement, 'testdoxSummary', false),
            $this->parseBooleanAttribute($document->documentElement, 'controlGarbageCollector', false),
            $this->parseIntegerAttribute($document->documentElement, 'numberOfTestsBeforeGarbageCollection', 100),
            $shortenArraysForExportThreshold,
        );
    }

    private function parseColors(DOMDocument $document): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $colors = Configuration::COLOR_DEFAULT;

        if ($document->documentElement->hasAttribute('colors')) {
            /* only allow boolean for compatibility with previous versions
              'always' only allowed from command line */
<<<<<<< HEAD
            if ($this->getBoolean($document->documentElement->getAttribute('colors'), false)) {
=======
            if ($this->booleanFromString($document->documentElement->getAttribute('colors'), false)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $colors = Configuration::COLOR_AUTO;
            } else {
                $colors = Configuration::COLOR_NEVER;
            }
        }

        return $colors;
    }

<<<<<<< HEAD
    private function getColumns(DOMDocument $document): int|string
=======
    private function parseColumns(DOMDocument $document): int|string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $columns = 80;

        if ($document->documentElement->hasAttribute('columns')) {
            $columns = $document->documentElement->getAttribute('columns');

            if ($columns !== 'max') {
<<<<<<< HEAD
                $columns = $this->getInteger($columns, 80);
=======
                $columns = $this->parseInteger($columns, 80);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }
        }

        return $columns;
    }

    private function testSuite(string $filename, DOMXPath $xpath): TestSuiteCollection
    {
        $testSuites = [];

<<<<<<< HEAD
        foreach ($this->getTestSuiteElements($xpath) as $element) {
=======
        foreach ($this->parseTestSuiteElements($xpath) as $element) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $exclude = [];

            foreach ($element->getElementsByTagName('exclude') as $excludeNode) {
                $excludeFile = $excludeNode->textContent;

                if ($excludeFile) {
                    $exclude[] = new File($this->toAbsolutePath($filename, $excludeFile));
                }
            }

            $directories = [];

            foreach ($element->getElementsByTagName('directory') as $directoryNode) {
                assert($directoryNode instanceof DOMElement);

                $directory = $directoryNode->textContent;

                if (empty($directory)) {
                    continue;
                }

                $prefix = '';

                if ($directoryNode->hasAttribute('prefix')) {
                    $prefix = $directoryNode->getAttribute('prefix');
                }

                $suffix = 'Test.php';

                if ($directoryNode->hasAttribute('suffix')) {
                    $suffix = $directoryNode->getAttribute('suffix');
                }

                $phpVersion = PHP_VERSION;

                if ($directoryNode->hasAttribute('phpVersion')) {
                    $phpVersion = $directoryNode->getAttribute('phpVersion');
                }

                $phpVersionOperator = new VersionComparisonOperator('>=');

                if ($directoryNode->hasAttribute('phpVersionOperator')) {
                    $phpVersionOperator = new VersionComparisonOperator($directoryNode->getAttribute('phpVersionOperator'));
                }

<<<<<<< HEAD
=======
                $groups = [];

                if ($directoryNode->hasAttribute('groups')) {
                    foreach (explode(',', $directoryNode->getAttribute('groups')) as $group) {
                        $group = trim($group);

                        if (empty($group)) {
                            continue;
                        }

                        $groups[] = $group;
                    }
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $directories[] = new TestDirectory(
                    $this->toAbsolutePath($filename, $directory),
                    $prefix,
                    $suffix,
                    $phpVersion,
                    $phpVersionOperator,
<<<<<<< HEAD
=======
                    $groups,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            $files = [];

            foreach ($element->getElementsByTagName('file') as $fileNode) {
                assert($fileNode instanceof DOMElement);

                $file = $fileNode->textContent;

                if (empty($file)) {
                    continue;
                }

                $phpVersion = PHP_VERSION;

                if ($fileNode->hasAttribute('phpVersion')) {
                    $phpVersion = $fileNode->getAttribute('phpVersion');
                }

                $phpVersionOperator = new VersionComparisonOperator('>=');

                if ($fileNode->hasAttribute('phpVersionOperator')) {
                    $phpVersionOperator = new VersionComparisonOperator($fileNode->getAttribute('phpVersionOperator'));
                }

<<<<<<< HEAD
=======
                $groups = [];

                if ($fileNode->hasAttribute('groups')) {
                    foreach (explode(',', $fileNode->getAttribute('groups')) as $group) {
                        $group = trim($group);

                        if (empty($group)) {
                            continue;
                        }

                        $groups[] = $group;
                    }
                }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $files[] = new TestFile(
                    $this->toAbsolutePath($filename, $file),
                    $phpVersion,
                    $phpVersionOperator,
<<<<<<< HEAD
=======
                    $groups,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            $name = $element->getAttribute('name');

            assert(!empty($name));

            $testSuites[] = new TestSuiteConfiguration(
                $name,
                TestDirectoryCollection::fromArray($directories),
                TestFileCollection::fromArray($files),
                FileCollection::fromArray($exclude),
            );
        }

        return TestSuiteCollection::fromArray($testSuites);
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<DOMElement>
     */
    private function getTestSuiteElements(DOMXPath $xpath): array
=======
     * @return list<DOMElement>
     */
    private function parseTestSuiteElements(DOMXPath $xpath): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $elements = [];

        $testSuiteNodes = $xpath->query('testsuites/testsuite');

<<<<<<< HEAD
        if ($testSuiteNodes->length === 0) {
            $testSuiteNodes = $xpath->query('testsuite');
=======
        assert($testSuiteNodes instanceof DOMNodeList);

        if ($testSuiteNodes->length === 0) {
            $testSuiteNodes = $xpath->query('testsuite');

            assert($testSuiteNodes instanceof DOMNodeList);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if ($testSuiteNodes->length === 1) {
            $element = $testSuiteNodes->item(0);

            assert($element instanceof DOMElement);

            $elements[] = $element;
        } else {
            foreach ($testSuiteNodes as $testSuiteNode) {
                assert($testSuiteNode instanceof DOMElement);

                $elements[] = $testSuiteNode;
            }
        }

        return $elements;
    }

    private function element(DOMXPath $xpath, string $element): ?DOMElement
    {
        $nodes = $xpath->query($element);

<<<<<<< HEAD
=======
        assert($nodes instanceof DOMNodeList);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($nodes->length === 1) {
            $node = $nodes->item(0);

            assert($node instanceof DOMElement);

            return $node;
        }

        return null;
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage;

<<<<<<< HEAD
use function count;
use PHPUnit\TextUI\Configuration\Directory;
use PHPUnit\TextUI\Configuration\FileCollection;
use PHPUnit\TextUI\Configuration\FilterDirectoryCollection;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml;
use PHPUnit\TextUI\XmlConfiguration\Exception;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class CodeCoverage
{
    private readonly ?Directory $cacheDirectory;
    private readonly FilterDirectoryCollection $directories;
    private readonly FileCollection $files;
    private readonly FilterDirectoryCollection $excludeDirectories;
    private readonly FileCollection $excludeFiles;
    private readonly bool $pathCoverage;
    private readonly bool $includeUncoveredFiles;
    private readonly bool $ignoreDeprecatedCodeUnits;
    private readonly bool $disableCodeCoverageIgnore;
    private readonly ?Clover $clover;
    private readonly ?Cobertura $cobertura;
    private readonly ?Crap4j $crap4j;
    private readonly ?Html $html;
    private readonly ?Php $php;
    private readonly ?Text $text;
    private readonly ?Xml $xml;

    public function __construct(?Directory $cacheDirectory, FilterDirectoryCollection $directories, FileCollection $files, FilterDirectoryCollection $excludeDirectories, FileCollection $excludeFiles, bool $pathCoverage, bool $includeUncoveredFiles, bool $ignoreDeprecatedCodeUnits, bool $disableCodeCoverageIgnore, ?Clover $clover, ?Cobertura $cobertura, ?Crap4j $crap4j, ?Html $html, ?Php $php, ?Text $text, ?Xml $xml)
    {
        $this->cacheDirectory            = $cacheDirectory;
        $this->directories               = $directories;
        $this->files                     = $files;
        $this->excludeDirectories        = $excludeDirectories;
        $this->excludeFiles              = $excludeFiles;
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class CodeCoverage
{
    private bool $pathCoverage;
    private bool $includeUncoveredFiles;
    private bool $ignoreDeprecatedCodeUnits;
    private bool $disableCodeCoverageIgnore;
    private ?Clover $clover;
    private ?Cobertura $cobertura;
    private ?Crap4j $crap4j;
    private ?Html $html;
    private ?Php $php;
    private ?Text $text;
    private ?Xml $xml;

    public function __construct(bool $pathCoverage, bool $includeUncoveredFiles, bool $ignoreDeprecatedCodeUnits, bool $disableCodeCoverageIgnore, ?Clover $clover, ?Cobertura $cobertura, ?Crap4j $crap4j, ?Html $html, ?Php $php, ?Text $text, ?Xml $xml)
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->pathCoverage              = $pathCoverage;
        $this->includeUncoveredFiles     = $includeUncoveredFiles;
        $this->ignoreDeprecatedCodeUnits = $ignoreDeprecatedCodeUnits;
        $this->disableCodeCoverageIgnore = $disableCodeCoverageIgnore;
        $this->clover                    = $clover;
        $this->cobertura                 = $cobertura;
        $this->crap4j                    = $crap4j;
        $this->html                      = $html;
        $this->php                       = $php;
        $this->text                      = $text;
        $this->xml                       = $xml;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true !null $this->cacheDirectory
     *
     * @deprecated
     */
    public function hasCacheDirectory(): bool
    {
        return $this->cacheDirectory !== null;
    }

    /**
     * @throws Exception
     *
     * @deprecated
     */
    public function cacheDirectory(): Directory
    {
        if (!$this->hasCacheDirectory()) {
            throw new Exception(
                'No cache directory has been configured',
            );
        }

        return $this->cacheDirectory;
    }

    public function hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport(): bool
    {
        return count($this->directories) > 0 || count($this->files) > 0;
    }

    public function directories(): FilterDirectoryCollection
    {
        return $this->directories;
    }

    public function files(): FileCollection
    {
        return $this->files;
    }

    public function excludeDirectories(): FilterDirectoryCollection
    {
        return $this->excludeDirectories;
    }

    public function excludeFiles(): FileCollection
    {
        return $this->excludeFiles;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function pathCoverage(): bool
    {
        return $this->pathCoverage;
    }

    public function includeUncoveredFiles(): bool
    {
        return $this->includeUncoveredFiles;
    }

    public function ignoreDeprecatedCodeUnits(): bool
    {
        return $this->ignoreDeprecatedCodeUnits;
    }

    public function disableCodeCoverageIgnore(): bool
    {
        return $this->disableCodeCoverageIgnore;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->clover
=======
     * @phpstan-assert-if-true !null $this->clover
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasClover(): bool
    {
        return $this->clover !== null;
    }

    /**
     * @throws Exception
     */
    public function clover(): Clover
    {
        if (!$this->hasClover()) {
            throw new Exception(
                'Code Coverage report "Clover XML" has not been configured',
            );
        }

        return $this->clover;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->cobertura
=======
     * @phpstan-assert-if-true !null $this->cobertura
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCobertura(): bool
    {
        return $this->cobertura !== null;
    }

    /**
     * @throws Exception
     */
    public function cobertura(): Cobertura
    {
        if (!$this->hasCobertura()) {
            throw new Exception(
                'Code Coverage report "Cobertura XML" has not been configured',
            );
        }

        return $this->cobertura;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->crap4j
=======
     * @phpstan-assert-if-true !null $this->crap4j
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasCrap4j(): bool
    {
        return $this->crap4j !== null;
    }

    /**
     * @throws Exception
     */
    public function crap4j(): Crap4j
    {
        if (!$this->hasCrap4j()) {
            throw new Exception(
                'Code Coverage report "Crap4J" has not been configured',
            );
        }

        return $this->crap4j;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->html
=======
     * @phpstan-assert-if-true !null $this->html
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasHtml(): bool
    {
        return $this->html !== null;
    }

    /**
     * @throws Exception
     */
    public function html(): Html
    {
        if (!$this->hasHtml()) {
            throw new Exception(
                'Code Coverage report "HTML" has not been configured',
            );
        }

        return $this->html;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->php
=======
     * @phpstan-assert-if-true !null $this->php
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasPhp(): bool
    {
        return $this->php !== null;
    }

    /**
     * @throws Exception
     */
    public function php(): Php
    {
        if (!$this->hasPhp()) {
            throw new Exception(
                'Code Coverage report "PHP" has not been configured',
            );
        }

        return $this->php;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->text
=======
     * @phpstan-assert-if-true !null $this->text
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasText(): bool
    {
        return $this->text !== null;
    }

    /**
     * @throws Exception
     */
    public function text(): Text
    {
        if (!$this->hasText()) {
            throw new Exception(
                'Code Coverage report "Text" has not been configured',
            );
        }

        return $this->text;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true !null $this->xml
=======
     * @phpstan-assert-if-true !null $this->xml
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hasXml(): bool
    {
        return $this->xml !== null;
    }

    /**
     * @throws Exception
     */
    public function xml(): Xml
    {
        if (!$this->hasXml()) {
            throw new Exception(
                'Code Coverage report "XML" has not been configured',
            );
        }

        return $this->xml;
    }
}

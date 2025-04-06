<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 *
<<<<<<< HEAD
 * @psalm-import-type CodeUnitFunctionType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitMethodType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitClassType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitTraitType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type LinesOfCodeType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
 * @psalm-import-type LinesType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
 *
 * @psalm-type LinesOfCodeType = array{
=======
 * @phpstan-import-type CodeUnitFunctionType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitMethodType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitClassType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitTraitType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 *
 * @phpstan-type LinesOfCodeType = array{
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 *     linesOfCode: int,
 *     commentLinesOfCode: int,
 *     nonCommentLinesOfCode: int
 * }
<<<<<<< HEAD
 * @psalm-type LinesType = array<int, int>
=======
 * @phpstan-type LinesType = array<int, int>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
interface FileAnalyser
{
    /**
<<<<<<< HEAD
     * @psalm-return array<string, CodeUnitClassType>
=======
     * @return array<string, CodeUnitClassType>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function classesIn(string $filename): array;

    /**
<<<<<<< HEAD
     * @psalm-return array<string, CodeUnitTraitType>
=======
     * @return array<string, CodeUnitTraitType>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function traitsIn(string $filename): array;

    /**
<<<<<<< HEAD
     * @psalm-return array<string, CodeUnitFunctionType>
=======
     * @return array<string, CodeUnitFunctionType>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function functionsIn(string $filename): array;

    /**
<<<<<<< HEAD
     * @psalm-return LinesOfCodeType
=======
     * @return LinesOfCodeType
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function linesOfCodeFor(string $filename): array;

    /**
<<<<<<< HEAD
     * @psalm-return LinesType
=======
     * @return LinesType
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function executableLinesIn(string $filename): array;

    /**
<<<<<<< HEAD
     * @psalm-return LinesType
=======
     * @return LinesType
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function ignoredLinesFor(string $filename): array;
}

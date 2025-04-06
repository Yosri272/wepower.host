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

<<<<<<< HEAD
=======
use const T_COMMENT;
use const T_DOC_COMMENT;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function array_merge;
use function array_unique;
use function assert;
use function file_get_contents;
use function is_array;
use function max;
use function range;
use function sort;
use function sprintf;
use function substr_count;
use function token_get_all;
use function trim;
use PhpParser\Error;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\NodeVisitor\ParentConnectingVisitor;
use PhpParser\ParserFactory;
use SebastianBergmann\CodeCoverage\ParserException;
use SebastianBergmann\LinesOfCode\LineCountingVisitor;

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
=======
 * @phpstan-import-type CodeUnitFunctionType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitMethodType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitClassType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type CodeUnitTraitType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @phpstan-import-type LinesOfCodeType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
 * @phpstan-import-type LinesType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
final class ParsingFileAnalyser implements FileAnalyser
{
    /**
<<<<<<< HEAD
     * @psalm-var array<string, array<string, CodeUnitClassType>>
=======
     * @var array<string, array<string, CodeUnitClassType>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $classes = [];

    /**
<<<<<<< HEAD
     * @psalm-var array<string, array<string, CodeUnitTraitType>>
=======
     * @var array<string, array<string, CodeUnitTraitType>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $traits = [];

    /**
<<<<<<< HEAD
     * @psalm-var array<string, array<string, CodeUnitFunctionType>>
=======
     * @var array<string, array<string, CodeUnitFunctionType>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $functions = [];

    /**
     * @var array<string, LinesOfCodeType>
     */
    private array $linesOfCode = [];

    /**
     * @var array<string, LinesType>
     */
    private array $ignoredLines = [];

    /**
     * @var array<string, LinesType>
     */
    private array $executableLines = [];
    private readonly bool $useAnnotationsForIgnoringCode;
    private readonly bool $ignoreDeprecatedCode;

    public function __construct(bool $useAnnotationsForIgnoringCode, bool $ignoreDeprecatedCode)
    {
        $this->useAnnotationsForIgnoringCode = $useAnnotationsForIgnoringCode;
        $this->ignoreDeprecatedCode          = $ignoreDeprecatedCode;
    }

<<<<<<< HEAD
=======
    /**
     * @return array<string, CodeUnitClassType>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function classesIn(string $filename): array
    {
        $this->analyse($filename);

        return $this->classes[$filename];
    }

<<<<<<< HEAD
=======
    /**
     * @return array<string, CodeUnitTraitType>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function traitsIn(string $filename): array
    {
        $this->analyse($filename);

        return $this->traits[$filename];
    }

<<<<<<< HEAD
=======
    /**
     * @return array<string, CodeUnitFunctionType>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function functionsIn(string $filename): array
    {
        $this->analyse($filename);

        return $this->functions[$filename];
    }

<<<<<<< HEAD
=======
    /**
     * @return LinesOfCodeType
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function linesOfCodeFor(string $filename): array
    {
        $this->analyse($filename);

        return $this->linesOfCode[$filename];
    }

<<<<<<< HEAD
=======
    /**
     * @return LinesType
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function executableLinesIn(string $filename): array
    {
        $this->analyse($filename);

        return $this->executableLines[$filename];
    }

<<<<<<< HEAD
=======
    /**
     * @return LinesType
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function ignoredLinesFor(string $filename): array
    {
        $this->analyse($filename);

        return $this->ignoredLines[$filename];
    }

    /**
     * @throws ParserException
     */
    private function analyse(string $filename): void
    {
        if (isset($this->classes[$filename])) {
            return;
        }

        $source      = file_get_contents($filename);
        $linesOfCode = max(substr_count($source, "\n") + 1, substr_count($source, "\r") + 1);

        if ($linesOfCode === 0 && !empty($source)) {
            $linesOfCode = 1;
        }

        assert($linesOfCode > 0);

        $parser = (new ParserFactory)->createForHostVersion();

        try {
            $nodes = $parser->parse($source);

            assert($nodes !== null);

            $traverser                     = new NodeTraverser;
            $codeUnitFindingVisitor        = new CodeUnitFindingVisitor;
            $lineCountingVisitor           = new LineCountingVisitor($linesOfCode);
            $ignoredLinesFindingVisitor    = new IgnoredLinesFindingVisitor($this->useAnnotationsForIgnoringCode, $this->ignoreDeprecatedCode);
            $executableLinesFindingVisitor = new ExecutableLinesFindingVisitor($source);

            $traverser->addVisitor(new NameResolver);
            $traverser->addVisitor(new ParentConnectingVisitor);
            $traverser->addVisitor($codeUnitFindingVisitor);
            $traverser->addVisitor($lineCountingVisitor);
            $traverser->addVisitor($ignoredLinesFindingVisitor);
            $traverser->addVisitor($executableLinesFindingVisitor);

            /* @noinspection UnusedFunctionResultInspection */
            $traverser->traverse($nodes);
            // @codeCoverageIgnoreStart
        } catch (Error $error) {
            throw new ParserException(
                sprintf(
                    'Cannot parse %s: %s',
                    $filename,
                    $error->getMessage(),
                ),
                $error->getCode(),
                $error,
            );
        }
        // @codeCoverageIgnoreEnd

        $this->classes[$filename]         = $codeUnitFindingVisitor->classes();
        $this->traits[$filename]          = $codeUnitFindingVisitor->traits();
        $this->functions[$filename]       = $codeUnitFindingVisitor->functions();
        $this->executableLines[$filename] = $executableLinesFindingVisitor->executableLinesGroupedByBranch();
        $this->ignoredLines[$filename]    = [];

        $this->findLinesIgnoredByLineBasedAnnotations($filename, $source, $this->useAnnotationsForIgnoringCode);

        $this->ignoredLines[$filename] = array_unique(
            array_merge(
                $this->ignoredLines[$filename],
                $ignoredLinesFindingVisitor->ignoredLines(),
            ),
        );

        sort($this->ignoredLines[$filename]);

        $result = $lineCountingVisitor->result();

        $this->linesOfCode[$filename] = [
            'linesOfCode'           => $result->linesOfCode(),
            'commentLinesOfCode'    => $result->commentLinesOfCode(),
            'nonCommentLinesOfCode' => $result->nonCommentLinesOfCode(),
        ];
    }

    private function findLinesIgnoredByLineBasedAnnotations(string $filename, string $source, bool $useAnnotationsForIgnoringCode): void
    {
        if (!$useAnnotationsForIgnoringCode) {
            return;
        }

        $start = false;

        foreach (token_get_all($source) as $token) {
            if (!is_array($token) ||
                !(T_COMMENT === $token[0] || T_DOC_COMMENT === $token[0])) {
                continue;
            }

            $comment = trim($token[1]);

            if ($comment === '// @codeCoverageIgnore' ||
                $comment === '//@codeCoverageIgnore') {
                $this->ignoredLines[$filename][] = $token[2];

                continue;
            }

            if ($comment === '// @codeCoverageIgnoreStart' ||
                $comment === '//@codeCoverageIgnoreStart') {
                $start = $token[2];

                continue;
            }

            if ($comment === '// @codeCoverageIgnoreEnd' ||
                $comment === '//@codeCoverageIgnoreEnd') {
                if (false === $start) {
                    $start = $token[2];
                }

                $this->ignoredLines[$filename] = array_merge(
                    $this->ignoredLines[$filename],
                    range($start, $token[2]),
                );
            }
        }
    }
}

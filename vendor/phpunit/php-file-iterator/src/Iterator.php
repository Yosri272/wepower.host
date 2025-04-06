<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-file-iterator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\FileIterator;

use function assert;
use function preg_match;
use function realpath;
use function str_ends_with;
use function str_replace;
use function str_starts_with;
<<<<<<< HEAD
use AppendIterator;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use FilterIterator;
use SplFileInfo;

/**
<<<<<<< HEAD
 * @template-extends FilterIterator<int, string, AppendIterator>
=======
 * @template-extends FilterIterator<int, SplFileInfo, \Iterator>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 *
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-file-iterator
 */
final class Iterator extends FilterIterator
{
    public const PREFIX = 0;
    public const SUFFIX = 1;
<<<<<<< HEAD
    private string|false $basePath;

    /**
     * @psalm-var list<string>
=======
    private false|string $basePath;

    /**
     * @var list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $suffixes;

    /**
<<<<<<< HEAD
     * @psalm-var list<string>
=======
     * @var list<string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $prefixes;

    /**
<<<<<<< HEAD
     * @psalm-param list<string> $suffixes
     * @psalm-param list<string> $prefixes
=======
     * @param list<string> $suffixes
     * @param list<string> $prefixes
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $basePath, \Iterator $iterator, array $suffixes = [], array $prefixes = [])
    {
        $this->basePath = realpath($basePath);
        $this->prefixes = $prefixes;
        $this->suffixes = $suffixes;

        parent::__construct($iterator);
    }

    public function accept(): bool
    {
        $current = $this->getInnerIterator()->current();

        assert($current instanceof SplFileInfo);

        $filename = $current->getFilename();
        $realPath = $current->getRealPath();

        if ($realPath === false) {
            // @codeCoverageIgnoreStart
            return false;
            // @codeCoverageIgnoreEnd
        }

        return $this->acceptPath($realPath) &&
               $this->acceptPrefix($filename) &&
               $this->acceptSuffix($filename);
    }

    private function acceptPath(string $path): bool
    {
        // Filter files in hidden directories by checking path that is relative to the base path.
        if (preg_match('=/\.[^/]*/=', str_replace((string) $this->basePath, '', $path))) {
            return false;
        }

        return true;
    }

    private function acceptPrefix(string $filename): bool
    {
        return $this->acceptSubString($filename, $this->prefixes, self::PREFIX);
    }

    private function acceptSuffix(string $filename): bool
    {
        return $this->acceptSubString($filename, $this->suffixes, self::SUFFIX);
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<string> $subStrings
=======
     * @param list<string> $subStrings
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function acceptSubString(string $filename, array $subStrings, int $type): bool
    {
        if (empty($subStrings)) {
            return true;
        }

        foreach ($subStrings as $string) {
            if (($type === self::PREFIX && str_starts_with($filename, $string)) ||
                ($type === self::SUFFIX && str_ends_with($filename, $string))) {
                return true;
            }
        }

        return false;
    }
}

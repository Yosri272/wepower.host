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

use function count;
use Countable;
use IteratorAggregate;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @template-implements IteratorAggregate<int, TestFile>
 */
final class TestFileCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<TestFile>
     */
    private readonly array $files;

    /**
     * @psalm-param list<TestFile> $files
=======
 * @immutable
 *
 * @template-implements IteratorAggregate<int, TestFile>
 */
final readonly class TestFileCollection implements Countable, IteratorAggregate
{
    /**
     * @var list<TestFile>
     */
    private array $files;

    /**
     * @param list<TestFile> $files
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function fromArray(array $files): self
    {
        return new self(...$files);
    }

    private function __construct(TestFile ...$files)
    {
        $this->files = $files;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<TestFile>
=======
     * @return list<TestFile>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function asArray(): array
    {
        return $this->files;
    }

    public function count(): int
    {
        return count($this->files);
    }

    public function getIterator(): TestFileCollectionIterator
    {
        return new TestFileCollectionIterator($this);
    }

    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }
}

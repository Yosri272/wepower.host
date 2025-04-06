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
<<<<<<< HEAD
use function iterator_count;
use Countable;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Iterator;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements Iterator<int, TestFile>
 */
<<<<<<< HEAD
final class TestFileCollectionIterator implements Countable, Iterator
{
    /**
     * @psalm-var list<TestFile>
=======
final class TestFileCollectionIterator implements Iterator
{
    /**
     * @var list<TestFile>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private readonly array $files;
    private int $position = 0;

    public function __construct(TestFileCollection $files)
    {
        $this->files = $files->asArray();
    }

<<<<<<< HEAD
    public function count(): int
    {
        return iterator_count($this);
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return $this->position < count($this->files);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function current(): TestFile
    {
        return $this->files[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }
}

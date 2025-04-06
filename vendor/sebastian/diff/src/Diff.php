<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Diff;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

/**
 * @template-implements IteratorAggregate<int, Chunk>
 */
final class Diff implements IteratorAggregate
{
    /**
<<<<<<< HEAD
     * @psalm-var non-empty-string
=======
     * @var non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private string $from;

    /**
<<<<<<< HEAD
     * @psalm-var non-empty-string
=======
     * @var non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private string $to;

    /**
<<<<<<< HEAD
     * @psalm-var list<Chunk>
=======
     * @var list<Chunk>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $chunks;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $from
     * @psalm-param non-empty-string $to
     * @psalm-param list<Chunk> $chunks
=======
     * @param non-empty-string $from
     * @param non-empty-string $to
     * @param list<Chunk>      $chunks
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $from, string $to, array $chunks = [])
    {
        $this->from   = $from;
        $this->to     = $to;
        $this->chunks = $chunks;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function from(): string
    {
        return $this->from;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function to(): string
    {
        return $this->to;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Chunk>
=======
     * @return list<Chunk>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function chunks(): array
    {
        return $this->chunks;
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<Chunk> $chunks
=======
     * @param list<Chunk> $chunks
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function setChunks(array $chunks): void
    {
        $this->chunks = $chunks;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     *
     * @deprecated
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @psalm-return non-empty-string
     *
     * @deprecated
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @psalm-return list<Chunk>
     *
     * @deprecated
     */
    public function getChunks(): array
    {
        return $this->chunks;
    }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->chunks);
    }
}

<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

use function count;
use Countable;
use IteratorAggregate;

/**
 * @template-implements IteratorAggregate<int, Test>
 *
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TestCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<Test>
     */
    private readonly array $tests;

    /**
     * @psalm-param list<Test> $tests
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestCollection implements Countable, IteratorAggregate
{
    /**
     * @var list<Test>
     */
    private array $tests;

    /**
     * @param list<Test> $tests
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function fromArray(array $tests): self
    {
        return new self(...$tests);
    }

    private function __construct(Test ...$tests)
    {
        $this->tests = $tests;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Test>
=======
     * @return list<Test>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function asArray(): array
    {
        return $this->tests;
    }

    public function count(): int
    {
        return count($this->tests);
    }

    public function getIterator(): TestCollectionIterator
    {
        return new TestCollectionIterator($this);
    }
}

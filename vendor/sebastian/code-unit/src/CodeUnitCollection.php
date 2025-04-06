<?php declare(strict_types=1);
/*
 * This file is part of sebastian/code-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeUnit;

use function array_merge;
use function count;
use Countable;
use IteratorAggregate;

/**
 * @template-implements IteratorAggregate<int, CodeUnit>
 *
<<<<<<< HEAD
 * @psalm-immutable
 */
final class CodeUnitCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<CodeUnit>
     */
    private readonly array $codeUnits;

    public static function fromList(CodeUnit ...$codeUnits): self
    {
=======
 * @immutable
 */
final readonly class CodeUnitCollection implements Countable, IteratorAggregate
{
    /**
     * @var list<CodeUnit>
     */
    private array $codeUnits;

    public static function fromList(CodeUnit ...$codeUnits): self
    {
        // @phpstan-ignore argument.type
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return new self($codeUnits);
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<CodeUnit> $codeUnits
=======
     * @param list<CodeUnit> $codeUnits
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function __construct(array $codeUnits)
    {
        $this->codeUnits = $codeUnits;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<CodeUnit>
=======
     * @return list<CodeUnit>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function asArray(): array
    {
        return $this->codeUnits;
    }

    public function getIterator(): CodeUnitCollectionIterator
    {
        return new CodeUnitCollectionIterator($this);
    }

    public function count(): int
    {
        return count($this->codeUnits);
    }

    public function isEmpty(): bool
    {
        return empty($this->codeUnits);
    }

    public function mergeWith(self $other): self
    {
        return new self(
            array_merge(
                $this->asArray(),
<<<<<<< HEAD
                $other->asArray()
            )
=======
                $other->asArray(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }
}

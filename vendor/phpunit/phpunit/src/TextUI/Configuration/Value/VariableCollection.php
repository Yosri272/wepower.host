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
 * @template-implements IteratorAggregate<int, Variable>
 */
final class VariableCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<Variable>
     */
    private readonly array $variables;

    /**
     * @psalm-param list<Variable> $variables
=======
 * @immutable
 *
 * @template-implements IteratorAggregate<int, Variable>
 */
final readonly class VariableCollection implements Countable, IteratorAggregate
{
    /**
     * @var list<Variable>
     */
    private array $variables;

    /**
     * @param list<Variable> $variables
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function fromArray(array $variables): self
    {
        return new self(...$variables);
    }

    private function __construct(Variable ...$variables)
    {
        $this->variables = $variables;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<Variable>
=======
     * @return list<Variable>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function asArray(): array
    {
        return $this->variables;
    }

    public function count(): int
    {
        return count($this->variables);
    }

    public function getIterator(): VariableCollectionIterator
    {
        return new VariableCollectionIterator($this);
    }
}

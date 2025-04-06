<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use function count;
use ArrayIterator;
use Countable;
use DOMNode;
use DOMNodeList;
use IteratorAggregate;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @template-implements IteratorAggregate<int, DOMNode>
 */
final class SnapshotNodeList implements Countable, IteratorAggregate
{
    /**
<<<<<<< HEAD
     * @psalm-var list<DOMNode>
     */
    private array $nodes = [];

=======
     * @var list<DOMNode>
     */
    private array $nodes = [];

    /**
     * @param DOMNodeList<DOMNode> $list
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public static function fromNodeList(DOMNodeList $list): self
    {
        $snapshot = new self;

        foreach ($list as $node) {
            $snapshot->nodes[] = $node;
        }

        return $snapshot;
    }

    public function count(): int
    {
        return count($this->nodes);
    }

<<<<<<< HEAD
=======
    /**
     * @return ArrayIterator<int, DOMNode>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->nodes);
    }
}

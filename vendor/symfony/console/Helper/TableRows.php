<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

/**
 * @internal
 */
class TableRows implements \IteratorAggregate
{
<<<<<<< HEAD
    private \Closure $generator;

    public function __construct(\Closure $generator)
    {
        $this->generator = $generator;
=======
    public function __construct(
        private \Closure $generator,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getIterator(): \Traversable
    {
        return ($this->generator)();
    }
}

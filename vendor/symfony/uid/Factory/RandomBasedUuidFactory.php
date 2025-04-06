<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Uid\Factory;

use Symfony\Component\Uid\UuidV4;

class RandomBasedUuidFactory
{
<<<<<<< HEAD
    private string $class;

    public function __construct(string $class)
    {
        $this->class = $class;
=======
    /**
     * @param class-string $class
     */
    public function __construct(
        private string $class,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function create(): UuidV4
    {
        $class = $this->class;

        return new $class();
    }
}
